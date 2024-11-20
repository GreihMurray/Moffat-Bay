package com.moffat.bay.MoffatBay.Repositories;

import com.moffat.bay.MoffatBay.Entities.Reservation;
import com.moffat.bay.MoffatBay.Entities.User;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface ReservationRepository extends JpaRepository<Reservation, Long> {
    public List<Reservation> findAllByUser(User user);
}
