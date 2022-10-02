<?php

//query to database

class sendToDB extends Dbh
{
    protected function setGuestReservation($firstName, $lastName, $phoneNumber, $date, $time, $guests, $accomodations, $seating)
    {
        $stmt = $this->connect()->prepare('INSERT INTO guests (firstname, lastname, phone, guest_date, guest_time, guest_number, accomodations, seating) VALUES (?,?,?,?,?,?,?,?);');
        if
    }

}
