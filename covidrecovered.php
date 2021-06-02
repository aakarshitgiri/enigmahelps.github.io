<?php include 'header.php'; ?>

<br>


<section >
     
     <div class="container" data-aos="fade-up">
       <div class="section-title">
         <h2>Recovered From Covid, Help Others Get Fast Recovery </h2>
       
       </div>
       <div class="row">

         <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
        <br>
         <a href="#b"><img  src="assets/img/h-1.png" class="img-fluid" alt="..."></a>
         <br>
         <br>
<p>You can help others by sharing your experience during covid-19 situation,Fill the form and then Our Team will be in touch with you regarding the podcast and will setup everthing for proper podcast through which you will share your experience and the best way to get fast recovery. </p>
      
     
         </div>

         <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
         <div class="container" style="background-color: bisque; margin-top: 13px;  margin-bottom: 10px;">
 <form name="recovered" action="covidrecovered.php" method="POST" onsubmit="return validate8()">

    <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="whatsapp">Whatsapp</label>
    <input type="text" class="form-control" id="whatsapp" name="whatsapp" aria-describedby="">
    
  </div>
  
    <br>
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:center;     margin-bottom: 10px;">
    <button style="padding-left:70px; padding-right:70px;" type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </form>
          </div>
         </div>

       </div>


       <script>
 function validate8() {
        var name = document.forms["recovered"]["fullname"];
        var email = document.forms["recovered"]["email"];
        var phone = document.forms["recovered"]["contact"];
        var whatsapp = document.forms["recovered"]["whatsapp"];
      
        var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
        var phoneno = /^\d{10}$/;

        if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
  
        
  
        if (email.value == "") {
            window.alert(
              "Please enter a valid e-mail address.");
            email.focus();
            return false;
        }


        if (email.value.match(mailformat)) {
            window.alert(
              "You have entered an invalid email address!");
            email.focus();
            return false;
        
        }


        if (phone.value == "") {
            window.alert(
              "Please enter your telephone number.");
            phone.focus();
            return false;
        }

        if (!phone.value.match(phoneno)) {
            window.alert(
              "Please enter your valid number.");
            phone.focus();
            return false;
        }


        if (whatsapp.value == "") {
            window.alert(
              "Please enter your whatsapp number.");
            phone.focus();
            return false;
        }

        if (!whatsapp.value.match(phoneno)) {
            window.alert(
              "Please enter your valid whatsapp number.");
            phone.focus();
            return false;
        }


        return true;
    }
    </script>


<?php 
include 'config.php';
if(isset($_POST['submit'])){
 
  $fullname		= $_POST['fullname'];
	$email 		= $_POST['email'];
	$contact			= $_POST['contact'];
	$whatsapp	= $_POST['whatsapp'];


    $insertquery= "insert into recovered(fullname,email,contact,whatsapp) values('$fullname','$email','$contact','$whatsapp')";
    $res = mysqli_query($conn,$insertquery);

    if($res){
?> 

<script>
  alert("Form Submitted successfully");
</script>
     <?php
 }  else {
  ?> <script>
    alert("an error occured");
  </script>
  <?php

    }

}

?>



     </div>
   </section><!-- End About Video Section -->

<br>



<?php include 'footer.php'; ?> 