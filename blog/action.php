
<?php
require '../config.php';
if(isset($_POST['submit'])){
 
  $fullname		= $_POST['fullname'];
	$contact 		= $_POST['contact'];
	$heading			= $_POST['heading'];
	$date	= $_POST['date'];
	$city 		= $_POST['city'];
  $time = $_POST['time'];
    $description 		= $_POST['description'];
    $target = "upload/";
    $target = $target . basename($_FILES['file']['name']);

    $pname = $_FILES['file']['name'];
    $ptemp = $_FILES['file']['tmp_name'];
    $ptype = $_FILES['file']['type'];
    $psize = $_FILES['file']['size'];

    if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
       



  $insertquery= "insert into resources(name, heading, dateverify, city, description, img, contact, verifytime) values('$fullname','$heading','$date','$city','$description','$pname', '$contact','$time' )";
  $res = mysqli_query($conn,$insertquery);

  if($res){
    header('Location: addresource.php');
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


    
}

?>