<?php
$title = "Cancel Your Reservation";
include_once "header.php";
if (isset($_SESSION['guest'])) {

    $guest = $_SESSION['guest'];

}
?>
<section class="cancel-image">
    <div class="container">
        <div class="row align-items-center">
      <div class="col">
        <section>
          <div class="heading-style custom-margin text-center col-sm-12 col-md-6">
            <h3>Cancel your reservation</h3>
            <p>Fill in the required information below</p>
          </div>

          <form class="form-style mb-3 custom-margin col-sm-12 col-md-6" action="includes/cancel.inc.php" id="lookUpForm" method="post">
            <div class="mb-3">
              <label for="formInput_First" class="form-label">First Name</label>

              <input type="text" class="form-control" id="formInput_First" placeholder="First Name" name="fName" />
              <div class="error-text" id="error-message-first"></div>
            </div>
            <div class="mb-3">
              <label for="formInput_Last" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="formInput_Last" placeholder="Last Name" name="lName" />
              <div class="error-text" id="error-message-last"></div>
            </div>
            <div class="mb-3">
              <label for="formInput_Phone" class="form-label">Phone Number</label>
              <input type="text"class="form-control" id="formInput_Phone" placeholder="Phone Number Example: (123)-123-1234" name="phNumber" />
              <div class="error-text" id="error-message-phone"></div>
            </div>
            <div class="error-text mb-3" id="error-message-empty-inputs"></div>
            <button class="btn btn-primary" type="submit" id="submit-btn" name="submit-btn">
              Submit
            </button>
          </form>
        </section>
        <section>
          <!--if submitted name NOT found in db -->
          <?php
if (isset($_GET['error'])): ?>


          <div class="heading-style text-center custom-margin error-text col-sm-12 col-md-6">
            <h5>Sorry, that information was not found!</h5>
          </div>


        <?php endif;?>
        </section>
        <section >
          <!--if submitted name IS found in db -->
          <?php
if (isset($_GET['success'])): ?>


          <section class="heading-style text-center custom-margin error-text col-sm-12 col-md-6" id="userFound">
          <div>
          <h5>You are about to cancel Reservation for</h5>
            <h4> <?php echo $guest['firstname'] . " " . $guest['lastname']; ?></h4>

          </div>
          <form action="includes/cancel.inc.php" method="post">
                    <input type="hidden" name="guest-ID" value="<?php echo $guest['guest_ID']; ?>">
                    <a href="index.php"><button type="button" class="btn btn-primary me-3">No, thanks</button></a>
                    <button type="submit" class="btn btn-danger" name="cancel-btn">Continue Cancel</button>

          </form>


</section>
        <?php endif;?>
        </section>

        <section>
          <!--if submitted name successfully DELETED -->
          <?php
if (isset($_GET['action'])): ?>


          <div class="heading-style text-center custom-margin error-text col-sm-12 col-md-6" id="userDeleted">
            <h5>Your Reservation has been Deleted</h5>
          </div>


        <?php endif;?>
        </section>
        <section >
      </div>
    </div>

    </div><!--end container-->

</section>

<?php
include_once 'footer.php';
?>