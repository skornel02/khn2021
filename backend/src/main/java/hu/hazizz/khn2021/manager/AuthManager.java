package hu.hazizz.khn2021.manager;

import hu.hazizz.khn2021.resource.User;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;

import java.util.Objects;
import java.util.Optional;

@Service
public class AuthManager {

    private final UserManager userManager;
    private final TokenManager tokenManager;
    private final GoogleTokenManager googleTokenManager;
    private final PasswordEncoder encoder;

    public AuthManager(UserManager userManager,
                       TokenManager tokenManager,
                       GoogleTokenManager googleTokenManager,
                       PasswordEncoder encoder) {
        this.userManager = userManager;
        this.tokenManager = tokenManager;
        this.googleTokenManager = googleTokenManager;
        this.encoder = encoder;
    }

    public Optional<User> findValidUser(String username, String password) {
        Optional<User> userOptional = userManager.getUser(username);

        if (userOptional.isPresent()) {
            User user = userOptional.get();
            if (user.getEncryptedPass() != null) {
                if (password != null && encoder.matches(password, user.getEncryptedPass())) {
                    return userOptional;
                }
            }  else {
                if (Objects.equals(user.getPassword(), password)) {
                    return userOptional;
                }
            }
        }

        return Optional.empty();
    }

    public Optional<User> findValidUserByGoogleId(String googleToken) {
        return googleTokenManager.checkOpenIDTokenOTE(googleToken)
                .flatMap(info -> userManager.getUserByEmail(info.getPayload().getEmail()));
    }

    public Optional<User> findValidUserByJwt(String token) {
        Optional<Long> userIdOptional = tokenManager.getUserIdFromToken(token);

        if (userIdOptional.isPresent()) {
            return userManager.getUser(userIdOptional.get());
        }
        return Optional.empty();
    }

    public String getTokenForUser(User user) {
        return tokenManager.getTokenForUser(user.getId());
    }

}
