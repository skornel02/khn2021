package hu.hazizz.khn2021.repository;

import hu.hazizz.khn2021.resource.Permission;
import org.springframework.data.repository.CrudRepository;

import java.util.Optional;

public interface PermissionRepository extends CrudRepository<Permission, Long> {

    Optional<Permission> findByAuthority(String authority);

}
