package hu.hazizz.khn2021.manager;

import hu.hazizz.khn2021.repository.UserRepository;
import hu.hazizz.khn2021.resource.Permission;
import hu.hazizz.khn2021.resource.User;
import hu.hazizz.khn2021.resource.communication.UserCreationRequest;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;
import org.springframework.web.server.ResponseStatusException;

import java.util.List;
import java.util.Optional;

@Service
public class UserManager {

    private final UserRepository repository;
    private final PermissionManager permissionManager;
    private final PasswordEncoder encoder;

    @Autowired
    public UserManager(UserRepository repository, PermissionManager permissionManager, PasswordEncoder encoder) {
        this.repository = repository;
        this.permissionManager = permissionManager;
        this.encoder = encoder;
    }

    public List<User> getUsers() {
        return repository.findAllByOrderById();
    }

    public Optional<User> getUser(long id) {
        return repository.findById(id);
    }

    public Optional<User> getUserByEmail(String email) {
        return repository.findByEmailAddress(email);
    }

    public User getUserOTE(long id) {
        return getUser(id)
                .orElseThrow(
                        () ->
                                new ResponseStatusException(
                                        HttpStatus.NOT_FOUND, "User #" + id + " was not found!"));
    }

    public User getAdminOTE(long id) {
        User user = getUserOTE(id);
        if (!Permission.hasPermission(Permission.ADMIN, user.getPermission().getAuthority()))
            throw new ResponseStatusException(HttpStatus.NOT_FOUND, "User #" + id + " was not found!");
        return user;
    }

    public Optional<User> getUser(String username) {
        return repository.findByUsernameIgnoreCase(username);
    }

    public User createUser(UserCreationRequest request) {
        if (getUser(request.getUsername()).isPresent())
            throw new ResponseStatusException(
                    HttpStatus.BAD_REQUEST,
                    "Username " + request.getUsername() + " is already in use!");
        if (request.getEmailAddress() != null && getUserByEmail(request.getEmailAddress()).isPresent()) {
            throw new ResponseStatusException(
                    HttpStatus.BAD_REQUEST,
                    "Email " + request.getEmailAddress() + " is already in use!");
        }

        User user = new User();
        user.setUsername(request.getUsername());
        user.setProfilePictureUrl(request.getProfilePictureUrl());
        String emailAddress = request.getEmailAddress() == null || request.getEmailAddress().isEmpty() ? null : request.getEmailAddress();
        user.setEmailAddress(emailAddress);

        switch (request.getAuthority().toUpperCase()) {
            case Permission.ADMIN:
            case Permission.SUPER_ADMIN:
                user.setEncryptedPass(encoder.encode(request.getPassword()));
                break;
            default:
                user.setPass(request.getPassword());
        }

        repository.save(user);

        setPermissionOfUser(permissionManager.getUserPermission(), user);
        switch (request.getAuthority().toUpperCase()) {
            case Permission.ADMIN:
                setPermissionOfUser(permissionManager.getAdminPermission(), user);
                break;
            case Permission.SUPER_ADMIN:
                setPermissionOfUser(permissionManager.getSuperAdminPermission(), user);
                break;
            default:
        }

        return user;
    }

    public User updateUser(User user, UserCreationRequest request) {
        Optional<User> usernameUser = getUser(request.getUsername());
        if (usernameUser.isPresent() && usernameUser.get().getId() != user.getId())
            throw new ResponseStatusException(
                    HttpStatus.BAD_REQUEST,
                    "Username " + request.getUsername() + " is already in use!");
        if (request.getEmailAddress() != null) {
            Optional<User> emailUser = getUserByEmail(request.getEmailAddress());
            if (emailUser.isPresent() && emailUser.get().getId() != user.getId())
                throw new ResponseStatusException(
                        HttpStatus.BAD_REQUEST,
                        "Email " + request.getEmailAddress() + " is already in use!");
        }

        user.setUsername(request.getUsername());
        String emailAddress = request.getEmailAddress() == null || request.getEmailAddress().isEmpty() ? null : request.getEmailAddress();
        user.setEmailAddress(emailAddress);
        user.setProfilePictureUrl(request.getProfilePictureUrl());

        switch (request.getAuthority().toUpperCase()) {
            case Permission.USER:
                setPermissionOfUser(permissionManager.getUserPermission(), user);
                break;
            case Permission.ADMIN:
                setPermissionOfUser(permissionManager.getAdminPermission(), user);
                break;
            case Permission.SUPER_ADMIN:
                setPermissionOfUser(permissionManager.getSuperAdminPermission(), user);
                break;
            default:
        }

        switch (request.getAuthority().toUpperCase()) {
            case Permission.ADMIN:
            case Permission.SUPER_ADMIN:
                user.setEncryptedPass(encoder.encode(request.getPassword()));
                break;
            default:
                user.setPass(request.getPassword());
        }

        repository.save(user);
        return user;
    }

    public void setPermissionOfUser(Permission permission, User user) {
        user.setPermission(permission);
        repository.save(user);
    }

    public void removeUserById(long userId) {
        repository.deleteById(userId);
    }


}
