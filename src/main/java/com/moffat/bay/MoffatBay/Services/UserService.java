package com.moffat.bay.MoffatBay.Services;

import com.moffat.bay.MoffatBay.Entities.User;
import com.moffat.bay.MoffatBay.Repositories.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

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
}
