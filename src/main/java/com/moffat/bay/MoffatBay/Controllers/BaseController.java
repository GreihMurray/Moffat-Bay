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

    @GetMapping("/users")
    public ResponseEntity<?> getUsers(){
        return ResponseEntity.ok(mainService.getUsers());
    }
}
