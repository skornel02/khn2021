package hu.hazizz.khn2021.manager;

import hu.hazizz.khn2021.config.property.CustomProperties;
import io.jsonwebtoken.JwtParser;
import io.jsonwebtoken.Jwts;
import io.jsonwebtoken.security.Keys;
import lombok.val;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.nio.charset.StandardCharsets;
import java.security.Key;
import java.time.LocalDateTime;
import java.time.ZoneOffset;
import java.time.temporal.ChronoUnit;
import java.util.Date;
import java.util.Objects;
import java.util.Optional;
import java.util.UUID;

@Service
public class TokenManager {

    private static final String USER_AUDIENCE = "User";
    private static final String ZONE_AUDIENCE = "Zone";

    private final Key privateKey;
    private final JwtParser parser;

    @Autowired
    public TokenManager(CustomProperties config) {
        this.privateKey = Keys.hmacShaKeyFor(config.getAuth().getSigningKey().getBytes(StandardCharsets.UTF_8));
        this.parser = Jwts.parserBuilder()
                .setSigningKey(privateKey)
                .build();
    }

    public String getTokenForUser(long userId) {
        return Jwts.builder()
                .signWith(privateKey)
                .setSubject(Long.toString(userId))
                .setAudience(USER_AUDIENCE)
                .setIssuer("ParkMyst Backend")
                .setIssuedAt(Date.from(LocalDateTime.now().toInstant(ZoneOffset.UTC)))
                .setExpiration(Date.from(LocalDateTime.now().plus(1, ChronoUnit.WEEKS).toInstant(ZoneOffset.UTC)))
                .setId(UUID.randomUUID().toString())
                .compact();
    }

    public Optional<Long> getUserIdFromToken(String token) {
        try {
            val result = parser.parseClaimsJws(token);
            if (!Objects.equals(result.getBody().getAudience(), USER_AUDIENCE))
                return Optional.empty();

            return Optional.of(Long.parseLong(result.getBody().getSubject()
            ));
        } catch (Exception ex) {
            return Optional.empty();
        }
    }

    public String createTokenForZoneApiKey(long zoneId, long id) {
        return Jwts.builder()
                .signWith(privateKey)
                .setSubject(Long.toString(zoneId))
                .setAudience(ZONE_AUDIENCE)
                .setIssuer("ParkMyst Backend")
                .setIssuedAt(Date.from(LocalDateTime.now().toInstant(ZoneOffset.UTC)))
                .setId(Long.toString(id))
                .compact();
    }

    public Optional<Long> getZoneApiKeyIdFromToken(String token) {
        try {
            val result = parser.parseClaimsJws(token);
            if (!Objects.equals(result.getBody().getAudience(), ZONE_AUDIENCE))
                return Optional.empty();

            return Optional.of(Long.parseLong(result.getBody().getId()));
        } catch (Exception ex) {
            return Optional.empty();
        }
    }

}
