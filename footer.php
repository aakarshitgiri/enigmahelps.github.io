</div>
</section>
<footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
    <a href="needhelp.php" style="color:black; padding:2px; margin:2px; ">Need a Help ?</a> <a href="joinus.php" style="color:black; padding:2px; margin:2px; ">Join Us</a> <a href="contactus.php" style="color:black; padding:2px; margin:2px; ">Contact Us</a>  <a href="payment.php" class=" scrollto" style="color:black;"> Donate </a>
     <br>
     <a href="admin/index.php" style="color:black; padding:2px; margin:2px; ">ADMIN LOGIN</a> <a href="cookies.php" style="color:black; padding:2px; margin:2px; ">Cookies</a> <a href="termandcondition.php" style="color:black; padding:2px; margin:2px; ">Terms & Condition</a> <a href="privacypolicy.php" style="color:black; padding:2px; margin:2px; ">Privacy & Policy</a> <a href="returnandrefund.php" style="color:black; padding:2px; margin:2px; ">Return & Refund Policy</a>     
     <br>
          <br>
          &copy; Copyright <strong><span>ENIGMA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
       
         This Website is Designed and Managed by Team ENIGMA
        </div>
      </div>
      <div class=" text-md-right">
      
</div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">

        <a href="https://www.instagram.com/enigma_bbdec/" class="instagram"><i class="bx bxl-instagram"></i></a>

       
      </div>
    </div>
  </footer><!-- End Footer -->
  <br>
    <br>
    <br>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
  $(document).ready(function() {

    $('#datatableid').DataTable({
        "order": [[ 0, "desc" ]],
      "paggingType": "full_numbers",
      "lenghtMenu":[
        [10,25,50,-1],
      [10,25,50,'All']
    ],
    responsive:true,
    language:{
      search: "_INPUT_",
      searchPlaceholder: "Enter City",
      
    } 
     
     
    });


    $('#datatableid1').DataTable({
        "order": [[ 0, "desc" ]],
      "paggingType": "full_numbers",
      "lenghtMenu":[
        [10,25,50,-1],
      [10,25,50,'All']
    ],
    responsive:true,
    language:{
      search: "_INPUT_",
      searchPlaceholder: "Enter City",
    } 
     
    });

} );
</script>

</body>

</html>