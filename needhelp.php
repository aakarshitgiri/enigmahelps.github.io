<?php include 'header.php' ?>




      <br>
<br>

<div class="container">

<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px;" >Need Help ?</h2>
<p class="text-md-left">Don't worry our team will try to help you in the best possible way. Kindly share your problem/issue regarding the covid-19.</p>
<p class="text-md-left">Submit the given form with proper details, Our team will be in touch with you soon.</p>
<br>

</div>



<div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px;" >Need Help ?</h2>
<br>

<form name="needhelp" action="needhelp.php" method="POST" onsubmit="return validate5()">
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="fullname3">Full Name</label>
    <input type="text" class="form-control" id="fullname3" name="fullname3" aria-describedby="">
    
  </div>

  <div class="form-group">
    <label for="email3">Email</label>
    <input type="email" class="form-control" id="email3" name="email3" aria-describedby="">
    
  </div>

  <div class="form-group">
    <label for="contact3">Contact</label>
    <input type="text" class="form-control" id="contact3" name="contact3" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="whatsapp3">Whatsapp</label>
    <input type="text" class="form-control" id="whatsapp3" name="whatsapp3" aria-describedby="">
    </div>

    <div class="form-group">
    <label for="location3">Location</label>
    <input type="text" class="form-control" id="location3" name="location3" aria-describedby="">
    
  </div>
    </div>
    
    <div class="col-sm-6">
   
 
    <div class="form-group">
    <label for="problem">Problem</label>
    <textarea style="height: 167px;" class="form-control" id="problem" name="problem" rows="6"></textarea>
  </div>
 
  <div class="form-group">
    <label for="help">Help Needed?</label>
    <textarea style="height: 120px;" class="form-control" id="help" name="help" rows="6"></textarea>
  </div>
  

 

    </div>

    
<br>

    </div>
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:center;">
    <button style="padding-left:70px; padding-right:70px;" type="submit" name="submit3" id="submit3" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </form>
    </div>
    
   
 

   
<script>


      


    function validate4() {
        var name3 = document.forms["needhelp"]["fullname3"];
        var email3 = document.forms["needhelp"]["email3"];
        var phone3 = document.forms["needhelp"]["contact3"];
        var whatsapp3 = document.forms["needhelp"]["whatsapp3"];
        var location3 = document.forms["needhelp"]["location3"];
        var problem = document.forms["needhelp"]["problem"];
        var help = document.forms["needhelp"]["help"];

        var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
        var phoneno = /^\d{10}$/;

        if (name3.value == "") {
            window.alert("Please enter your name.");
            name3.focus();
            return false;
        }
  
        
  
        if (email3.value == "") {
            window.alert(
              "Please enter a valid e-mail address.");
            email3.focus();
            return false;
        }


        if (email3.value.match(mailformat)) {
            window.alert(
              "You have entered an invalid email address!");
            email3.focus();
            return false;
        
        }


        if (phone3.value == "") {
            window.alert(
              "Please enter your telephone number.");
            phone3.focus();
            return false;
        }

        if (!phone3.value.match(phoneno)) {
            window.alert(
              "Please enter your valid number.");
            phone3.focus();
            return false;
        }


        if (whatsapp3.value == "") {
            window.alert(
              "Please enter your whatsapp number.");
           whatsapp3.focus();
            return false;
        }

        if (!whatsapp3.value.match(phoneno)) {
            window.alert(
              "Please enter your valid whatsapp number.");
            whatsapp3.focus();
            return false;
        }


        if (location3.value == "") {
            window.alert("Please enter your location.");
            location3.focus();
            return false;
        }

        if (problem.value == "") {
            window.alert("Please write your Problem!");
            problem.focus();
            return false;
        }

        if (help.value == "") {
            window.alert("Please tell us how can we help you!");
            help.focus();
            return false;
        }
  
        return true;
    }
</script>

<?php include 'footer.php' ?>

<?php 
require 'config.php';
if(isset($_POST['submit3'])){
 
  $fullname3		= $_POST['fullname32'];
	$email3 		= $_POST['email3'];
	$contact3			= $_POST['contact3'];
	$whatsapp3	= $_POST['whatsapp3'];
	$location3 		= $_POST['location3'];
    $problem		= $_POST['problem'];
    $help		= $_POST['help'];

    $insertquery= "insert into needhelp(name,email,contact,whatsapp,location,problem,help) values('$fullname3','$email3','$contact3','$whatsapp3','$location3','$problem','$help')";
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