package com.moffat.bay.MoffatBay.Domains;

import com.moffat.bay.MoffatBay.Entities.Room;
import lombok.AllArgsConstructor;
import lombok.Builder;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.util.Date;
import java.util.List;

@Data
@Builder
@NoArgsConstructor
@AllArgsConstructor
public class ReservationRequest {
    private String checkIn;
    private String checkOut;
    private Double cost;
    private String email;
    private List<Room> rooms;
}
