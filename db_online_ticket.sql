CREATE DATABASE db_online_ticket;

USE db_online_ticket;

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    password_2 VARCHAR(255) NOT NULL,
    users VARCHAR(255)
);

CREATE TABLE type_ticket (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kelas VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE schedule (
    id INT PRIMARY KEY AUTO_INCREMENT,
    city VARCHAR(255) NOT NULL,
    jam_keberangkata VARCHAR(255) NOT NULL
);

CREATE TABLE booking (
    booking_id INT PRIMARY KEY AUTO_INCREMENT,
    users_id INT,
    type_ticket_id INT,
    schedule_id INT,
    booking_date TIMESTAMP NOT NULL,
    booking_status TIMESTAMP,
    quantity INT NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (users_id) REFERENCES users(id),
    FOREIGN KEY (type_ticket_id) REFERENCES type_ticket(id),
    FOREIGN KEY (schedule_id) REFERENCES schedule(id)
);
