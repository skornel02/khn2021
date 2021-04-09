package hu.hazizz.khn2021.controller;

import hu.hazizz.khn2021.manager.AuthManager;
import hu.hazizz.khn2021.manager.SessionManager;
import hu.hazizz.khn2021.manager.UserManager;
import hu.hazizz.khn2021.resource.User;
import hu.hazizz.khn2021.resource.communication.AuthenticationRequest;
import hu.hazizz.khn2021.resource.communication.UserResource;
import hu.hazizz.khn2021.resource.communication.UsernameCheck;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.server.ResponseStatusException;

import javax.validation.constraints.NotEmpty;
import java.util.Optional;

@RestController
public class AuthController {

    private final SessionManager sessionManager;
    private final AuthManager authManager;
    private final UserManager userManager;

    @Autowired
    public AuthController(SessionManager sessionManager,
                          AuthManager authManager,
                          UserManager userManager) {
        this.sessionManager = sessionManager;
        this.authManager = authManager;
        this.userManager = userManager;
    }

    @PostMapping("/auth")
    public String authenticate(@RequestBody AuthenticationRequest request){
        Optional<User> user = authManager.findValidUser(request.getUsername(), request.getPassword());

        if(user.isPresent()){
            return authManager.getTokenForUser(user.get());
        }else {
            throw new ResponseStatusException(HttpStatus.UNAUTHORIZED, "Invalid username and password combination!");
        }
    }

    @PostMapping("/google-auth")
    public String authenticate(@NotEmpty  @RequestBody String googleToken){
        Optional<User> user = authManager.findValidUserByGoogleId(googleToken);

        if(user.isPresent()){
            return authManager.getTokenForUser(user.get());
        }else {
            throw new ResponseStatusException(HttpStatus.UNAUTHORIZED, "No user found for this Google account!");
        }
    }

    @GetMapping("/username/{username}")
    public ResponseEntity<UsernameCheck> checkUsername(@PathVariable String username) {
        username = username.toLowerCase();
        Optional<User> user = userManager.getUser(username);
        if (user.isPresent()){
            return ResponseEntity.ok(UsernameCheck.of(user.get()));
        }else {
            throw new ResponseStatusException(HttpStatus.NOT_FOUND, "Invalid username!");
        }
    }

    @GetMapping("/me")
    public ResponseEntity<UserResource> returnMe() {
        return ResponseEntity.ok(sessionManager.getUser().toResource());
    }

}
