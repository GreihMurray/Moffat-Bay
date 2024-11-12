package com.moffat.bay.MoffatBay.Repositories;

import com.moffat.bay.MoffatBay.Entities.Payment;
import org.springframework.data.jpa.repository.JpaRepository;

public interface PaymentRepository extends JpaRepository<Payment, Long> {
}
