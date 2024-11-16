package com.moffat.bay.MoffatBay.Services;

import com.moffat.bay.MoffatBay.Domains.UserRegistration;
import com.moffat.bay.MoffatBay.Entities.User;
import com.moffat.bay.MoffatBay.Repositories.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.time.Instant;
import java.util.Date;

@Service
public class UserService {
    @Autowired
    UserRepository userRepository;

    public Boolean canSignIn(String email, String password){
        User user = userRepository.loginUser(email, password);

        if(user == null){
            return false;
        } else{
            return true;
        }
    }

    public Boolean registerUser(UserRegistration registration){
        User user = new User();

        user.setEmail(registration.getEmail());
        user.setPassword(registration.getPassword());
        user.setLastName(registration.getLastName());
        user.setFirstName(registration.getFirstName());
        user.setPhoneNumber(registration.getPhoneNumber());
        user.setDateCreated(new Date());

        try{
            userRepository.save(user);

            return true;
        } catch (Exception e){
            return false;
        }
    }
}
