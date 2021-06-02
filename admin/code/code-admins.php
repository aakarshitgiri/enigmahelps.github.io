<?php
include '../../config.php';



if(isset($_POST['checking_viewbtn']))
{

$S_id =$_POST['student_id'];


$selectquery = "SELECT * FROM users WHERE id='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
   echo $return = '
   <h5> ID:         '.$res['id'].'</h5>
   <h5> Username:       '.$res['user_name'].'</h5>
   <h5> Name:       '.$res['name'].'</h5>
   <h5> Email: '.$res['email'].'</h5>
   <h5> Contact: '.$res['contact'].'</h5>
   <h5> Whatsapp: '.$res['whatsapp'].'</h5>
   ';

}



}





if(isset($_POST['checking_edit_btn']))
{

$S_id =$_POST['student_id'];
$result_array=[];

$selectquery = "SELECT * FROM users WHERE id='$S_id'";
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
   $username = $_POST['username'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $whatsapp = $_POST['whatsapp'];
   $pass = md5($_POST['password']);

   $query = "UPDATE users SET user_name='$username', password='$pass', name='$name', contact='$contact', email='$email', whatsapp='$whatsapp'   WHERE id='$id'";
   $query_run= mysqli_query($conn,$query);
   header("Location: ../admins.php");
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

   $deletequery = "DELETE FROM users WHERE id = '$id'";
   $queryrun = mysqli_query($conn,$deletequery);

   header("Location: ../admins.php");
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
  $pass1 = md5($_POST['password1']);


  $insertquery= "insert into users(name,email,contact,whatsapp,location,password) values('$name1','$email1','$contact1','$whatsapp1','$location1','$pass1' )";
    $res = mysqli_query($conn,$insertquery);
    header("Location: ../admins.php");
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