package hu.hazizz.khn2021.repository;

import hu.hazizz.khn2021.resource.User;
import org.springframework.data.repository.CrudRepository;

import java.util.List;
import java.util.Optional;

public interface UserRepository extends CrudRepository<User, Long> {

    List<User> findAllByOrderById();

    Optional<User> findByUsernameIgnoreCase(String username);

    Optional<User> findByEmailAddress(String email);

}
