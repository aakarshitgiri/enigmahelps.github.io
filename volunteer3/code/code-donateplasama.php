<?php
include '../../config.php';



if(isset($_POST['checking_viewbtn']))
{

$S_id =$_POST['student_id'];


$selectquery = "SELECT * FROM donateplasama WHERE id='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
   echo $return = '
   <h5> ID:         '.$res['ID'].'</h5>
   <h5> Name:       '.$res['name'].'</h5>
   
   <h5> Contact: '.$res['contact'].'</h5>
   <h5> Whatsapp: '.$res['whatsapp'].'</h5>
   <h5> Location: '.$res['location'].'</h5>
   <div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
   <h5> Blood Group: '.$res['bloodg'].'</h5>
   <h5> Last Recovery Date : '.$res['recoverydate'].'</h5>
   <h5> Availability : '.$res['availability'].'</h5>
   </div>
   <h5> Date: '.$res['date'].'</h5>
   <h5> Time: '.$res['time'].'</h5>
  
  
   ';

}



}








if(isset($_POST['delete']))
{
   $id = $_POST['delete_id'];

   $deletequery = "DELETE FROM donateplasama WHERE ID = '$id'";
   $queryrun = mysqli_query($conn,$deletequery);

   header("Location: ../plasamadonation.php");
   exit();
      if($query_run){
         ?> 
         
         <script>
           alert("Deletion successfully");
         </script>
              <?php
          }  else {
           ?> <script>
             alert("an error occured");
           </script>
           <?php
         
             }

}



if(isset($_POST['add'])){
 
  $name1 = $_POST['name1'];
  $email1 = $_POST['email1'];
  $contact1 = $_POST['contact1'];
  $whatsapp1 = $_POST['whatsapp1'];
  $location1 = $_POST['location1'];
  $blood1 = $_POST['blood1'];
  $recovery1 = $_POST['recovery1'];
  $availability1 = $_POST['availability1'];


  $insertquery= "insert into donateplasama(name,email,contact,whatsapp,location,bloodg,recoverydate,availability) values('$name1','$email1','$contact1','$whatsapp1','$location1','$blood1','$recovery1','$availability1' )";
    $res = mysqli_query($conn,$insertquery);
    header("Location: ../plasamadonation.php");
    exit();
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



if(isset($_POST['checking_edit_btn']))
{

$S_id =$_POST['student_id'];
$result_array=[];

$selectquery = "SELECT * FROM donateplasama WHERE id='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query))
{
 
array_push($result_array,$res);
header('Content-type: application/json');
echo json_encode($result_array);

}



}

if(isset($_POST['update_student']))
{
   $id = $_POST['edit_id'];
   $status = $_POST['availability1'];

   $query = "UPDATE donateplasama SET availability='$status' WHERE id='$id'";
   $query_run= mysqli_query($conn,$query);

   header("Location: ../plasamadonation.php");
exit();
   if($query_run){
      ?> 
      
      <script>
        alert("Respond Updatedd successfully");
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
