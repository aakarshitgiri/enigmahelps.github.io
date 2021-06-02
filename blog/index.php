<?php
include '../config.php';
include 'header.php';
?>
<br>


<div class="alert alert-danger" role="alert">
  Important Note:</b> Sources may be unverified. Please use discretion and do not pay anyone without verifying.
enigmahelps.com does not take any responsibility for the information shared.
</div>

<br>
<div class="add-new-resource">
        <div class="container-fluid" style="background-color: gainsboro; padding: 5px;">
            <div class="row">
                <div class="col-md-9 mb-3 mb-md-0 d-flex align-items-center">
                    If you have information regarding availability of oxygen refilling center,Hospital beds availability, or other resource, you can add them to help the needy one here (Resources must be verified first)               </div>
                <div class="col-md-3 text-md-right">
                    <a href="addresource.php" class="btn btn-primary">Add Information</a>                </div>
            </div>
        </div>
    </div>
    <br>

 
  <br>
 


  <div class="container  ">
  <div class="row ">
  <?php include '../config.php'; 

$query = " SELECT * FROM resources" ;
$query_run = mysqli_query($conn, $query);
$check_resources = mysqli_num_rows($query_run) > 0;
if($check_resources){

while($row = mysqli_fetch_array($query_run)){
  

?>

 
    <div class="col">
      
            <div class="row mt-2 " >

               <div class="col-md-2" style="margin:5px; padding:5px;" >
                 <div class="card" style="width: 18rem;">
             
                    <img src="upload/<?php echo $row['img'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                    <h5 class="invisible" name="ID"><?php echo $row['ID'] ?></h5>
                    <h5 class="card-title"><?php echo $row['heading'] ?></h5>
                    <p class="card-text"><?php echo implode(' ', array_slice(explode(' ', $row['description']), 0, 20)) ?></p>
                    <a href="view.php?ID=<?php echo $row['ID'] ?>" class="btn btn-primary" name="view" style="margin:5px;">View Detail</a>
                    <p style="background-color: bisque; border-radius: 25px; padding: 5px; width: auto; font-weight: bolder;"><?php echo $row['city'] ?></p>
                     <p style="background-color: aquamarine; border-radius: 25px; padding: 5px; width: auto; font-weight: bolder;"> Contact: <?php echo $row['contact'] ?></p>
                    <p style="background-color: aquamarine; border-radius: 25px; padding: 5px; width: auto; font-weight: bolder;"> Verified Date: <?php echo $row['dateverify'] ?></p>
                    <p style="background-color: aquamarine; border-radius: 25px; padding: 5px; width: auto; font-weight: bolder;"> Verified Time: <?php echo $row['verifytime'] ?></p>
                  </div>
                 
             </div>
           </div>

    </div>
</div>


<?php


}

}
else{

echo "No Resources are found, Check out later";
}

?>




</div>
</div>   

<br>
<br>











<?php include 'footer.php' ?>








