
  <footer class="text-center text-white fixed-bottom custom-size" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-1">
     <!-- Copyright -->
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
    &copy; <?php echo date('Y'); ?>
    <a class="text-white" href="https://darrellgrant.net/">darrellgrant.net</a>
  </div>
  <!-- Copyright -->   </div>
  <!-- Grid container -->


</footer>
  <!-- bootstrap jS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <!--jQuery date and time picker-->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="jqueryUI/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script>
      var minDate = new Date();
      $("#formInput_Date").datepicker({
        minDate: minDate,
      });
    </script>
    <script>
      $(document).ready(function () {
        $("#formInput_Time").timepicker({
          interval: 30,
          scrollbar: true,
          minTime: "17",
          maxTime: "10:30pm",
        });
      });
    </script>
  </body>
</html>
