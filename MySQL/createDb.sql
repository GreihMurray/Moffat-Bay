START TRANSACTION;

DROP USER IF EXISTS `moffat`@`localhost`;
FLUSH PRIVILEGES;

DROP SCHEMA IF EXISTS `moffat_bay`;

CREATE SCHEMA moffat_bay;
USE moffat_bay;
CREATE USER 'moffat'@'localhost' IDENTIFIED BY 'toor';
GRANT ALL ON moffat_bay.* TO 'moffat'@'localhost';

CREATE TABLE `Users`(
	`UserId` int NOT NULL auto_increment,
    `FirstName` varchar(255),
    `LastName` varchar(255),
    `Email` varchar(255),
    `Password` varchar(255),
    `PhoneNumber` varchar(255),
    `DateCreated` TIMESTAMP,
    PRIMARY KEY(`UserId`)
);

CREATE TABLE `RoomType`(
	`RoomType` int NOT NULL auto_increment,
    `RoomId` int,
    `Capacity` int,
    `RoomNumber` int,
    PRIMARY KEY(`RoomType`)
);

CREATE TABLE `Rooms`(
	`RoomId` int NOT NULL auto_increment,
    `Capacity` int,
    `RoomNumber` int,
    `RoomType` int,
    PRIMARY KEY(`RoomId`),
    FOREIGN KEY (`RoomType`) REFERENCES `RoomType`(`RoomType`)
);

CREATE TABLE `Reservations`(
	`ReservationId` int NOT NULL auto_increment,
    `UserId` int,
    `RoomId` int,
    `CheckInDate` DATE,
    `CheckOutDate` DATE,
    `Status` varchar(30),
    `TotalCost` Decimal(10, 2),
    PRIMARY KEY(`ReservationId`),
    FOREIGN KEY (`RoomId`) REFERENCES `Rooms`(`RoomId`),
    FOREIGN KEY (`UserId`) REFERENCES `Users`(`UserId`)
);

CREATE TABLE `Payment`(
	`PaymentId` int NOT NULL auto_increment,
    `ReservationId` int,
    `PaymentDate` DATE,
    `PaymentAmount` int,
    `PaymentMethod` varchar(255),
    PRIMARY KEY(`PaymentId`),
    FOREIGN KEY (`ReservationId`) REFERENCES `Reservations`(`ReservationId`)
);

COMMIT;