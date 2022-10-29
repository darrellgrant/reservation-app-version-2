<?php
$title = "Review your Reservation Details";
include_once "header_2.php";
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
        <section>
        <div class="form-style custom-margin">
            <div>
                <h3>
                    <?php echo "Reservation for Guest" ?>
                </h3>
            </div>
            <div>
                <h3>
                    <?php echo $guest['firstname'] . " " . $guest['lastname']; ?>
                </h3>
            </div>
           <div>
            Date: <b><?php echo date('m/d/Y', strtotime($guest['guest_date'])); ?> </b> Time: <b> <?php echo $guest['guest_time'] ?></b>
           </div>
           <div>
            For: <b><?php echo $guest['guest_number'] ?></b> Guests
           </div>
           <div>
            Seating Preference: <b><?php echo $guest['seating'] ?></b>
           </div>
           <div>
            Accomodations Needed? <b><?php echo $guest['accomodations'] ?></b>
           </div>
            <div>
                Contact Number: <b><?php echo $guest['phone'] ?></b>
            </div>
        </section>
        <section>
            <div class="form-style custom-margin">
                <div>
                    <p>If the above information is accurate, click the 'Exit' button.</p>
                    <p>If you wish to make changes, please click the 'Edit' button.</p>
                 </div>
                 <div>
                    <a href="index.php"><button type="button" class="btn btn-success me-3">Exit</button></a>
                    <a href="reserve.edit.php"><button type="button" class="btn btn-primary">Edit Details</button></a>

                </div>


        </section>
    </div>
    </div>
</div>
</section>
<?php
include_once 'footer.php';
?>
