package hu.hazizz.khn2021.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class ClientController {

    @GetMapping({"/"})
    public String getStaticSite() {
        return "forward:/index.html";
    }


}
