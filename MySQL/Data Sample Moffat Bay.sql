INSERT INTO `Users` (`FirstName`, `LastName`, `Email`, `password`, `Phonenumber`) VALUES ('Alan', 'Richardson', 'Arichardson@gmail.com', 'Skipthegiving1!', '4078675309');
INSERT INTO `Users` (`FirstName`, `LastName`, `Email`, `password`, `Phonenumber`) VALUES ('Momo', 'Hirose', 'Hirochan@gmail.com', 'HunterxHuntee12@', '4766157952');
INSERT INTO `Users` (`FirstName`, `LastName`, `Email`, `password`, `Phonenumber`) VALUES ('Bill', 'Shatner', 'Startrekker@gmail.com', 'SpaceBoi11#', '8456218338');
INSERT INTO `Rooms` (`Capacity`,`RoomNumber` ) VALUES ('4', '5');
INSERT INTO `Rooms` (`Capacity`,`RoomNumber` ) VALUES ('6', '3');
INSERT INTO `Rooms` (`Capacity`,`RoomNumber` ) VALUES ('2', '1');
INSERT INTO `Roomtype` (`Capacity`,`RoomNumber`,`RoomPrice`, `RoomName` ) VALUES ('4', '5','127.50','Double Full');
INSERT INTO `Roomtype` (`Capacity`,`RoomNumber`,`RoomPrice`, `RoomName` ) VALUES ('6', '3','157.50','Double Queen');
INSERT INTO `Roomtype` (`Capacity`,`RoomNumber`,`RoomPrice`, `RoomName` ) VALUES ('2', '1','141.75','Queen');
INSERT INTO `Roomtype` (`Capacity`,`RoomNumber`,`RoomPrice`, `RoomName` ) VALUES ('3', '2','168.00','King');
INSERT INTO `Reservations` (`CheckInDate`, `CheckOutDate`, `Status`, `TotalCost`) VALUES ('2024-11-06', '2024-11-11', 'Checked In', '160.50');
INSERT INTO `Reservations` (`CheckInDate`, `CheckOutDate`, `Status`, `TotalCost`) VALUES ('2024-11-24', '2024-12-01', 'Not Checked In', '321.00');
INSERT INTO `Reservations` (`CheckInDate`, `CheckOutDate`, `Status`, `TotalCost`) VALUES ('2024-12-20', '2024-12-28', 'Not Checked In', '200.50');
INSERT INTO `Payment` (`PaymentDate`, `PaymentAmount`, `PaymentMethod`) VALUES ('2024-11-06', '160.50', 'Credit');
INSERT INTO `Payment` (`PaymentDate`, `PaymentAmount`, `PaymentMethod`) VALUES ('2024-11-01', '321.00', 'Debit');
INSERT INTO `Payment` (`PaymentDate`, `PaymentAmount`, `PaymentMethod`) VALUES ('2024-08-03', '200.50', 'Credit');
