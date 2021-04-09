package hu.hazizz.khn2021.resource;

import hu.hazizz.khn2021.resource.communication.UserResource;
import lombok.Data;
import org.springframework.security.core.GrantedAuthority;
import org.springframework.security.core.userdetails.UserDetails;

import javax.persistence.*;
import java.time.LocalDateTime;
import java.util.Collection;
import java.util.Collections;
import java.util.Objects;

@Entity
@Data
public class User implements UserDetails {

    @GeneratedValue
    @Id
    private long id;

    private String username;

    @Column(length = 1000)
    private String profilePictureUrl;

    private String pass;

    private String encryptedPass;

    private String emailAddress;

    @ManyToOne
    private Permission permission;

    @Override
    public Collection<? extends GrantedAuthority> getAuthorities() {
        return Collections.singleton(permission);
    }

    @Override
    public String getPassword() {
        return pass;
    }

    @Override
    public boolean isAccountNonExpired() {
        return true;
    }

    @Override
    public boolean isAccountNonLocked() {
        return true;
    }

    @Override
    public boolean isCredentialsNonExpired() {
        return true;
    }

    @Override
    public boolean isEnabled() {
        return true;
    }

    public UserResource toResource() {
        UserResource resource = new UserResource();
        resource.setId(getId());
        resource.setUsername(getUsername());
        resource.setProfilePictureUrl(getProfilePictureUrl());
        resource.setPermission(getPermission());
        return resource;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        User user = (User) o;
        return id == user.id;
    }

    @Override
    public int hashCode() {
        return Objects.hash(id);
    }
}
