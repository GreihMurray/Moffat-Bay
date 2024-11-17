package com.moffat.bay.MoffatBay.Controllers;

import com.moffat.bay.MoffatBay.Domains.UserLogin;
import com.moffat.bay.MoffatBay.Domains.UserRegistration;
import com.moffat.bay.MoffatBay.Entities.User;
import com.moffat.bay.MoffatBay.Services.MainService;
import com.moffat.bay.MoffatBay.Services.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.MediaType;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@Controller
@CrossOrigin(origins = "*")
@RequestMapping(value = "/moffat/bay")
public class BaseController {
    @Autowired
    MainService mainService;

    @Autowired
    UserService userService;

    //This is the endpoint and request type for the api
    @GetMapping("/users")
    public ResponseEntity<?> getUsers(){
        //Returning ResponseEntity seems to fix a weird error I was seeing
        return ResponseEntity.ok(mainService.getUsers());
    }

    @PostMapping(path = "/login")
    public ResponseEntity<?> loginUser(@RequestBody UserLogin userLogin){
        Boolean canLogin = userService.canSignIn(userLogin.getEmail(), userLogin.getPassword());

        if(canLogin){
            System.out.println("True");
            return ResponseEntity.ok("signedIn");
        } else{
            System.out.println("false");
            return new ResponseEntity<>(HttpStatus.UNAUTHORIZED);
        }
    }

    @PostMapping("/register")
    public ResponseEntity<?> registerUser(@RequestBody UserRegistration registration){
        if(registration.isValid()){
            boolean registered = userService.registerUser(registration);

            if(registered){
                return ResponseEntity.ok().build();
            } else{
                return ResponseEntity.internalServerError().body("Error registering");
            }
        } else{
            return ResponseEntity.badRequest().body(registration.getError());
        }
    }
}
