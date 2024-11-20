package com.moffat.bay.MoffatBay.Services;

import com.moffat.bay.MoffatBay.Domains.ReservationRequest;
import com.moffat.bay.MoffatBay.Entities.Reservation;
import com.moffat.bay.MoffatBay.Entities.User;
import com.moffat.bay.MoffatBay.Repositories.ReservationRepository;
import com.moffat.bay.MoffatBay.Repositories.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.time.Instant;
import java.util.Date;
import java.util.List;
import java.util.stream.Collectors;

@Service
public class BookingService {
    @Autowired
    ReservationRepository reservationRepository;

    @Autowired
    UserRepository userRepository;

    public void addBooking(ReservationRequest request){
        User user = userRepository.findUserByEmail(request.getEmail());

        Reservation entity = new Reservation();
        entity.setCheckInDate(Date.from(Instant.parse(request.getCheckIn() + "T00:00:00.000000Z")));
        entity.setCheckOutDate(Date.from(Instant.parse(request.getCheckOut() + "T00:00:00.000000Z")));
        entity.setStatus("Not checked in");
        entity.setTotalCost(request.getCost());
        entity.setUser(user);
        entity.setRooms(request.getRooms().stream().collect(Collectors.toSet()));

        reservationRepository.save(entity);
    }

    public List<Reservation> getUsersReservations(String email){
        User user = userRepository.findUserByEmail(email);

        List<Reservation> reservations = reservationRepository.findAllByUser(user);

        return reservations;
    }
}
