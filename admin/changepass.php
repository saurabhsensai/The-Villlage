<?php
session_start();
error_reporting(0);
include("checklogin.php");
check_login();
include("dbconnection.php");
if(isset($_POST['change']))
{
  $oldpas=$_POST['oldpass'];
  $adminid=$_SESSION['id'];
  $newpassword=$_POST['newpass'];
 $sql=mysqli_query($con,"SELECT password FROM  admin where password='$oldpas' && id='$adminid'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update  admin set password='$newpassword' where id='$adminid'");
$_SESSION['msg1']="Password Changed Successfully !!";
//header('location:user.php');
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from foxythemes.net/preview/products/beagle/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:43:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ro/assets/img/logo-fav.png">
    <title>Change Paaword</title>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/bootstrap-slider/css/bootstrap-slider.min.css" />
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css" />

    <script language="javascript" type="text/javascript">
function valid()
{
if(document.form1.oldpass.value=="")
{
alert(" Old Password Field Empty !!");
document.form1.oldpass.focus();
return false;
}
else if(document.form1.newpass.value=="")
{
alert(" New Password Field Empty !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value=="")
{
alert(" Re-Type Password Field Empty !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value.length<6)
{
alert(" Password Field length must be atleast of 6 characters !!");
document.form1.newpass.focus();
return false;
}
else if(document.form1.confirmpassword.value.length<6)
{
alert(" Re-Type Password Field less than 6 characters !!");
document.form1.confirmpassword.focus();
return false;
}
else if(document.form1.newpass.value!= document.form1.confirmpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.form1.newpass.focus();
return false;
}
return true;
}
</script>






</head>

<body>
    <div class="be-wrapper">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
                <div class="be-navbar-header">
                    <a class="navbar-brand" href="index-2.html"></a>
                </div>
                <div class="page-title"><span>Form Elements</span></div>
                <div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="ro/assets/img/avatar.png" alt="Avatar"><span class="user-name">T??pac Amaru</span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name">T??pac Amaru</div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="pages-profile.html"><span class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item" href="#"><span class="icon mdi mdi-settings"></span>Settings</a>
                                <a class="dropdown-item" href="pages-login.html"><span class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">
                        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                            <ul class="dropdown-menu be-notifications">
                                <li>
                                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                                    <div class="list">
                                        <div class="be-scroller-notifications">
                                            <div class="content">
                                                <ul>
                                                    <li class="notification notification-unread">
                                                        <a href="#">
                                                            <div class="image"><img src="ro/assets/img/avatar2.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="notification">
                                                        <a href="#">
                                                            <div class="image"><img src="ro/assets/img/avatar3.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="notification">
                                                        <a href="#">
                                                            <div class="image"><img src="ro/assets/img/avatar4.png" alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="notification">
                                                        <a href="#">
                                                            <div class="image"><img src="ro/assets/img/avatar5.png" alt="Avatar"></div>
                                                            <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
                            <ul class="dropdown-menu be-connections">
                                <li>
                                    <div class="list">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="ro/assets/img/github.png" alt="Github"><span>GitHub</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="ro/assets/img/bitbucket.png" alt="Bitbucket"><span>Bitbucket</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="ro/assets/img/slack.png" alt="Slack"><span>Slack</span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="ro/assets/img/dribbble.png" alt="Dribbble"><span>Dribbble</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="ro/assets/img/mail_chimp.png" alt="Mail Chimp"><span>Mail Chimp</span></a>
                                                </div>
                                                <div class="col">
                                                    <a class="connection-item" href="#"><img src="ro/assets/img/dropbox.png" alt="Dropbox"><span>Dropbox</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="./dash.php"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>User</span></a>
                    <ul class="sub-menu">
                      <li><a href="./users.php">Users</a>
                      </li>
                      <li><a href="email-inbox.php">Contact Us</a>
                      </li>
                      
                      <li><a href="userlog.php">User Access Log</a>
                      </li>
                      
                    </ul>
                  </li>

                  <li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Medical </span></a>
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


                  
                  <li class="parent "><a href="#"><i class="icon mdi mdi-pin"></i><span> Village Places </span></a>
                    <ul class="sub-menu">
                    <li><a href="./addplacecat.php">Add Place category</a></li>
                    <li><a href="./manageplacecat.php">Manage Place category </a></li>

                      <li><a href="./place.php">Add Places</a></li>
                      <li><a href="./manageplace.php">Manage Places</a></li>
                        
                    </ul>
                  </li>


                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Villagers</span></a>
                    <ul class="sub-menu">
                      <li><a href="Addvillagers.php">Add Villager</a>
                      </li>
                      <li><a href="villagers.php">All Villagers</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>ChatBot</span></a>
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
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Documentation</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploaddocs.php">Uplod Docs</a>
                      </li>
                     
                    </ul>
                  </li>
                  <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>POST-BOX</span></a>
                    <ul class="sub-menu">
                      <li><a href="uploadpostbox.php">Manage Posts Entries</a>
                      </li>
                     
                    </ul>
                  </li>
                </div>
      </div>
      </div>
      </div>
      </div>        <div class="be-content">
            <div class="page-head">
                <h2 class="page-head-title">Form Elements</h2>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb page-head-nav">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                        <li class="breadcrumb-item active">Elements</li>
                    </ol>
                </nav>
            </div>
            <!---------------------------------------------------------------------------------------------------------------------------->

            <div class="main-content container-fluid">

                <!---------------------------------------------------------------------------------------------------------------------------->


                <!--------------------------------------------------------------PASSWORD-------------------------------------------------------------->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-border-color card-border-color-primary">
                            <div class="card-header card-header-divider">Basic Elements<span class="card-subtitle">These are the basic bootstrap form elements</span></div>
                            <p align="center" style="color:#FF0000"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
                            
                            <div class="card-body">
                                <form name="form1" method="post" action="" onSubmit="return valid();">
                                    <div class="form-group row">

                                    
                                                                                                      
                              

                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Current Password</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="oldpass" id="oldpass" value="" class="form-control"/>
                                        
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPassword3">New Password</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="newpass" id="newpass" value="" class="form-control"/>

                                           
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPlaceholder3">Confirm Password</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                        <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                <input type="password" name="confirmpassword"  id="confirmpassword" class="form-control"/>

                                            
                                        </div>
                                    </div>



                        
                   
                                    <div class="form-group row text-right">
                                       <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                        <button class="btn btn-space btn-primary" type="submit" value="Change" name="change">Submit</button>
                                           <a href="changepass.php" class="btn btn-space btn-secondary" role="button" data-bs-toggle="button">Clear</a>            
                                      </div>
                                  </div>

                                  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------------------------------------------------------------------------------------------------->
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
            <script src="ro/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
            <script src="ro/assets/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/select2/js/select2.full.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/bootstrap-slider/bootstrap-slider.min.js" type="text/javascript"></script>
            <script src="ro/assets/lib/bs-custom-file-input/bs-custom-file-input.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    //-initialize the javascript
                    App.init();
                    App.formElements();
                });
            </script>
</body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:43:08 GMT -->

</html>