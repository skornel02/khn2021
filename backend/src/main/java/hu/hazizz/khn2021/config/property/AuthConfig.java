package hu.hazizz.khn2021.config.property;

import lombok.Data;

import java.util.Collections;
import java.util.List;

@Data
public class AuthConfig {

    private List<String> clientIds = Collections.emptyList();
    private List<String> issuers = Collections.emptyList();
    private String signingKey;

}
