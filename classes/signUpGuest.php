<?php
//create a Guest class

class Guest
{
    private $firstName;
    private $lastName;
    private $phoneNumber;
    private $date;
    private $time;
    private $guests;
    private $accomodations;
    private $seating;

    public function __construct($firstName, $lastName, $phoneNumber, $date, $time, $guests, $accomodations, $seating)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->date = $date;
        $this->time = $time;
        $this->guests = $guests;
        $this->accomodations = $accomodations;
        $this->seating = $seating;

    }
    //error handling

}
