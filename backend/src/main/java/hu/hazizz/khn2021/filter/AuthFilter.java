package hu.hazizz.khn2021.filter;

import hu.hazizz.khn2021.manager.AuthManager;
import hu.hazizz.khn2021.resource.User;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.authentication.UsernamePasswordAuthenticationToken;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.web.authentication.WebAuthenticationDetailsSource;
import org.springframework.stereotype.Component;
import org.springframework.web.filter.OncePerRequestFilter;

import javax.servlet.FilterChain;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;
import java.util.Optional;

@Component
public final class AuthFilter extends OncePerRequestFilter {

    private static final String NORMAL_PREFIX = "Bearer";

    private final AuthManager authManager;

    @Autowired
    public AuthFilter(AuthManager authManager) {
        this.authManager = authManager;
    }

    @Override
    protected void doFilterInternal(HttpServletRequest request, HttpServletResponse response, FilterChain chain) throws ServletException, IOException {
        String auth = Optional.ofNullable(request.getHeader("Authorization")).orElse("-");
        if (auth.startsWith(NORMAL_PREFIX)) {
            String token = auth.replaceFirst(NORMAL_PREFIX, "").trim();
            Optional<User> user = authManager.findValidUserByJwt(token);
            if (user.isPresent()) {
                UsernamePasswordAuthenticationToken authentication = new UsernamePasswordAuthenticationToken(user.get(),
                        token,
                        user.get().getAuthorities());

                authentication.setDetails(new WebAuthenticationDetailsSource().buildDetails(request));
                SecurityContextHolder.getContext().setAuthentication(authentication);
            }
        }
        chain.doFilter(request, response);
    }
}
