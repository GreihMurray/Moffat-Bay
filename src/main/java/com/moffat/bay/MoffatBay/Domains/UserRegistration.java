package com.moffat.bay.MoffatBay.Domains;

import com.moffat.bay.MoffatBay.Utils.StringUtil;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
public class UserRegistration {
    private String firstName;
    private String lastName;
    private String email;
    private String password;
    private String phoneNumber;

    private String error;

    public Boolean isValid(){
        boolean isValid = true;

        if(StringUtil.isNullOrEmpty(firstName)){
            setError("First name is required");
            isValid = false;
        }

        if(StringUtil.isNullOrEmpty(lastName)){
            setError("Last name is required");
            isValid = false;
        }

        if(StringUtil.isNullOrEmpty(phoneNumber)){
            setError("Phone number is required");
            isValid = false;
        }

        if(StringUtil.isNullOrEmpty(email)){
            setError("Email is required");
            isValid = false;
        }

        if(StringUtil.isNullOrEmpty(password)){
            setError("Password is required");
            isValid = false;
        }

        return isValid;
    }
}
