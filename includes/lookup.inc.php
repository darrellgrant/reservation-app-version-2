<?php
session_start();

if (isset($_POST['submit'])) {
    include_once 'dbh.inc.php';
    $firstName = check_input($_POST['fName']);
    $lastName = check_input($_POST['lName']);
    $phoneNumber = check_input($_POST['phNumber']);

    $sql = "SELECT * FROM guests WHERE firstname='$firstName' AND lastname='$lastName' AND phone='$phoneNumber'";
    $result = mysqli_query($conn, $sql);
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
