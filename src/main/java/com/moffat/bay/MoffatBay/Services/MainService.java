package com.moffat.bay.MoffatBay.Services;

import com.moffat.bay.MoffatBay.Entities.User;
import com.moffat.bay.MoffatBay.Repositories.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class MainService {
    @Autowired
    UserRepository userRepository;

    public List<User> getUsers(){
        return userRepository.findAll();
    }
}
