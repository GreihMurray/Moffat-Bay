package com.moffat.bay.MoffatBay.Services;

import com.moffat.bay.MoffatBay.Domains.Contact;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.mail.SimpleMailMessage;
import org.springframework.mail.javamail.JavaMailSender;
import org.springframework.stereotype.Service;

@Service
public class ContactService {
    @Autowired
    JavaMailSender mailSender;

    public Boolean sendMail(Contact contact){
        try{

            SimpleMailMessage msg = new SimpleMailMessage();
            msg.setFrom("moffatcontact@gmail.com");
            msg.setTo(contact.getEmail());
            msg.setSubject("Contact Received, we'll be in touch shortly");
            msg.setText("Hello " + contact.getName() + "! \n\n Thank you for contacting Moffat Bay Lodge, we " +
                "will get back to you soon about \n\n\n" + contact.getReason()
            );

            mailSender.send(msg);

            return true;
        } catch (Exception e){
            return false;
        }
    }
}
