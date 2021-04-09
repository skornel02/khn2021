package hu.hazizz.khn2021.resource.communication;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import javax.validation.constraints.NotEmpty;
import javax.validation.constraints.Size;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class UserCreationRequest {

    @NotEmpty
    @Size(min = 2, max = 24)
    private String username;

    @NotEmpty
    private String profilePictureUrl;

    private String emailAddress;

    @NotEmpty
    private String password;

    @NotEmpty
    private String authority;

    public String getUsername() {
        return username.toLowerCase();
    }
}
