<?php
$title = "Edit your Reservation Details";
$yes = "";
$no = "";
$smoking = "";
$nonsmoking = "";
$nopref = "";
include_once "header_3.php";
if (!isset($_SESSION['guest'])) {
    header("Location: 404.php?error=invalid_access");
} else {
    $guest = $_SESSION['guest'];
}

?>
<section class="cancel-image">
    <div class="container">
        <div class="row align-items-center ">

        <div class="col">
            <div class="heading-style custom-margin text-center">
            <h3>Change your reservation</h3>
            <p>Fill in the required information below</p>
          </div>

            <!--FORM-->
            <form class="form-style mb-3 custom-margin" id="reservation-form" action="includes/change.inc.php" method="post">
                <!--'pre-checks -->
                <!--pre-'checks' radio buttons with the user selection from reservation form-->
                <?php
include_once "pre-checks.php";
?>
                <!--end 'pre-checks-->
                <div id="tab-one" class="tab">
                    <div class="mb-3">
                        <label for="formInput_FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="formInput_FirstName" placeholder="First Name" name="fName" value="<?php echo $guest['firstname']; ?>">
                        <div class="error-text" id="error-message-fname"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="formInput_LastName" placeholder="Last Name" name="lName" value="<?php echo $guest['lastname']; ?>">
                        <div class="error-text" id="error-message-lname"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="formInput_Phone" placeholder="Phone Number Ex: 123-123-1234" name="phNumber" value="<?php echo $guest['phone']; ?>">
                        <div class="error-text" id="error-message-phone"></div>
                    </div>
                    <!--END TAB ONE-->
                </div>
                <div id="tab-two" class="tab">
                    <div class="mb-3">
                        <label for="formInput_Date" class="form-label">Date</label>
                        <input type="text" class="form-control" id="formInput_Date" placeholder="Date" name="date" value="<?php echo $guest['guest_date']; ?>">
                        <div class="error-text" id="error-message-date"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Time" class="form-label">Time</label>
                        <input type="text" class="form-control" id="formInput_Time" placeholder="Time" name="time" value="<?php echo $guest['guest_time']; ?>">
                         <div class="error-text" id="error-message-time"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Guests" class="form-label">Number of Guests</label>
                        <input type="text" class="form-control" id="formInput_Guests" placeholder="Enter Number of Guests"  name="guests" value="<?php echo $guest['guest_number']; ?>">
                         <div class="error-text" id="error-message-guests"></div>
                    </div>

                </div>
                <!--END TAB TWO-->
                <div id="tab-three" class="tab">

                    <div>Do You or a Guest Need Special Accomodations?</div>
                    <div class="mb-3 form-check">

                        <input class="form-check-input" type="radio" name="accomodations-check" id="no-accomodations" value="no"  <?php echo $no; ?>>
                        <label class="form-check-label" for="no-accomodations">
                                No Accomodations Needed
                            </label>
                    </div>
                    <div class="mb-3 form-check">

                        <input class="form-check-input" type="radio" name="accomodations-check" id="yes-accomodations" value="yes" <?php echo $yes; ?> >
                        <label class="form-check-label" for="yes-accomodations">
                               Yes Accomodations Needed
                            </label>
                    </div>
                </div>
                <!--END TAB THREE-->
                <div id="tab-four" class="tab">
                    <div>Seating Preference</div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="smoking" value="smoking" <?php echo $smoking; ?>>
                        <label class="form-check-label" for="smoking">
                                Smoking Section
                            </label>

                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="no-smoking" value="no smoking" <?php echo $nonsmoking; ?>>
                        <label class="form-check-label" for="no-smoking">
                                Non-Smoking Section
                            </label>

                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="no-preference" value="no preference" <?php echo $nopref; ?>
 >
                        <label class="form-check-label" for="no-preference">
                                No Preference
                            </label>
                    </div>
                    <input type="hidden" name="guest-ID" value="<?php echo $guest['guest_ID']; ?>">
                </div>
                <!--END TAB FOUR-->
                <button class="btn btn-primary me-3" type="button" id="prev-btn"> Previous</button>

                <button class="btn btn-primary" type="button"  id="next-btn" name='submit'>Next</button>

        </div>
        <!--END MID COL-->

        </form>
        <!--END FORM-->
    </div>

</div>

    </div><!--end container-->

</section>

<?php
include_once 'footer.php';
?>