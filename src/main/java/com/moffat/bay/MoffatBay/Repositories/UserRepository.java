package com.moffat.bay.MoffatBay.Repositories;

import com.moffat.bay.MoffatBay.Entities.User;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.List;

public interface UserRepository extends JpaRepository<User, Long> {

}
