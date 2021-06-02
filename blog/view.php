<?php
include '../config.php';
include 'header.php';
?>
<br>
<br>


<?php




$S_id =$_GET['ID'];


$selectquery = "SELECT * FROM resources WHERE id='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($row= mysqli_fetch_array($query)){
 ?>

<div class="card">
  <div class="card-body">
    <h3 class="card-title"><?php echo $row['heading'] ?></h3>
    <pre class="card-text" style="   overflow-x: auto; white-space: pre-wrap;     font-family: 'Open Sans'; word-wrap: break-word;"><?php echo $row['description'] ?></pre>
    <p class="card-text">Date :<a style="color:red"> <?php echo $row['dateverify'] ?></a>  Time : <a style="color:red"><?php echo $row['verifytime'] ?></a> </p>
    <h4>City : <a style="color:green"><?php echo $row['city'] ?></a></h4>
  </div>
  <img src="upload/<?php echo $row['img'] ?>" class="card-img-top" alt="">
</div>


<?php

}


?>




<br>
<br>


<?php include 'footer.php' ?>