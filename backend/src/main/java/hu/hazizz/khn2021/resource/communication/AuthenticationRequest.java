package hu.hazizz.khn2021.resource.communication;

import lombok.Data;

import javax.validation.constraints.NotEmpty;

@Data
public class AuthenticationRequest {

    @NotEmpty
    private String username;

    @NotEmpty
    private String password;

    public String getUsername() {
        return username.toLowerCase();
    }

}
