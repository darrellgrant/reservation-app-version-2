<?php
include_once "header.php";
?>

<section class="review-image">
    <div class="container">
    <div class="row align-items-center ">

        <div class="col">

            <!--FORM-->
            <form class="form-style mb-3 custom-margin" id="reservation-form">
                <div class="tab">
                    <div class="mb-3">
                        <label for="formInput_FirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="formInput_FirstName" placeholder="First Name">
                        <div class="error-text" id="error-message-fname"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_LastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="formInput_LastName" placeholder="Last Name">
                        <div class="error-text" id="error-message-lname"></div>
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="formInput_Phone" placeholder="Phone Number Ex: 123-123-1234">
                        <div class="error-text" id="error-message-phone"></div>
                    </div>
                    <!--END TAB ONE-->
                </div>
                <div class="tab">
                    <div class="mb-3">
                        <label for="formInput_Date" class="form-label">Date</label>
                        <input type="text" class="form-control" id="formInput_Date" placeholder="Date">
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Time" class="form-label">Time</label>
                        <input type="text" class="form-control" id="formInput_Time" placeholder="Time">
                    </div>
                    <div class="mb-3">
                        <label for="formInput_Guests" class="form-label">Number of Guests</label>
                        <input type="text" class="form-control" id="formInput_Guests" placeholder="Enter Number of Guests">
                    </div>

                </div>
                <!--END TAB TWO-->
                <div class="tab">

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
                </div>
                <!--END TAB THREE-->
                <div class="tab">
                    <div>Seating Preference</div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="smoking" checked>
                        <label class="form-check-label" for="smoking">
                                Smoking Section
                            </label>

                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="no-smoking">
                        <label class="form-check-label" for="no-smoking">
                                Non-Smoking Section
                            </label>

                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="radio" name="seating-check" id="no-preference">
                        <label class="form-check-label" for="no-preference">
                                No Preference
                            </label>
                    </div>

                </div>
                <!--END TAB FOUR-->
                <input class="btn btn-primary me-3" type="button" value="Previous" id="prev-btn">

                <input class="btn btn-primary" type="button" value="Next" id="next-btn">

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