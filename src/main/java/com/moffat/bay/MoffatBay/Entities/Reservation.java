package com.moffat.bay.MoffatBay.Entities;

import jakarta.persistence.*;
import lombok.Data;

import java.util.Date;
import java.util.Set;

@Data
@Entity
@Table(name = "reservations")
public class Reservation {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "ReservationId")
    private Long reservationId;

    @ManyToOne
    @JoinColumn(name = "UserId", referencedColumnName = "UserId")
    private User user;

    @ManyToMany
    @JoinTable(name = "reservation_rooms",
        joinColumns = @JoinColumn(name="ReservationId"),
            inverseJoinColumns = @JoinColumn(name = "RoomId")
    )
    private Set<Room> rooms;

    @Column(name = "CheckInDate")
    private Date checkInDate;

    @Column(name = "CheckOutDate")
    private Date checkOutDate;

    @Column(name = "Status")
    private String status;

    @Column(name = "TotalCost")
    private Double totalCost;
}
