package hu.hazizz.khn2021.config.property;

import lombok.Data;
import org.springframework.boot.context.properties.ConfigurationProperties;
import org.springframework.boot.context.properties.NestedConfigurationProperty;
import org.springframework.stereotype.Component;

@Component
@ConfigurationProperties(prefix = "khn")
@Data
public class CustomProperties {

    @NestedConfigurationProperty
    private AuthConfig auth = new AuthConfig();

}
