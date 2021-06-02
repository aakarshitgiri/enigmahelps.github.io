<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="../assets/img/favicon.png" rel="icon">
        <title>EnigmaHelps - Admins</title>
        <link href="css/styles.css" rel="stylesheet" />
         <!-- Favicons -->
  <link href="../assets/img/favicon.ico" rel="icon">
 

      
       
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
   

  
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
   

 
   
 
    </head>
    <body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Enigma Covid-19 </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                   
                </div>
            </form>
            <!-- Navbar-->
            <a class="float-right " style="color: white; margin: 20px;" href="logout.php">Logout</a>
           
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="admins.php">Admins</a>
                                    <a class="nav-link" href="volunteers1.php">Volunteer - Resources</a>
                                    <a class="nav-link" href="volunteers2.php">Volunteer - Hospital & Oxygen</a>
                                    <a class="nav-link" href="volunteers3.php">Volunteer - Medi, Plasama & Recoverey</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                              Forms
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                    <a class="nav-link" href="needhelp.php">Need Help</a>
                                    <a class="nav-link" href="doctors.php">Doctor Reg</a>
                                    <a class="nav-link" href="volunteers.php">Volunteer Reg</a>
                                    <a class="nav-link" href="plasamadonation.php">Plasama Donation</a>
                                    <a class="nav-link" href="plasamarequest.php">Plasama Request</a>
                                    <a class="nav-link" href="medicinerequest.php">Medicine Request</a>
                                    <a class="nav-link" href="recoveredpatient.php">Recovered Patients</a>
                                </nav>
                            </div>
                            
                            
                         
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="hospitals.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                               Hospitals
                            </a>
                            <a class="nav-link" href="oxygen.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Oxygen Center
                            </a>
                          
                            <a class="nav-link" href="resources.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Resources
                            </a>
                           
                            <a class="nav-link" href="selfcheck.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Self Check 
                            </a>
                           
                           
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['name']; ?>
                    </div>
                </nav>
            </div>



            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h3 class="mt-4">Contact Us Queries </h3>
                        <br>
                        <a  type="button" class="btn btn-info" onclick="myFunction()"  style="padding: 2px 6px 2px 6px; margin:10px;">ADD Query</a>
                      
                        <div class="card mb-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="datatableid" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>View Details</th>
                                                <th>Status</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Contact</th>
                                              
                                                <th>Location</th>
                                             
                                                
                                               
                                            </tr>
                                        </thead>
                                      
                                        <tbody>

                                        <?php
include '../config.php';

$selectquery = " select * from contactus ";
$query= mysqli_query($conn,$selectquery);
$num= mysqli_num_rows($query);
while($res= mysqli_fetch_array($query)){
?>



   


                                            <tr>
                                                <td class="stud_id"><?php echo $res['ID']  ?></td>
                                                <td><a  type="button" class="btn btn-info view_btn"  style="padding: 2px 6px 2px 6px;">View</a> <a  type="button" class="btn btn-secondary edit_btn"  style="padding: 2px 6px 2px 6px;">Update</a>  <a  type="button" class="btn btn-danger delete_btn"  style="padding: 2px 6px 2px 6px;">Delete</a></td>
                                                <td ><?php echo $res['respond']  ?></td>


                                                <td><?php echo $res['name']  ?></td>
                                                <td><?php echo $res['date']  ?></td>
                                                <td><?php echo $res['contact']  ?></td>
                                                <td><?php echo $res['location']  ?></td>
                                              
                                                
                                               
                                            </tr>

                                            <?php
                                        }

?>

                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>













<!-- Modal -->
<div class="modal fade" id="studentViewmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="student_viewing_data" ></div>
        <br>
     
      </div>
     
    </div>
  </div>
</div>
        
        <!-- Modal footer -->
        


                                    </div>
                                    </div>
                                    </div>


