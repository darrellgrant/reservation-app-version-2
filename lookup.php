<?php
$title = "Look up your Reservation Details";
include_once "header.php";
?>

<section class="review-image">
  <div class="container">
    <div class="row align-items-center">
      <div class="col">
        <section>
          <div class="heading-style custom-margin text-center col-sm-12 col-md-6">
            <h3>Look up your reservation</h3>
            <p>Fill in the required information below</p>
          </div>

          <form class="form-style mb-3 custom-margin col-sm-12 col-md-6" action="includes/lookup.inc.php" id="lookUpForm" method="post">
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
              <input type="text"class="form-control" id="formInput_Phone" placeholder="Phone Number Example: 123-123-1234" name="phNumber" />
              <div class="error-text" id="error-message-phone"></div>
            </div>
            <button class="btn btn-primary" type="submit" id="submit-btn" name="submit-btn">
              Submit
            </button>
          </form>
        </section>
        <section>
          <!--if submitted name not found in db -->
          <?php
if (isset($_GET['error'])): ?>


          <div class="heading-style text-center custom-margin error-text">
            <h5>Sorry, that information was not found!</h5>
          </div>


        <?php endif;?>
        </section>
      </div>
    </div>
  </div>
  <!--end container-->
</section>

<?php
include_once 'footer.php';
?>
