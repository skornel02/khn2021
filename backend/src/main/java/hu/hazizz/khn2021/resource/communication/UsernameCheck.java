package hu.hazizz.khn2021.resource.communication;

import hu.hazizz.khn2021.resource.User;
import lombok.Data;

@Data
public class UsernameCheck {

    private String username;
    private String profilePictureUrl;
    private String permission;

    private UsernameCheck(String username, String profilePictureUrl, String permission) {
        this.username = username;
        this.profilePictureUrl = profilePictureUrl;
        this.permission = permission;
    }

    public static UsernameCheck of(User user) {
        return new UsernameCheck(user.getUsername(), user.getProfilePictureUrl(), user.getPermission().getAuthority());
    }
}
