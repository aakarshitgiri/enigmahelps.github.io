<?php include 'header.php' ?>

<br>
<h2 style="text-align:center; color: #124265; font-weight: 700; font-size: 20px; margin:10px; background-color: rgb(255, 203, 155);" >Find the Oxygen Filling/Refilling/Cylinder Centers of your city with details.</h2>

<br>
<div class="alert alert-danger" role="alert">
Do not visit ketee welding gas, It is closed due a blast !
</div>
<br>
<div class="container table-responsive">
<table id="datatableid" class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">City</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Last Update</th>
    </tr>
  </thead>
  <tbody>
  <?php
include 'config.php';

$selectquery = " select * from oxygen  ";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
?>

    <tr>
      <th><?php echo $res['ID']  ?></th>
      <td><?php echo $res['city']  ?></td>
      <td><?php echo $res['name']  ?></td>
      <td><?php echo $res['address']  ?></td>
      <td><?php echo $res['contact']  ?></td>
     
      <td><?php echo $res['lastupdate']  ?></td>
    </tr>

    <?php  }?>

  
  </tbody>
</table>
</div>
<br>
<br>
<?php include 'footer.php' ?>