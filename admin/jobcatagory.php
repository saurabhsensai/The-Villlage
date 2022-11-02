<?php   
error_reporting(0);
?>

<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Job Categories</title>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/datatables/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css" />

    <link rel="stylesheet" type="text/css"
      href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css"
      href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"
      />
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css" />

</head>
<body>

<body>
     

<!------------------------------------------------------Head Navbar The Village-------------------------------------------------------------------------->

<div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
      
          <div class="page-title"><span> Admin Panel </span></div>

		  <div class="page-title"><span>Add New Job category / View Available job categories</span></div>
          <div class="be-right-navbar">
		        <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="ro/assets/img/avatar.png" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name">The Village Admin</div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a>
                                <a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                        </li>
               </ul>          
         </div>    

<!--------------------------------------------------------Side Menu The Village-------------------------------------------------------------------->

<div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
				  
                <ul class="sidebar-elements">
					
                  <li><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>
<!------------------------------------------------------------------------------------------------------------------------------------->

                <li class="divider">Important</li>

<!------------------------------------------------------------------------------------------------------------------------------------->

  <li class="parent"><a href="#"><i class="icon mdi mdi-notifications-active"></i><span>Notification</span></a>
                    <ul class="sub-menu">
                      <li><a href="./users.php">Users</a>
                      </li>
                      <li><a href="email-inbox.php">Contact Us</a>
                      </li>
                      
                      <li><a href="userlog.php">User Access Log</a>
                      </li>
                      
                    </ul>
                  </li>

                  <li class="parent "><a href="#"><i class="icon mdi mdi-alert-triangle"></i><span> Breaking </span></a>
                    <ul class="sub-menu">
                      <li><a href="AddHospital.php">Add Hospital</a>
                      </li>
                      <li><a href="HospitalInfo.php">HospitalInfo</a>
                      </li>
                      <li><a href="AddPatient.php">Add Patient</a>
                      </li>
                    
                    </ul>
                  </li>

				  <li class="parent "><a href="#"><i class="icon mdi mdi-hospital"></i><span> Medical </span></a>
                    <ul class="sub-menu">
                      <li><a href="AddHospital.php">Add Hospital</a>
                      </li>
                      <li><a href="HospitalInfo.php">HospitalInfo</a>
                      </li>
                      <li><a href="AddPatient.php">Add Patient</a>
                      </li>
                      <li><a href="ActivePatients.php">Active Patients</a>
                      </li>
					  <li><a href="RecoveredPatients.php">Recovered Patients</a>
                      </li>
					  <li><a href="DeadPatientlist.php">Dead Patients</a>
                      </li>
                    </ul>
                  </li>

<!------------------------------------------------------------------------------------------------------------------------------------->
                
                  <li class="divider">Village/Govermental</li>

<!------------------------------------------------------------------------------------------------------------------------------------->

                  <li class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Users</span></a>
                    <ul class="sub-menu">
                      <li><a href="./users.php">Users</a>
                      </li>
                      <li><a href="email-inbox.php">Contact Us</a>
                      </li>
                      
                      <li><a href="userlog.php">User Access Log</a>
                      </li>
                      
                    </ul>
                  </li>


                  <li class="parent"><a href=""><i class="icon mdi mdi-male-female"></i><span>Villagers</span></a>
                    <ul class="sub-menu">
                      <li><a href="Addvillagers.php">Add Villager</a>
                      </li>
                      <li><a href="villagers.php">All Villagers</a>
                      </li>
                     
                    </ul>
                  </li>

				  <li class="parent "><a href="#"><i class="icon mdi mdi-google-maps"></i><span> Village Places </span></a>
                    <ul class="sub-menu">
                    <li  ><a href="addplacecat.php">Add Place category</a></li>
                    <li><a href="manageplacecat.php">Manage Place category </a></li>

                      <li ><a href="place.php">Add Places</a></li>
                      <li ><a href="manageplace.php">Manage Places</a></li>
                        
                    </ul>
                  </li>


<li class="parent"><a href=""><i class="icon mdi mdi-file-text"></i><span>Documentation</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploaddocs.php">Uplod Docs</a>
                      </li>
                     
                    </ul>
                  </li>
				  <li class="parent"><a href=""><i class="icon mdi mdi-format-list-numbered"></i><span>Schemes</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploaddocs.php">Uplod Docs</a>
                      </li>
                     
                    </ul>
                  </li>
 
				  <li class="parent"><a href=""><i class="icon mdi mdi-local-post-office"></i><span>POST-BOX</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploadpostbox.php">Manage Posts Entries</a>
                      </li>
                     
                    </ul>
                  </li>
				  <li class="parent"><a href=""><i class="icon mdi mdi-local-library"></i><span>JOB Portal</span></a>
                    <ul class="sub-menu">
                      <li><a href="jobdash.php">Job Dashboard</a>
                      </li>
                      <li ><a href="Totaljobs.php">Available Jobs</a>
                      </li>
                      <li class="active"><a href="jobcatagory.php">Job Category</a>
                      </li>
                    </ul>
                  </li>
