package hu.hazizz.khn2021.resource;

import com.fasterxml.jackson.annotation.JsonValue;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.springframework.security.core.GrantedAuthority;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.Id;
import java.util.Objects;

@Entity
@Data
@NoArgsConstructor
public class Permission implements GrantedAuthority {


    public static final String USER = "USER";
    public static final String ADMIN = "ADMIN";
    public static final String SUPER_ADMIN = "SUPER_ADMIN";

    public static boolean hasPermission(String needed, String have) {
        if (have == null)
            return false;
        return (needed.equals(SUPER_ADMIN) && have.equals(SUPER_ADMIN))
                || (needed.equals(ADMIN) && (have.equals(ADMIN) || have.equals(SUPER_ADMIN)))
                || (needed.equals(USER) && (have.equals(USER) || have.equals(ADMIN) || have.equals(SUPER_ADMIN)));
    }

    @GeneratedValue
    @Id
    private long id;

    private String authority;

    public Permission(String authority) {
        this.authority = authority;
    }

    @JsonValue
    @Override
    public String getAuthority() {
        return authority;
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Permission that = (Permission) o;
        return id == that.id;
    }

    @Override
    public int hashCode() {
        return Objects.hash(id);
    }
}
