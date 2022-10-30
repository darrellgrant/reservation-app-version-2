<?php
session_start();

if (isset($_POST['submit-btn'])) {
    include_once 'dbh.inc.php';
    $firstName = check_input($_POST['fName']);
    $lastName = check_input($_POST['lName']);
    $phoneNumber = check_input($_POST['phNumber']);

    $sql = "SELECT * FROM guests WHERE firstname='$firstName' AND lastname='$lastName' AND phone='$phoneNumber'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck < 1) {
        header("Location: ../cancel.php?error=not_found");
        exit();

    } else {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['guest'] = $row;
        header("Location: ../cancel.php?success=user_found");
        exit();
    }

} elseif (isset($_POST['cancel-btn'])) {
    include_once 'dbh.inc.php';
    $guest_ID = check_input($_POST['guest-ID']);
    $sql = "DELETE FROM guests WHERE guest_ID='$guest_ID'";
    mysqli_query($conn, $sql);
    header("Location: ../cancel.php?action=user_deleted");
    exit();

}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
