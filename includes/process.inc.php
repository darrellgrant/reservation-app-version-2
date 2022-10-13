<?php
session_start();

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';

    $firstName = check_input($_POST['fName']);
    $lastName = check_input($_POST['lName']);
    $phoneNumber = check_input($_POST['phNumber']);
    $date = check_input($_POST['date']);
    //convert date from datepicker format to mysql format:
    $date = date('Y-m-d', strtotime($date));

    $time = check_input($_POST['time']);
    $guests = check_input($_POST['guests']);
    $accomodations = check_input($_POST['accomodations-check']);
    $seating = check_input($_POST['seating-check']);

    /* include "../classes/signUpGuest.php";
    $guest = new Guest($firstName, $lastName, $phoneNumber, $date, $time, $guests, $accomodations, $seating); */
    $sql_insert = "INSERT INTO guests (firstname,lastname,phone,guest_date,guest_time,guest_number,accomodations,seating)
    VALUES('$firstName', '$lastName', '$phoneNumber', '$date', '$time', '$guests', '$accomodations', '$seating');";
    mysqli_query($conn, $sql_insert);

    

    $sql_select = "SELECT * FROM guests WHERE phone='$phoneNumber' AND lastname ='$lastName'";
    $result = mysqli_query($conn, $sql_select);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../404.php");
        exit();
    } else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['guest'] = $row;
        header("Location: ../reserve.read.php");
        exit();

    }

}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
