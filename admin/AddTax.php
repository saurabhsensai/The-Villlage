<?php
session_start();
error_reporting(0);
include("checklogin.php");
check_login();
include("dbconnection.php");
if(isset($_POST['update']))
{
$name=$_POST['name'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$watertax=$_POST['watertax'];
$Propertytax=$_POST['Propertytax'];
$Penalty=$_POST['Penalty'];
$Paymentstatus=$_POST['Paymentstatus'];
$address=$_POST['address'];
$userid=$_GET['id'];
	$ret=mysqli_query($con,"update user set firstname='$firstname',lastname='$lastname',watertax='$watertax',Propertytax='$Propertytax',Penalty='$Penalty',Paymentstatus='$Paymentstatus',address='$address' where id='$userid'");
 
	}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from foxythemes.net/preview/products/beagle/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:43:09 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Details</title>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/bootstrap-slider/css/bootstrap-slider.min.css" />
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css" />


    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css" />


</head>

<body>
    

  
<!------------------------------------------------------Head Navbar The Village-------------------------------------------------------------------------->

<div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
      
          <div class="page-title"><span> Admin Panel </span></div>

		  <div class="page-title"><span>Tax Department</span></div>
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
					
                  <li ><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a> </li>
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
                    </ul>
                  </li>

<!------------------------------------------------------------------------------------------------------------------------------------->
                
                  <li class="divider">Village/Govermental</li>

<!------------------------------------------------------------------------------------------------------------------------------------->

                  <li  class="parent"><a href="#"><i class="icon mdi mdi-accounts"></i><span>Users</span></a>
                    <ul class="sub-menu">
                      <li><a href="./users.php">Users</a>
                      </li>
                      <li  class="active"><a href="Tax.php">Tax</a>
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

<!-------------------------------------------------------------------------------------------------------------------------------------->
<div class="card-body">



        <div class="be-content">
            <div class="page-head">
                <h2 class="page-head-title">Add Penalty</h2>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb page-head-nav">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#">Users</a></li>
                        <li class="breadcrumb-item active">Add Penalty<</li>
                    </ol>
                </nav>
            </div>








            <div class="main-content container-fluid">
                <div class="row wizard-row">
                    <div class="col-md-12 fuelux">
                        <div class="block-wizard">
                            <div class="wizard wizard-ux" id="wizard1">
                              
                                
           <div class="step-content">
                                    <div class="step-pane active" data-step="1">
                                        <div class="container p-0">
                                            
                                        <?php $rt=mysqli_query($con,"select * from user where id='".$_GET['id']."'");
			  while($rw=mysqli_fetch_array($rt))
			  {?>	                             
                     
                     <form class="form-horizontal group-border-dashed"  method="post"  enctype="multipart/form-data" >
                                         
                                        <div class="form-group row">
                                                    <div class="col-sm-7">
                                                        <h3 class="wizard-title">User Info</h3>
                                                    </div>
                                                </div>
                  
   
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">firstname</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="firstname" id="lastname" type="text" value="<?php echo $rw['firstname'];?>" >

                                         

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">lastname</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="lastname" id="lastname" type="text" value="<?php echo $rw['lastname'];?>" >

                                         

                                                    </div>
                                                </div>


                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">watertax</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="watertax" id="watertax" type="text" value="<?php echo $rw['watertax'];?>" >

                                         

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Propertytax</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="Propertytax" id="Propertytax" type="text" value="<?php echo $rw['Propertytax'];?>" >

                                         

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Penalty</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="Penalty" id="Penalty" type="text" value="<?php echo $rw['Penalty'];?>" >

                                         

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Paymentstatus</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="Paymentstatus" id="Paymentstatus" type="text" value="<?php echo $rw['Paymentstatus'];?>" >

                                         

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Contact no.</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="contact" id="contact" type="text"value="<?php echo $rw['mobile'];?>">
                                                        

                                                    </div>
                                                </div>                                                


                                                <div class="form-group row">
                                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Address</label>
                                                    <div class="col-12 col-sm-8 col-lg-6">
                                                    <input class="form-control" name="address" type="text" value="<?php echo $rw['address'];?>" >
                                                        

                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button class="btn btn-secondary btn-space">Cancel</button>
                          <button type="submit" name="update" class="btn btn-primary btn-space md-trigger" data-modal="nft-default">Save changes</button></td>


<!------------------------------------------------------------------------------------------------------------------------------------->




<!------------------------------------------------------------------------------------------------------------------------------------->

                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </form>
                                        </div>
                                    </div>


                                    <br />

<!------------------------------------------------------------------------------------------------------------------------------------->


<!------------------------------------------------------------------------------------------------------------------------------------->




<!------------------------------------------------------------------------------------------------------------------------------------->






<!------------------------------------------------------------------------------------------------------------------------------------->



<!-------------------------------------------------------------------------------------------------------------------------------------->
        <nav class="be-right-sidebar">
            <div class="sb-content">
                <div class="tab-navigation">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="tab-panel">
                    <div class="tab-content">
                        <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">
                            <div class="chat-contacts">
                                <div class="chat-sections">
                                    <div class="be-scroller-chat">
                                        <div class="content">
                                            <h2>Recent</h2>
                                            <div class="contact-list contact-list-recent">
                                                <div class="user">
                                                    <a href="#"><img src="ro/assets/img/avatar1.png" alt="Avatar">
                                                        <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div>
                                                    </a>
                                                </div>
                                                <div class="user">
                                                    <a href="#"><img src="ro/assets/img/avatar2.png" alt="Avatar">
                                                        <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div>
                                                    </a>
                                                </div>
                                                <div class="user">
                                                    <a href="#"><img src="ro/assets/img/avatar3.png" alt="Avatar">
                                                        <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <h2>Contacts</h2>
                                            <div class="contact-list">
                                                <div class="user">
                                                    <a href="#"><img src="ro/assets/img/avatar4.png" alt="Avatar">
                                                        <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div>
                                                    </a>
                                                </div>
                                                <div class="user">
                                                    <a href="#"><img src="ro/assets/img/avatar5.png" alt="Avatar">
                                                        <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div>
                                                    </a>
                                                </div>
                                                <div class="user">
                                                    <a href="#"><img src="ro/assets/img/avatar6.png" alt="Avatar">
                                                        <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-input">
                                    <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                                </div>
                            </div>
                            <div class="chat-window">
                                <div class="title">
                                    <div class="user"><img src="ro/assets/img/avatar2.png" alt="Avatar">
                                        <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                    </div><span class="icon return mdi mdi-chevron-left"></span>
                                </div>
                                <div class="chat-messages">
                                    <div class="be-scroller-messages">
                                        <div class="content">
                                            <ul>
                                                <li class="friend">
                                                    <div class="msg">Hello</div>
                                                </li>
                                                <li class="self">
                                                    <div class="msg">Hi, how are you?</div>
                                                </li>
                                                <li class="friend">
                                                    <div class="msg">Good, I'll need support with my pc</div>
                                                </li>
                                                <li class="self">
                                                    <div class="msg">Sure, just tell me what is going on with your computer?</div>
                                                </li>
                                                <li class="friend">
                                                    <div class="msg">I don't know it just turns off suddenly</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-input">
                                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                                        <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-todo" id="tab2" role="tabpanel">
                            <div class="todo-container">
                                <div class="todo-wrapper">
                                    <div class="be-scroller-todo">
                                        <div class="todo-content"><span class="category-title">Today</span>
                                            <ul class="todo-list">
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" checked="" id="tck1">
                                                        <label class="custom-control-label" for="tck1">Initialize the project</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" id="tck2">
                                                        <label class="custom-control-label" for="tck2">Create the main structure							</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" id="tck3">
                                                        <label class="custom-control-label" for="tck3">Updates changes to GitHub							</label>
                                                    </div>
                                                </li>
                                            </ul><span class="category-title">Tomorrow</span>
                                            <ul class="todo-list">
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" id="tck4">
                                                        <label class="custom-control-label" for="tck4">Initialize the project							</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" id="tck5">
                                                        <label class="custom-control-label" for="tck5">Create the main structure							</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" id="tck6">
                                                        <label class="custom-control-label" for="tck6">Updates changes to GitHub							</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox" id="tck7">
                                                        <label class="custom-control-label" for="tck7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!							</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-input">
                                    <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-settings" id="tab3" role="tabpanel">
                            <div class="settings-wrapper">
                                <div class="be-scroller-settings"><span class="category-title">General</span>
                                    <ul class="settings-list">
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st1" id="st1"><span>
                            <label for="st1"></label></span>
                                            </div><span class="name">Available</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st2" id="st2"><span>
                            <label for="st2"></label></span>
                                            </div><span class="name">Enable notifications</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st3" id="st3"><span>
                            <label for="st3"></label></span>
                                            </div><span class="name">Login with Facebook</span>
                                        </li>
                                    </ul><span class="category-title">Notifications</span>
                                    <ul class="settings-list">
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st4" id="st4"><span>
                            <label for="st4"></label></span>
                                            </div><span class="name">Email notifications</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st5" id="st5"><span>
                            <label for="st5"></label></span>
                                            </div><span class="name">Project updates</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st6" id="st6"><span>
                            <label for="st6"></label></span>
                                            </div><span class="name">New comments</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st7" id="st7"><span>
                            <label for="st7"></label></span>
                                            </div><span class="name">Chat messages</span>
                                        </li>
                                    </ul><span class="category-title">Workflow</span>
                                    <ul class="settings-list">
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st8" id="st8"><span>
                            <label for="st8"></label></span>
                                            </div><span class="name">Deploy on commit</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <script src="ro/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="ro/assets/js/app.js" type="text/javascript"></script>
    <script src="ro/assets/lib/fuelux/js/wizard.js" type="text/javascript"></script>
    <script src="ro/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.wizard();
        });
    </script>

    <script src="ro/assets/lib/jquery.niftymodals/js/jquery.niftymodals.js" type="text/javascript"></script>
    <script type="text/javascript">
        $.fn.niftyModal('setDefaults', {
            overlaySelector: '.modal-overlay',
            contentSelector: '.modal-content',
            closeSelector: '.modal-close',
            classAddAfterOpen: 'modal-show'
        });

        $(document).ready(function() {
            //-initialize the javascript
            App.init();
        });
    </script>


</body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:43:10 GMT -->

</html>