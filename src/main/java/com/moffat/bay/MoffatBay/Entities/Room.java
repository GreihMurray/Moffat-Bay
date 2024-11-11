package com.moffat.bay.MoffatBay.Entities;

import jakarta.persistence.*;
import lombok.Data;

@Data
@Entity
@Table(name = "rooms")
public class Room {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "RoomId")
    private Long roomId;

    @Column(name = "Capacity")
    private Integer capacity;

    @Column(name = "RoomNumber")
    private Integer roomNumber;

    @ManyToOne
    @JoinColumn(name = "RoomType", referencedColumnName = "RoomType")
    private RoomType roomType;
}
