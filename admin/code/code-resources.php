<?php
include '../../config.php';



if(isset($_POST['checking_viewbtn']))
{

$S_id =$_POST['student_id'];


$selectquery = "SELECT * FROM resources WHERE ID='$S_id'";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
   echo $return = '
   <h5> ID:         '.$res['ID'].'</h5>
   <h5> Name:       '.$res['name'].'</h5>
   <h5> City: '.$res['city'].'</h5>
   <h5> Heading: '.$res['heading'].'</h5><br>
   <h5 style="color:grey;"> Description: '.$res['description'].'</h5><br><br>
   <img style="height:auto; max-width:465px;" src="../blog/upload/'.$res['img'].'"  alt=""><br><br>
   <h5> Contact: '.$res['contact'].'</h5>
   <h5> Date of Verification: '.$res['dateverify'].'</h5>
   <h5> Time of Verification: '.$res['verifytime'].'</h5>
   <h5> Enigma Verification: '.$res['enigmaverify'].'</h5>
   <h5> Date: '.$res['date'].'</h5>
   <h5> Time: '.$res['time'].'</h5>
  
  
   ';

}



}








if(isset($_POST['delete']))
{
   $id = $_POST['delete_id'];

   $deletequery = "DELETE FROM resources WHERE ID = '$id'";
   $queryrun = mysqli_query($conn,$deletequery);

   header("Location: ../resources.php");
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
  $heading1 = $_POST['heading1'];
  $city1 = $_POST['city1'];
  $contact1 = $_POST['contact1'];
  $desription1 = $_POST['desription1'];
  $dateverify1 = $_POST['dateverify1'];
  $verifytime1 = $_POST['verifytime1'];
  $engimaverify1 = $_POST['engimaverify1'];
 
    $insertquery= "insert into resources(name, heading, dateverify, city, description, contact, verifytime, enigmaverify) values('$name1','$heading1','$dateverify1','$city1','$desription1','$contact1','$verifytime1','$engimaverify1' )";
    $res = mysqli_query($conn,$insertquery);
    header("Location: ../resources.php");
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

$selectquery = "SELECT * FROM resources WHERE ID='$S_id'";
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
   $enigmaverify = $_POST['enigmaverify'];
   $heading = $_POST['heading'];
   $description = $_POST['description'];
   $dateverify = $_POST['dateverify'];
   $verifytime = $_POST['verifytime'];

   $query = "UPDATE resources SET enigmaverify='$enigmaverify', heading='$heading', description='$description', dateverify='$dateverify', verifytime='$verifytime' WHERE ID='$id'";
   $query_run= mysqli_query($conn,$query);

   header("Location: ../resources.php");
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
