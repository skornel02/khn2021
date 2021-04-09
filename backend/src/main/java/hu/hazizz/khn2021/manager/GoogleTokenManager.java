package hu.hazizz.khn2021.manager;

import com.google.api.client.googleapis.auth.oauth2.GoogleIdToken;
import com.google.api.client.googleapis.auth.oauth2.GoogleIdTokenVerifier;
import com.google.api.client.http.javanet.NetHttpTransport;
import com.google.api.client.json.gson.GsonFactory;
import hu.hazizz.khn2021.config.property.CustomProperties;
import lombok.val;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class GoogleTokenManager {

    private final GoogleIdTokenVerifier verifier;

    @Autowired
    public GoogleTokenManager(CustomProperties config) {
        List<String> clientIds = config.getAuth().getClientIds();
        List<String> issuers = config.getAuth().getIssuers();
        verifier = new GoogleIdTokenVerifier.Builder(new NetHttpTransport(), GsonFactory.getDefaultInstance())
                .setAudience(clientIds)
                .setIssuers(issuers)
                .build();
    }

    public Optional<GoogleIdToken> checkOpenIDTokenOTE(String openIDToken) {
        try {
            val information = verifier.verify(openIDToken);
            return Optional.ofNullable(information);
        } catch (Exception ignored) {
            return Optional.empty();
        }
    }

}
