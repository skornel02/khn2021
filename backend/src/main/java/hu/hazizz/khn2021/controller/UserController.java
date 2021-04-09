package hu.hazizz.khn2021.controller;

import hu.hazizz.khn2021.manager.SessionManager;
import hu.hazizz.khn2021.manager.UserManager;
import hu.hazizz.khn2021.resource.Permission;
import hu.hazizz.khn2021.resource.User;
import hu.hazizz.khn2021.resource.communication.UserCreationRequest;
import hu.hazizz.khn2021.resource.communication.UserResource;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.List;
import java.util.stream.Collectors;

@RestController
@RequestMapping("/users")
public class UserController {
    
    private final SessionManager sessionManager;
    private final UserManager userManager;

    @Autowired
    public UserController(UserManager userManager,
                          SessionManager sessionManager) {
        this.userManager = userManager;
        this.sessionManager = sessionManager;
    }

    @GetMapping
    public ResponseEntity<List<UserResource>> returnUsers(){
        sessionManager.checkSuperAdminOTE();

        return ResponseEntity.ok(userManager.getUsers()
                .stream()
                .map(User::toResource)
                .collect(Collectors.toList()));
    }

    @PostMapping
    public ResponseEntity<UserResource> createUser(@Valid @RequestBody UserCreationRequest request){
        sessionManager.checkAdminOTE();
        if (request.getAuthority().equals(Permission.SUPER_ADMIN))
            sessionManager.checkSuperAdminOTE();

        return ResponseEntity.ok(userManager.createUser(request).toResource());
    }

    @PatchMapping("/{userId}")
    public ResponseEntity<UserResource> updateUser(@PathVariable long userId,
                                                   @Valid @RequestBody UserCreationRequest request){
        sessionManager.checkAdminOTE();
        if (request.getAuthority().equals(Permission.SUPER_ADMIN))
            sessionManager.checkSuperAdminOTE();

        User user = userManager.getAdminOTE(userId);

        return ResponseEntity.ok(userManager.updateUser(user, request).toResource());
    }

    @DeleteMapping("/{userId}")
    public ResponseEntity<Void> deleteUser(@PathVariable long userId){
        sessionManager.checkAdminOTE();

        User user = userManager.getAdminOTE(userId);
        if (Permission.hasPermission(Permission.ADMIN, user.getPermission().getAuthority()))
            sessionManager.checkSuperAdminOTE();

        userManager.removeUserById(userId);

        return ResponseEntity.accepted().build();
    }

}
