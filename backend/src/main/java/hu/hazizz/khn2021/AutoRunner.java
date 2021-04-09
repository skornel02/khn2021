package hu.hazizz.khn2021;

import hu.hazizz.khn2021.manager.UserManager;
import hu.hazizz.khn2021.resource.Permission;
import hu.hazizz.khn2021.resource.User;
import hu.hazizz.khn2021.resource.communication.UserCreationRequest;
import lombok.extern.slf4j.Slf4j;
import org.springframework.boot.CommandLineRunner;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Slf4j
@Service
public class AutoRunner implements CommandLineRunner {

    private final UserManager userManager;

    public AutoRunner(UserManager userManager) {
        this.userManager = userManager;
    }

    @Override
    public void run(String... args) throws Exception {
        try {
            Optional<User> adminUserOptional = userManager.getUser("admin");
            if(adminUserOptional.isEmpty()){
                log.info("Admin user isn't present! Creating a new one!");
                //noinspection SpellCheckingInspection
                userManager.createUser(new UserCreationRequest("admin", "https://via.placeholder.com/150", null, "nimda", Permission.SUPER_ADMIN));
            }
        } catch (Exception ex) {
            log.error("FAILED RUNNER", ex);
        }
    }


}
