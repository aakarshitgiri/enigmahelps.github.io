<?php include 'header.php' ?>



      <br>
<br>
<div class="container">

<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px; margin:10px;" >Contact Us</h2>
<p class="text-md-left">This website is designed and managed by the students of the team ENIGMA ( Official Techanical Community of BBDEC ).</p>
<p class="text-md-left">The motive of this website is to form a chain of distinct people from distinct places to collect the information regarding the covid-19, so that we can provide proper details of medical facilities and other essential services to the needy persons. </p>

<br>

</div>


<div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px;" >Contact Us</h2>
<br>

<form name="query" action="contactus.php" method="POST" onsubmit="return validate4()">
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="fullname2">Full Name</label>
    <input type="text" class="form-control" id="fullname2" name="fullname2" aria-describedby="">
    
  </div>

  <div class="form-group">
    <label for="email2">Email</label>
    <input type="email" class="form-control" id="email2" name="email2" aria-describedby="">
    
  </div>

  <div class="form-group">
    <label for="contact2">Contact</label>
    <input type="text" class="form-control" id="contact2" name="contact2" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="whatsapp2">Whatsapp</label>
    <input type="text" class="form-control" id="whatsapp2" name="whatsapp2" aria-describedby="">
    </div>

 
    </div>
    
    <div class="col-sm-6">
   
  <div class="form-group">
    <label for="location2">Location</label>
    <input type="text" class="form-control" id="location2" name="location2" aria-describedby="">
    
  </div>
    <div class="form-group">
    <label for="query">Query</label>
    <textarea style="height: 167px;" class="form-control" id="query" name="query" rows="6"></textarea>
  </div>
 
  
  

 

    </div>

    
<br>

    </div>
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:center;">
    <button style="padding-left:70px; padding-right:70px;" type="submit" name="submit2" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </form>
    </div>
    
   
 

   
<script>


      


    function validate4() {
        var name2 = document.forms["query1"]["fullname2"];
        var email2 = document.forms["query1"]["email2"];
        var phone2 = document.forms["query1"]["contact2"];
        var whatsapp2 = document.forms["query1"]["whatsapp2"];
        var location2 = document.forms["query1"]["location2"];
        var query2 = document.forms["query1"]["query"];

        var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
        var phoneno = /^\d{10}$/;

        if (name2.value == "") {
            window.alert("Please enter your name.");
            name2.focus();
            return false;
        }
  
        
  
        if (email2.value == "") {
            window.alert(
              "Please enter a valid e-mail address.");
            email2.focus();
            return false;
        }


        if (email2.value.match(mailformat)) {
            window.alert(
              "You have entered an invalid email address!");
            email2.focus();
            return false;
        
        }


        if (phone2.value == "") {
            window.alert(
              "Please enter your telephone number.");
            phone2.focus();
            return false;
        }

        if (!phone2.value.match(phoneno)) {
            window.alert(
              "Please enter your valid number.");
            phone2.focus();
            return false;
        }


        if (whatsapp2.value == "") {
            window.alert(
              "Please enter your whatsapp number.");
              whatsapp2.focus();
            return false;
        }

        if (!whatsapp2.value.match(phoneno)) {
            window.alert(
              "Please enter your valid whatsapp number.");
              whatsapp2.focus();
            return false;
        }


        if (location2.value == "") {
            window.alert("Please enter your location.");
            location2.focus();
            return false;
        }

        if (query.value == "") {
            window.alert("Please write your query!");
            query.focus();
            return false;
        }
  
        return true;
    }
</script>


<?php include 'footer.php' ?>


<?php 
require 'config.php';
if(isset($_POST['submit2'])){
 
  $fullname2		= $_POST['fullname2'];
	$email2 		= $_POST['email2'];
	$contact2			= $_POST['contact2'];
	$whatsapp2	= $_POST['whatsapp2'];
	$location2 		= $_POST['location2'];
    $query		= $_POST['query'];

    $insertquery= "insert into contactus(name,email,contact,whatsapp,location,query) values('$fullname2','$email2','$contact2','$whatsapp2','$location2','$query' )";
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