<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set("Asia/Kolkata");
$data=date("d/m/y");
error_reporting(0);
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'photo_gallery');
// Uploads files
if (isset($_POST['save'])) {     
    $name=$_POST['name'];
    $detail= $_POST['position'];
    $da= $_POST['date'];
    $filename = $_FILES["uploadfile"]["name"];
	  $tempname = $_FILES["uploadfile"]["tmp_name"];
	  $folder = "uploads/".$filename;
    $sql = "INSERT INTO photo_gallery(name, des,date,img) VALUES ('$name', '$detail','$da','$filename')";        
   if (mysqli_query($conn, $sql)) {
              
              echo "<script>window.location.href='imagegallery.php'</script>";
            }
        } else {
            echo "Failed to upload file.";
        }      
      
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ro/assets/img/logo-fav.png">
    <title>Imagegallery</title>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css"/>
  </head>
  <body>


<!------------------------------------------------------Head Navbar The Village-------------------------------------------------------------------------->

<div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
      
          <div class="page-title"><span> Admin Panel </span></div>

		  <div class="page-title"><span>Upload Image</span></div>
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
                    <li><a href="./addplacecat.php">Add Place category</a></li>
                    <li><a href="./manageplacecat.php">Manage Place category </a></li>

                      <li><a href="./place.php">Add Places</a></li>
                      <li><a href="./manageplace.php">Manage Places</a></li>
                        
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
                      <li><a href="Totaljobs.php">Available Jobs</a>
                      </li>
                      <li><a href="jobcatagory.php">Job Category</a>
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
                      <li  class="active"><a href="imagegallery.php">Upload Images</a>
                      </li>
                      <li><a href="Allimages.php">Manage Images</a>
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
        <div class="page-head">
          <h2 class="page-head-title">upload Images</h2>
          <nav aria-label="breadcrumb" role="navigation">
          <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="#">Village gallery</a></li>
              <li class="breadcrumb-item active">upload Images</li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
        
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">upload Images to Imagegallery</div>
                <div class="card-body">
                <form action="imagegallery.php" method="POST" enctype="multipart/form-data">
              
            
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Enter Mobile Number :</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type="file" name="uploadfile" value=""/>
                 
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Add Adhar Document :</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type="text" name="name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Add Cast Document :</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                      <input class="form-control" type="text" name="position">
                      </div>
                    </div>
                  
                    <div class="form-group row text-right">
                      <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                      <input type="text" name="date" value="<?php echo $data;   ?>" hidden>  <br><br>
                        <button class="btn btn-space btn-primary"  type="submit" name="save">Submit</button>
                        
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
    <script src="ro/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="ro/assets/js/app.js" type="text/javascript"></script>
    <script src="ro/assets/lib/parsley/parsley.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	$('form').parsley();
      });
    </script>
  </body>

</html>