<!------------------------------------------------------------------------------------------------------------------------------------->

                   <li class="divider">Extras</li>

<!------------------------------------------------------------------------------------------------------------------------------------->
              		  
                  <li class="parent"><a href=""><i class="icon mdi mdi-odnoklassniki"></i><span>ChatBot</span></a>
                    <ul class="sub-menu">
                      <li><a href="chatbot/admin/index.php">Dashboard</a>
                      </li>
                      <li><a href="chatbot/admin/?page=system_info">ChatBot System info</a>
                      </li>
                      <li><a href="chatbot/admin/?page=responses">ChatBot Responces</a>
                      </li>
                      <li><a href="chatbot/admin/?page=unanswered">Ununsered Responces</a>
                      </li>
                    </ul>
                  </li>
				  <li class="parent"><a href=""><i class="icon mdi mdi-collection-image"></i><span>Village Gallery</span></a>
                    <ul class="sub-menu">
                      <li><a href="chatbot/admin/index.php">Dashboard</a>
                      </li>
                      <li><a href="chatbot/admin/?page=system_info">ChatBot System info</a>
                      </li>
                     
                    </ul>
                  </li>
				 
				  </div>
            </div>
          </div>
		   
      </div>

	  </nav>


<!---------------------------------------------  Main content  ------------------------------------------------------------------------------->
  
<div class="be-content">
<?php
$msg = "";
error_reporting(0);
if (isset($_POST['upload'])) {
    $name=$_POST['name'];    
    $des=$_POST['details'];
   

	$db = mysqli_connect("localhost", "root", "", "rohan");
    
		// Get all the submitted data from the form
		$sql = "INSERT INTO jobcat (name,des) VALUES ('$name','$des')";

		// Execute query
		mysqli_query($db, $sql);

		// Now let's move the uploaded image into the folder: image
		
}

?>



<div class="main-content container-fluid">
                  <div class="card text-center">
                <div class="card-header card-header-divider">Add Job category </div>
                <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
              
                      <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right text-light">Equal To</label>
                      <div class="col-sm-4 col-lg-6 mb-3 mb-sm-0">
                        <input class="form-control" type="text" name="name" placeholder="jobcategory Name"  id="pass2" type="password" required="" placeholder="Job Name">
                      </div>
                     
                     
                      
                      
                    </div>
                    <div class="form-group row">
                  
                      <label class="col-12 col-sm-3 col-form-label text-sm-right text-light" for="inputTextarea3">Textarea</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <textarea class="form-control" placeholder="job Details"  name="details" id="inputTextarea3"></textarea>
                      </div>
              
                    
               
                        
                      </div>
                      
                 
                    <div class="form-group row">
                  
                
                
                  <label class="col-12 col-sm-3 col-form-label text-sm-right text-light">Equal To</label>
                  
                  <div class="col-sm-4 col-lg-6 my-1">
                  

                    <button type="submit"class="btn btn-primary btn-lg btn-block"   name="upload">Add Job</button>
                    
                  </div>
                  
                  </form>
                </div>
                </div>
              </div>
            


              <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-header">JOB Categories
                                <div class="tools dropdown"><span class="icon mdi mdi-download"></span><a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"><span class="icon mdi mdi-more-vert"></span></a>
                                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <?php
$db = mysqli_connect("localhost", "root", "", "rohan");

$qry2 = "SELECT * FROM jobcat";
$res2 = mysqli_query($db,$qry2);

$type=$_GET['type'];

if($type=='temp'){
  $saurabh=$_GET['saurabh'];
  $id=$_GET['id'];
  if($saurabh=='deactive'){
    $update_status_sql2="DELETE FROM jobcat where id='$id'";
    mysqli_query($db,$update_status_sql2);
  }else{
    
  }
  
}
?>
      
                            <div class="card-body">
                                <table class="table table-striped table-hover table-fw-widget" id="table3">
                                    <thead>
                                        <tr>
                                        <th>INDEX</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
  
        <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
            $i = 1;
            while(($row = mysqli_fetch_assoc($res2))) {
              ?>
                                                    <tr class="odd gradeX">
                                                    <td><?php echo $i++ ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['des']; ?></td>
        <td><?php echo "<span><a href='?type=temp&saurabh=deactive&id=".$row['id']."'>delete</a></span>"; ?> </td>
      </tr>
     <?php } ?>
                                                </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
     





<script src="ro/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
            <script src="ro/assets/js/app.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/jszip/jszip.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/pdfmake/pdfmake.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/pdfmake/vfs_fonts.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-buttons/js/buttons.colVis.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-buttons/js/buttons.print.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    //-initialize the javascript
                    App.init();
                    App.dataTables();
                });
            </script>
</body>
</html>