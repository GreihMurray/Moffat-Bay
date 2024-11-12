package com.moffat.bay.MoffatBay.Entities;

import jakarta.persistence.*;
import lombok.Data;

@Data
@Entity
@Table(name = "roomtype")
public class RoomType {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "RoomType")
    private Long roomType;

    @Column(name = "Capacity")
    private Integer capacity;

    @Column(name = "RoomNumber")
    private Integer roomNumber;
}
