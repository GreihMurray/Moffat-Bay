package com.moffat.bay.MoffatBay.Entities;

import jakarta.persistence.*;
import lombok.Data;

import java.util.Date;
import java.util.Set;

@Data
@Entity
@Table(name = "payment", schema = "moffat_bay")
public class Payment {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "PaymentId")
    private Long paymentId;

    @ManyToOne
    @JoinColumn(name = "ReservationId", referencedColumnName = "ReservationId")
    private Reservation reservation;

    @Column(name = "PaymentDate")
    private Date paymentDate;

    @Column(name = "PaymentAmount")
    private Double paymentAmount;

    @Column(name = "PaymentType")
    private String paymentType;
}
