<?php
include '../../config.php';



if(isset($_POST['checking_viewbtn']))
{

$S_id =$_POST['student_id'];


$selectquery = "SELECT * FROM needhelp WHERE id='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
   echo $return = '
   <h5> ID:         '.$res['ID'].'</h5>
   <h5> Name:       '.$res['name'].'</h5>
   <h5> Email: '.$res['email'].'</h5>
   <h5> Contact: '.$res['contact'].'</h5>
   <h5> Whatsapp: '.$res['whatsapp'].'</h5>
   <h5> Location: '.$res['location'].'</h5>
   <div class="container shadow-lg p-3 mb-5  rounded" style="background-color: ghostwhite;">
   <h5 style="color:red;"> Problem: '.$res['problem'].'</h5>
   <h5> Help Needed: '.$res['help'].'</h5>
   </div>
   <h5> Date: '.$res['date'].'</h5>
   <h5> Time: '.$res['time'].'</h5>
   <h5> Status: '.$res['respond'].'</h5>
  
   ';

}



}





if(isset($_POST['checking_edit_btn']))
{

$S_id =$_POST['student_id'];
$result_array=[];

$selectquery = "SELECT * FROM needhelp WHERE id='$S_id'";
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
   $status = $_POST['status'];

   $query = "UPDATE needhelp SET respond='$status' WHERE id='$id'";
   $query_run= mysqli_query($conn,$query);

   header("Location: ../needhelp.php");
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


if(isset($_POST['delete']))
{
   $id = $_POST['delete_id'];

   $deletequery = "DELETE FROM needhelp WHERE ID = '$id'";
   $queryrun = mysqli_query($conn,$deletequery);

   header("Location: ../needhelp.php");
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
  $problem1 = $_POST['problem1'];
  $help1 = $_POST['help1'];


  $insertquery= "insert into needhelp(name,email,contact,whatsapp,location,problem,help) values('$name1','$email1','$contact1','$whatsapp1','$location1','$problem1','$help1' )";
    $res = mysqli_query($conn,$insertquery);
    header("Location: ../needhelp.php");
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

?>