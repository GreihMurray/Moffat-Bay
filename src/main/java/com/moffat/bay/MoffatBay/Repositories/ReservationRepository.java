package com.moffat.bay.MoffatBay.Repositories;

import com.moffat.bay.MoffatBay.Entities.Reservation;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ReservationRepository extends JpaRepository<Reservation, Long> {
}
