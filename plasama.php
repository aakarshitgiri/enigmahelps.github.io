<?php include 'header.php' ?>

<br>
<div class="alert alert-success text-center" role="alert">
Searching For A Plasma Donor?   <a href="#b" style="text-align:center; margin-left:5px;" class="btn btn-primary">Click Here</a>
 
</div>

<br>

<section >
     
     <div class="container" data-aos="fade-up">
       <div class="section-title">
         <h2>Donate a Plasma and Secure One's Life</h2>
       
       </div>
       <div class="row">

         <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">
        
         <a href="#b"><img  src="assets/img/pl-1.png" class="img-fluid" alt="..."></a>

         <br>
         <div class="container" style="background-color: bisque; margin-top: 13px;  margin-bottom: 10px;">
 <form name="plasama" action="plasama.php" method="POST" onsubmit="return validate6()">
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="whatsapp">Whatsapp</label>
    <input type="text" class="form-control" id="whatsapp" name="whatsapp" aria-describedby="">
    
  </div>
  

  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="">
    
  </div>
    </div>
    
    <div class="col-sm-6">
  
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" id="location" name="location" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="blood">Blood Group</label>
    <input type="text" class="form-control" id="blood" name="blood" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="recovery">Last Recovery Date</label>
    <input type="text" class="form-control" id="recovery" name="recovery" aria-describedby="">
    
  </div>
  
    </div>
   </div>
    <br>
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:center;     margin-bottom: 10px;">
    <button style="padding-left:70px; padding-right:70px;" type="submit" id="submit6" name="submit6" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </form>
          </div>
         </div>

         <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
         <p>Plasma therapy, broadly known as 'convalescent plasma therapy', is a procedure to treat coronavirus infection. In this experimental treatment, plasma, which is the yellowish liquid part of the blood, is extracted from a person who has recovered from the infection and injected into a patient who is suffering from that disease. The plasma contains that antibodies that can help a patient fight the pathogen and recover from the disease.</p>
         <br>
           
           <h5><b>IMPORTANT NOTE BEFORE DONATION OF PLASMA</b></h5>
           <br>
          <p>

          <b>Note: </b>First of all, donors need to have tested negative for COVID-19 and recovered from the illness. They should also not have any symptoms for the last 14 days. Most importantly, they need to have high antibody levels in their plasma. Moreover, a donor and the patient must also have compatible blood types. Once the plasma is donated, it is screened for other infectious diseases, such as HIV. 
<br><br>
One recovered, each donor produces enough plasma to treat one to three patients. Moreover, donating plasma should not weaken the donor’s immune system, nor make the donor more susceptible to getting reinfected with the virus.
<br></p>
         </div>

       </div>

     </div>
   </section><!-- End About Video Section -->

<br>




    <div class="col"><div id="b" class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px;" >Searching For A Plasma Donor ? </h2>
<br>
<p>Plasma therapy, broadly known as 'convalescent plasma therapy', is a procedure to treat coronavirus infection. In this experimental treatment, plasma, which is the yellowish liquid part of the blood, is extracted from a person who has recovered from the infection and injected into a patient who is suffering from that disease. The plasma contains that antibodies that can help a patient fight the pathogen and recover from the disease.
<br><br>


<form name="need" action="plasama.php" method="POST" onsubmit="return validate7()">
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="fullname1">Full Name</label>
    <input type="text" class="form-control" id="fullname1" name="fullname1" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="whatsapp1">Whatsapp</label>
    <input type="text" class="form-control" id="whatsapp1" name="whatsapp1" aria-describedby="">
    
  </div>
  

  <div class="form-group">
    <label for="contact1">Contact</label>
    <input type="text" class="form-control" id="contact1" name="contact1" aria-describedby="">
    
  </div>
    </div>
    
    <div class="col-sm-6">
  
  <div class="form-group">
    <label for="location1">Location</label>
    <input type="text" class="form-control" id="location1" name="location1" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="blood1">Blood Group</label>
    <input type="text" class="form-control" id="blood1" name="blood1" aria-describedby="">
    
  </div>
 
  
    </div>
   </div>
    <br>
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:center;">
    <button style="padding-left:70px; padding-right:70px;" type="submit" id="submit2" name="submit2" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </form>
    </div></div>
    
  </div>
</div>


</section>




<script>
  function validate6() {
        var name = document.forms["plasama"]["fullname"];
       
        var phone = document.forms["plasama"]["contact"];
        var whatsapp = document.forms["plasama"]["whatsapp"];
        var location = document.forms["plasama"]["location"];
        var blood = document.forms["plasama"]["blood"];
        var recovery = document.forms["plasama"]["recovery"];
        
        var phoneno = /^\d{10}$/;

        if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
  
        if (phone.value == "") {
            window.alert(
              "Please enter your number.");
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


        if (location.value == "") {
            window.alert("Please enter your location.");
            location.focus();
            return false;
        }

        if (blood.value == "") {
            window.alert("Please enter your Blood Group.");
            blood.focus();
            return false;
        }

        if (recovery.value == "") {
            window.alert("Please enter your Last Recovery Date.");
            recovery.focus();
            return false;
        }
  
        return true;
    }


    function validate7() {
        var name1 = document.forms["need"]["fullname1"];
       
        var phone1 = document.forms["need"]["contact1"];
        var whatsapp1 = document.forms["need"]["whatsapp1"];
        var location1 = document.forms["need"]["location1"];
        var blood1 = document.forms["need"]["blood1"];
        
        
        var phoneno = /^\d{10}$/;

        if (name1.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
  
        if (phone1.value == "") {
            window.alert(
              "Please enter your number.");
            phone1.focus();
            return false;
        }

        if (!phone1.value.match(phoneno)) {
            window.alert(
              "Please enter your valid number.");
            phone1.focus();
            return false;
        }


        if (whatsapp1.value == "") {
            window.alert(
              "Please enter your whatsapp number.");
            phone1.focus();
            return false;
        }

        if (!whatsapp1.value.match(phoneno)) {
            window.alert(
              "Please enter your valid whatsapp number.");
            phone1.focus();
            return false;
        }


        if (location1.value == "") {
            window.alert("Please enter your location.");
            location1.focus();
            return false;
        }

        if (blood1.value == "") {
            window.alert("Please enter your Blood Group.");
            blood1.focus();
            return false;
        }

        return true;
    }
</script>









<?php 
 include 'config.php'; 

if(isset($_POST['submit6'])){
 
  $fullname		= $_POST['fullname'];

	$contact			= $_POST['contact'];
	$whatsapp	= $_POST['whatsapp'];
	$location 		= $_POST['location'];
    $blood 		= $_POST['blood'];
    $recovery 		= $_POST['recovery'];

    $insertquery= "insert into donateplasama(name,contact,whatsapp,location,bloodg,recoverydate) values('$fullname','$contact','$whatsapp','$location','$blood','$recovery' )";
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




if(isset($_POST['submit2'])){
 
  $fullname1		= $_POST['fullname1'];

	$contact1			= $_POST['contact1'];
	$whatsapp1	= $_POST['whatsapp1'];
	$location1 		= $_POST['location1'];
    $blood1 		= $_POST['blood1'];
    

    $insertquery= "insert into needplasama(name,contact,whatsapp,location,bloodg) values('$fullname1','$contact1','$whatsapp1','$location1','$blood1')";
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




















<?php include 'footer.php'?>