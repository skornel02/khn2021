package hu.hazizz.khn2021.manager;

import hu.hazizz.khn2021.repository.PermissionRepository;
import hu.hazizz.khn2021.resource.Permission;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class PermissionManager {

    private final PermissionRepository repository;

    @Autowired
    public PermissionManager(PermissionRepository repository) {
        this.repository = repository;
    }

    private Permission getPermissionByAuthority(String authority){
        return repository.findByAuthority(authority).orElseGet(() -> {
            Permission permission = new Permission(authority);
            repository.save(permission);
            return permission;
        });
    }

    public Permission getUserPermission(){
        return getPermissionByAuthority(Permission.USER);
    }

    public Permission getAdminPermission(){
        return getPermissionByAuthority(Permission.ADMIN);
    }

    public Permission getSuperAdminPermission(){
        return getPermissionByAuthority(Permission.SUPER_ADMIN);
    }

}