<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaledit">ADD Query</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action="code/code.php" method="POST">
      

 
  <div class="form-group">
    <label for="name1">Name</label>
    <input id="name1" type="text" name="name1" class="form-control">
  </div>
  <div class="form-group">
    <label for="email1">Email</label>
    <input id="email1" type="text" name="email1" class="form-control">
  </div>
  <div class="form-group">
    <label for="contact1">Contact</label>
    <input id="contact1" type="text" name="contact1" class="form-control">
  </div>
  <div class="form-group">
    <label for="whatsapp1">Whatsapp</label>
    <input id="whatsapp1" type="text" name="whatsapp1" class="form-control">
  </div>
  <div class="form-group">
    <label for="location1">Location</label>
    <input id="location1" type="text" name="location1" class="form-control">
  </div>
  <div class="form-group">
    <label for="query1">Query</label>
    <input id="query1" type="text" name="query1" class="form-control">
  </div>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" name="add" class="btn btn-primary">ADD</button>
</form>

 
      </div>
     
    </div>
  </div>
</div>
        
        <!-- Modal footer -->
       

                                    </div>
                                    </div>
                                    </div>






<!-- Modal -->
<div class="modal fade" id="editstudentmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaledit">Update Response Status </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
      <form action="code/code.php" method="POST">
      <div class="form-group">
      <input type="hidden" name="edit_id" id="edit_id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Response Status</label>
    <input id="status" type="text" name="status" class="form-control">
  </div>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" name="update_student" class="btn btn-primary">Update</button>
</form>

 
      </div>
     
    </div>
  </div>
</div>
        
        <!-- Modal footer -->
       

                                    </div>
                                    </div>
                                    </div>


<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modaldelete"> Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form action="code/code.php" method="POST">
      <div class="modal-body">
      <input type="hidden" name="delete_id" id="delete_id">
     <p> Are you sure, you want to delete ? </p>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
</div>
      </div>
      </form>
    </div>
  </div>
</div>
        
        <!-- Modal footer -->
       

                                    </div>
                                    </div>
                                    </div>







<script>
function myFunction() {
    $('#add').modal('show')
}


    $(document).ready(function () {
        
        $('.view_btn').click(function (e) { 
            e.preventDefault();

           var stud_id =  $(this).closest('tr').find('.stud_id').text();
     
       $.ajax({
           type: "POST",
           url: "code/code.php",
           data: {

               'checking_viewbtn': true,
               'student_id': stud_id,

           },
          
           success: function (response) {

               $('.student_viewing_data').html(response)
               $('#studentViewmodal').modal('show');
            //    console.log(response);
           }
       });
       
        //    console.log(stud_id);


        
        });

        $('.edit_btn').click(function (e) { 
            e.preventDefault();

           var stud_id =  $(this).closest('tr').find('.stud_id').text();
     
       $.ajax({
           type: "POST",
           url: "code/code.php",
           data: {

               'checking_edit_btn': true,
               'student_id': stud_id,

           },
          
           success: function (response) {


$.each(response, function (key, value) { 
    // console.log(value['respond']);
    $('#status').val(value['respond']);
    $('#edit_id').val(value['ID']);
     
});

         $('#editstudentmodal').modal('show');
        //   console.log(response);
           }
       });
       
        //    console.log(stud_id);


        
        });

        $('.delete_btn').click(function (e) { 
            e.preventDefault();

           var stud_id =  $(this).closest('tr').find('.stud_id').text();
     
    $('#delete_id').val(stud_id);
           $('#deletemodal').modal('show');
        
        });


    });

    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});
</script>


</main>
<footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; ENIGMA</div>
                       
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script>
  $(document).ready(function() {

    $('#datatableid').DataTable({
      "paggingType": "full_numbers",
      "lenghtMenu":[
        [10,25,50,-1],
      [10,25,50,'All']
    ],
    responsive:true,
    language:{
      search: "_INPUT_",
      searchPlaceholder: "Search Name/City",
    } 
     
    });
} );
</script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

