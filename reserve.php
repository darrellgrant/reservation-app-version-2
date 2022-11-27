<?php
$title = "Reserve a Seat";
include_once "header.php";
?>
<section class="reserve-image">
<div class="container">
    <div class="row align-items-center ">

        <div class="col ">

            <div class="heading-style custom-margin text-center col-sm-12 col-md-6">
            <h3>Make Your Reservation</h3>
            <p>Fill in the required information below</p>
            </div>

            <!--FORM-->
            <form class="form-style mb-3 custom-margin col-sm-12 col-md-6" id="reservation-form" action="includes/process.inc.php" method="post">
                <div id="tab-one" class="tab">
                    <div class="mb-3">
                        <label for="formInput_FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="formInput_FirstName" placeholder="First Name" name="fName">
                        <div class="error-text" id="error-message-fname"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="formInput_LastName" placeholder="Last Name" name="lName">
                        <div class="error-text" id="error-message-lname"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="formInput_Phone" placeholder="Ex: (123)-123-1234" name="phNumber">
                        <div class="error-text" id="error-message-phone"></div>
                    </div>
                    <!--END TAB ONE-->
                </div>
                <div id="tab-two" class="tab">
                    <div class="mb-3">
                        <label for="formInput_Date" class="form-label">Date</label>
                        <input type="text" class="form-control" id="formInput_Date" placeholder="Date" name="date">
                        <div class="error-text" id="error-message-date"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Time" class="form-label">Time</label>
                        <input type="text" class="form-control" id="formInput_Time" placeholder="Time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Guests" class="form-label">Number of Guests</label>
                        <input type="text" class="form-control" id="formInput_Guests" placeholder="Number of Guests (Rick's can comfortably seat up to 12 guests)"  name="guests">
                         <div class="error-text" id="error-message-guests"></div>
                    </div>

                </div>
                <!--END TAB TWO-->
                <div id="tab-three" class="tab">

                    <div>Do You or a Guest Need Special Accomodations?</div>
                    <div class="mb-3 form-check">

                        <input class="form-check-input" type="radio" name="accomodations-check" id="no-accomodations" value="no" checked>
                        <label class="form-check-label" for="no-accomodations">
                                No Accomodations Needed
                            </label>
                    </div>
                    <div class="mb-3 form-check">

                        <input class="form-check-input" type="radio" name="accomodations-check" id="yes-accomodations" value="yes">
                        <label class="form-check-label" for="yes-accomodations">
                               Yes Accomodations Needed
                            </label>
                    </div>
                    <div class="mb-3">
                        If yes, we will contact you to discuss accesibility for you or a guest
                    </div>
                </div>
                <!--END TAB THREE-->
                <div id="tab-four" class="tab">
                    <div>Seating Preference</div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="smoking" value="smoking" checked>
                        <label class="form-check-label" for="smoking">
                                Smoking Section
                            </label>

                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="no-smoking" value="no smoking">
                        <label class="form-check-label" for="no-smoking">
                                Non-Smoking Section
                            </label>

                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="no-preference" value="no preference">
                        <label class="form-check-label" for="no-preference">
                                No Preference
                            </label>
                    </div>

                </div>
                <!--END TAB FOUR-->
                <div class="error-text mb-3" id="error-message-empty-inputs"></div>
                <button class="btn btn-primary me-3" type="button" id="prev-btn"> Previous</button>

                <button class="btn btn-primary" type="button"  id="next-btn" name='submit'>Next</button>

        </div>
        <!--END MID COL-->

        </form>
        <!--END FORM-->
    </div>

</div>
</div>
<!--end container-->

</section>

<?php
include_once 'footer.php';
?>