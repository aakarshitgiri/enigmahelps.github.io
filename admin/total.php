<?php include '../config.php' ?>
<?php 

$selectquery = " select * from oxygen ";
$query= mysqli_query($conn,$selectquery);
$totaloxygen= mysqli_num_rows($query);



$selectquery2 = " select * from hospital ";
$query2= mysqli_query($conn,$selectquery2);
$totalhospital= mysqli_num_rows($query2);

$selectquery3 = " select * from needhelp ";
$query3= mysqli_query($conn,$selectquery3);
$totalneedhelp= mysqli_num_rows($query3);

$selectquery3 = " select * from resources ";
$query4= mysqli_query($conn,$selectquery3);
$totalresources= mysqli_num_rows($query3);




?>