package hu.hazizz.khn2021.resource.communication;

import hu.hazizz.khn2021.resource.Permission;
import lombok.Data;

import java.time.LocalDateTime;

@Data
public class UserResource {

    private long id;
    private String username;
    private String profilePictureUrl;
    private Permission permission;

}
