<?php
$title = "Review your Reservation Details";
include_once "header.php";
if (isset($_SESSION['guest'])) {
    $guest = $_SESSION['guest'];

} else {
    header("Location: 404.php?error=invalid_access");
}

?>
<section class="reserve-image">
<div class="container">
    <!--begin main content-->
    <div class="row align-items-center ">

    <div class="col">
        <div class="form-style" id="guest-info"><h3><?php echo "Reservation for Guest<br> " . $guest['firstname'] . " " . $guest['lastname']; ?></h3></div>

    </div>
    </div>
</div>
</section>
<?php
include_once 'footer.php';
?>
