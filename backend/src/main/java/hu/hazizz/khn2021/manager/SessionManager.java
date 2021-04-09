package hu.hazizz.khn2021.manager;

import hu.hazizz.khn2021.resource.Permission;
import hu.hazizz.khn2021.resource.User;
import org.springframework.http.HttpStatus;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.stereotype.Service;
import org.springframework.web.server.ResponseStatusException;

@Service
public class SessionManager {

    public User getUser(){
        return (User) SecurityContextHolder.getContext().getAuthentication().getPrincipal();
    }

    public boolean hasPermission(String permission){
        return getUser().getPermission().getAuthority().equals(permission);
    }

    public void checkAdminOTE() {
        checkAdminOTE("You need admin permission to do that!");
    }

    public void checkAdminOTE(String exceptionMessage) {
        if (!hasPermission(Permission.ADMIN) && !hasPermission(Permission.SUPER_ADMIN))
            throw new ResponseStatusException(HttpStatus.FORBIDDEN, exceptionMessage);
    }

    public void checkSuperAdminOTE() {
        checkSuperAdminOTE("You need super-admin permission to do that!");
    }

    public void checkSuperAdminOTE(String exceptionMessage) {
        if (!hasPermission(Permission.SUPER_ADMIN))
            throw new ResponseStatusException(HttpStatus.FORBIDDEN, exceptionMessage);
    }

}
