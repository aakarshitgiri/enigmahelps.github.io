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
                            <a class="nav-link" href="home.php">
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


<?php include 'total.php' ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                      <br>
                      <div class="alert alert-success">
  <strong>Hi <?php echo $_SESSION['name']; ?></strong>, Your contribution could save a life, Be serious before filling any kind of data.
</div>
                     
                      <br>
                       <center>
                        <div class="row ">
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="height:130px; width:200px; background-color: cadetblue;">
                                    <div class="card-body" style="text-align:center; font-size:17px; font-weight:bold; padding-top:0;">
                                    <a >Hospitals Updated</a>
                                    <br>
                                    <a style="font-size:30px;"><?php echo $totalhospital ?></a>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="hospitals.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="height:130px; width:200px; background-color: firebrick;">
                                    <div class="card-body" style="text-align:center; font-size:17px; font-weight:bold; padding-top:0;">
                                    <a >Oxygen Centers</a>
                                    <br>
                                    <a style="font-size:30px;"><?php echo $totaloxygen ?></a>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="oxygen.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="height:130px; width:200px; background-color: darkblue;">
                                    <div class="card-body" style="text-align:center; font-size:17px; font-weight:bold; padding-top:0;">
                                    <a >Active Resources</a>
                                    <br>
                                    <a style="font-size:30px;"><?php echo $totalresources ?></a>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="resources.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="height:130px; width:200px; background-color: darkmagenta;">
                                    <div class="card-body" style="text-align:center; font-size:17px; font-weight:bold; padding-top:0;">
                                    <a >Need Help</a>
                                    <br>
                                    <a style="font-size:30px;"><?php echo $totalneedhelp ?></a>
                                    </div>
                                    
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="needhelp.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       </center>
                    </div>
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
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

