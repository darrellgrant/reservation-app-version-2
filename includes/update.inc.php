<?php
session_start();
echo "YAYA";

if (isset($_POST['submit'])) {

    include_once 'dbh.inc.php';
    $guest_ID = check_input($POST['guest-ID']);

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
    $sql_update = "UPDATE guests SET firstname='$firstName', lastname='$lastName', phone='$phoneNumber', guest_date='$date', guest_time='$time', guest_number='$guests', accomodations='$accomodations', seating='$seating'
     WHERE guest_ID='$guest_ID'";
    mysqli_query($conn, $sql_update);

    $sql_select = "SELECT * FROM guests WHERE guest_ID='$guest_ID'";
    $result = mysqli_query($conn, $sql_select);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        echo "YAYA";

        //header("Location: ../404.php");
        header("Location: update.inc.php?YO=$guest_ID");
        echo $guest_ID;
        echo "YAYA";

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
