<!-- Footer Section of the Website Starts -->
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4 custom-footer">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-sm-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Content -->
          <h4>Disclaimer</h4>
          <p class="footer-description">The RCMP Veterans’ Association website is not an RCMP or Government of Canada website. Information offered by/on this website is not subject to Government of 
            Canada web publishing policies or the Official Languages Act, and may not be accessible to persons with disabilities.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-sm-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h4>Contact</h4>

          <ul>
            <span class="fa fa-phone" style="font-size:20px;padding-right:2%;"></span>877-251-1771 (toll-free)<br>
            <span class="fa fa-envelope-square" style="font-size:20px;padding-right:2%;"></span>contact@rcmpva.org<br>
            <div class="span-icons" data-toggle="tooltip" data-placement="bottom" title="Click on the logo to get Redirected to the page">
              <a href="https://www.facebook.com/RCMPVets/"  class="fa fa-facebook-f icons" style="font-size:20px;padding-right:2%;"></a>RCMPVA on Facebook<br>
            </div>
            <div class="span-icons" data-toggle="tooltip" data-placement="bottom" title="Click on the logo to get Redirected to the page">
            <a href="https://www.facebook.com/RcmpQuarterly" class="fa fa-facebook-f icons" style="font-size:20px;padding-right:2%;"></a>The Quarterly on Facebook
            </div>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-sm-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h4>RCMP Veteran's Association</h4>
            <p>P.O. Box 8900, Canadian Police College, 1 Sandridge Road, Ottawa, ON, K1G 3J2</p>

        </div>
        <!-- Grid column -->
        <hr>
            <!-- Copyright -->
            <div class="footer-copyright container py-3">
              <div class="copyright-section-styling">
                <a href="#" class="fa fa-arrow-circle-up back-to-top" data-toggle="tooltip" data-placement="top" title="Back To Top" style="font-size:24px;padding-right:1%;"></a>
                Copyright &copy; <?php echo date('Y');?> RCMP Veterans' Association
              </div>
        </div>
      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
  <!-- Footer -->

<!-- Footer Section of the Website Ends -->

<!-- JavaScripts used on the website -->
<script src="<?php get_template_directory('/assets/javascript/popper.min.css') ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- To display the tooltip message on the website,following code will trigger that -->
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
<?php wp_footer(); ?>
</body>
</html>