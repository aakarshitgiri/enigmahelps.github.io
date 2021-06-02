<?php
include '../config.php';
include 'header.php';
?>
<br>
<h5 style="background-color: antiquewhite;"><b>Important Note:</b> Sources must be verified before uploading. Please do not spread wrong or fake information.</h5>
<br>

<div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
<h2 style="text-align:center; color: #124265; font-weight: 1000; font-size: 26px;"> ADD A RESOURCE</h2>
<br>

<form name="add" action="action.php" method="POST" onsubmit="return validate5()" enctype="multipart/form-data">
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="">
    
  </div>
  
  <div class="form-group">
    <label for="heading">Heading/Title</label>
    <input type="text" class="form-control" id="heading" name="heading" aria-describedby="">
    
  </div>
  <div class="form-group">
    <label for="date">Date of Verification </label>
    <input type="text" class="form-control" id="date" name="date" aria-describedby="">
    </div>

    <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" aria-describedby="">
    
  </div>
    </div>
    
    <div class="col-sm-6">
   
    <div class="form-group">
    <label for="time">Time of Verification </label>
    <input type="text" class="form-control" id="time" name="time" aria-describedby="">
    </div>
 
    <div class="form-group">
    <label for="description">Description</label>
    <textarea style="height: 200px;" class="form-control" id="description" name="description" rows="6"></textarea>
  </div>
  
  <label for="file" style="font-size:12px;">Any Image ?( Image is not compulsory & do not share whatsapp status or any kind of unverified resources</label>
  <div class="myFile">
  <label class="myFile" for="file" >Choose file</label>
  <input type="file" id="myFile" name="file" id="file" onchange="return fileValidation()" />


</div>
  
    </div>
 
<br>

    </div>
    <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4" style="text-align:center;">
    <button style="padding-left:70px; padding-right:70px;" type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-4">
    </div>
    </div>
    </form>
    </div>

    <script>
 function validate1() {
        var name = document.forms["add"]["fullname"];
       
        var phone = document.forms["add"]["contact"];
        var heading = document.forms["add"]["heading"];
        var date = document.forms["add"]["date"];
        var city = document.forms["add"]["city"];
        var time = document.forms["add"]["time"];
        var description = document.forms["add"]["description"];

        var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
        var phoneno = /^\d{10}$/;

        if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
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


        if (heading.value == "") {
            window.alert(
              "Please enter Heading!");
            heading.focus();
            return false;
        }

        if (date.value == "") {
            window.alert(
              "Please enter the date of verification");
            date.focus();
            return false;
        }

        if (!date.value.match(dateformat)) {
            window.alert(
              "Please enter your valid date.");
            date.focus();
            return false;
        }


        if (location.value == "") {
            window.alert("Please enter your location.");
            address.focus();
            return false;
        }

        if (time.value == "") {
            window.alert("Please enter the time of verification");
            time.focus();
            return false;
        }
  
        return true;
    }


 function fileValidation() {
            var fileInput = 
                document.getElementById('file');
              
            var filePath = fileInput.value;
          
            // Allowing file type
            var allowedExtensions = 
            /(\.jpg|\.jpeg|\.png)$/i;
              
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            } 
        }

        $(document).on('change', '.custom-file-input', function (event) {
    $(this).next('.custom-file-label').html(event.target.files[0].name);
})
    </script>







<br>
<?php include 'footer.php' ?>