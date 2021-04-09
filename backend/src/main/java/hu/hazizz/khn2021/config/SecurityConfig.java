package hu.hazizz.khn2021.config;

import hu.hazizz.khn2021.filter.AuthFilter;
import hu.hazizz.khn2021.filter.CustomCorsFilter;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configuration.WebSecurityConfigurerAdapter;
import org.springframework.security.config.http.SessionCreationPolicy;
import org.springframework.security.web.authentication.www.BasicAuthenticationFilter;

@Configuration
@EnableWebSecurity
public class SecurityConfig extends WebSecurityConfigurerAdapter {

    private final CustomCorsFilter corsFilter;
    private final AuthFilter authFilter;

    @Autowired
    public SecurityConfig(CustomCorsFilter corsFilter,
                          AuthFilter authFilter) {
        this.corsFilter = corsFilter;
        this.authFilter = authFilter;
    }

    @Override
    protected void configure(final HttpSecurity http) throws Exception {
        http
                .headers().frameOptions().disable()
                .and()

                .csrf().disable()

                .sessionManagement()
                .sessionCreationPolicy(SessionCreationPolicy.STATELESS)
                .and()

                .authorizeRequests()
                .antMatchers("/public/**").permitAll()
                .antMatchers("/auth**", "/google-auth**").permitAll()
                .antMatchers("/username/**").permitAll()
                .antMatchers("/static/**").permitAll()
                .antMatchers("/",
                        "/index.html",
                        "/client-version",
                        "/*.js",
                        "/*.json",
                        "/site.webmanifest",
                        "/apple-touch-icon.png",
                        "/browserconfig.xml",
                        "/safari-pinned-tab.svg"
                ).permitAll()
                .anyRequest().authenticated()
                .and()

                .addFilterAt(authFilter, BasicAuthenticationFilter.class)
                .addFilterBefore(corsFilter, BasicAuthenticationFilter.class);
    }

}
