<?php
include '../../config.php';



if(isset($_POST['checking_viewbtn']))
{

$S_id =$_POST['student_id'];


$selectquery = "SELECT * FROM oxygen WHERE ID='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
   echo $return = '
   <h5> ID:         '.$res['ID'].'</h5>
   <h5> Name:       '.$res['name'].'</h5>
   <h5> City: '.$res['city'].'</h5>
   <h5> Address: '.$res['address'].'</h5>
   <h5> Contact: '.$res['contact'].'</h5>
   <h5> Oxygen Availabel: '.$res['availability'].'</h5>
   <h5> Last Update: '.$res['lastupdate'].'</h5>
   <h5> Date: '.$res['date'].'</h5>
   <h5> Time: '.$res['time'].'</h5>
  
  
   ';

}



}








if(isset($_POST['delete']))
{
   $id = $_POST['delete_id'];

   $deletequery = "DELETE FROM oxygen WHERE ID = '$id'";
   $queryrun = mysqli_query($conn,$deletequery);

   header("Location: ../oxygen.php");
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
  $city1 = $_POST['city1'];
  $address1 = $_POST['address1'];
  $contact1 = $_POST['contact1'];
  $availability1 = $_POST['availability1'];
  $lastupdate1 = $_POST['lastupdate1'];

  

  $insertquery= "insert into oxygen(name,city,address,contact,availability,lastupdate) values('$name1','$city1','$address1','$contact1','$availability1','$lastupdate1' )";
    $res = mysqli_query($conn,$insertquery);
    header("Location: ../oxygen.php");
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

$selectquery = "SELECT * FROM oxygen WHERE ID='$S_id'";
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
   $contact = $_POST['contact'];
   $availability = $_POST['availability'];
   $lastupdate = $_POST['lastupdate'];

   $query = "UPDATE oxygen SET availability='$availability', contact='$contact', lastupdate='$lastupdate' WHERE ID='$id'";
   $query_run= mysqli_query($conn,$query);

   header("Location: ../oxygen.php");
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
