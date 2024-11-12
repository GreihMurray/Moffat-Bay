package com.moffat.bay.MoffatBay.Controllers;

import com.moffat.bay.MoffatBay.Entities.User;
import com.moffat.bay.MoffatBay.Services.MainService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.List;

@Controller
@RequestMapping(value = "/moffat/bay")
public class BaseController {
    @Autowired
    MainService mainService;

    //This is the endpoint and request type for the api
    @GetMapping("/users")
    public ResponseEntity<?> getUsers(){
        //Returning ResponseEntity seems to fix a weird error I was seeing
        return ResponseEntity.ok(mainService.getUsers());
    }
}
