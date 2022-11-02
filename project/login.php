<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
$ret=mysqli_query($con,"SELECT * FROM user WHERE email='".$_POST['email']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$val3 =date("Y/m/d");
date_default_timezone_set("Asia/Calcutta");
$time=date("h:i:sa");
$tim = $time;
$ip_address=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL)); 
$city = $addrDetailsArr['geoplugin_city']; 
$country = $addrDetailsArr['geoplugin_countryName'];
ob_start();
system('ipconfig /all');
$mycom=ob_get_contents();
ob_clean();
$findme = "Physical";
$pmac = strpos($mycom, $findme);
$mac=substr($mycom,($pmac+36),17);
$ret=mysqli_query($con,"insert into usercheck(logindate,logintime,user_id,username,email,ip,mac,city,country)values('".$val3."','".$tim."','".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['login']."','$ip_address','$mac','$city','$country')");

$extra="home.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="Invalid username or password";
$extra="login.php";

echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    html,body{
    color: #fff;
}
.lni{
    font-size: 64px;
}

.bg{
    background: linear-gradient(to right, #3c96ff 0%, #2dfbff 100%) !important;
}

.regform{
    box-shadow: 0px 8px 9px 0px rgba(69, 69, 69, 0.25);
}

.sign{
    color: #000;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ro/assets/img/logo-fav.png">
    <title>profile</title>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>




  
<div class="be-wrapper be-offcanvas-menu be-fixed-sidebar">
      <nav class="navbar navbar-expand fixed-top be-top-header">
        <div class="container-fluid">
        <h3> 
        <div class="container">
    <div class="col">
    <a class="text-dark text-decoration-none" href="home.php">THE VILLAGE</a>

    </div>
</h3>

        

          </div>
          <div class="page-title"><span></span></div>
          <div class="be-right-navbar">
      
            <ul class="nav navbar-nav float-right be-icons-nav">
              <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a></li>
              
                </div>
            </div>
        </nav>









    <link rel="stylesheet" href="https://cdn.lineicons.com/1.0.0/LineIcons.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
<div class=" shadow-sm">
	<div class="container my-5 ">
  <div class="container my-5 ">	<div class="container my-5 ">	<div class="container my-5 ">
	    <div class="row">
		<div class="col-md-8  my-5">
		    <div class="row my-2 my-5">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-enter" aria-hidden="true"></i>
		        </div>
		       
		        <div class="col-sm-9 col-md-10 col-lg-10 ">
		            <h1 class="heading">Why Login is important ?</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>
		    
		     <div class="row">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-user" aria-hidden="true"></i>
		        </div>
		        
		        <div class="col-sm-9 col-md-10 col-lg-10">
		            <h1 class="heading">Make Your Profile</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>
		    
		      <div class="row">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-cloud-upload" aria-hidden="true"></i>
		        </div>
		        
		        <div class="col-sm-9 col-md-10 col-lg-10">
		            <h1 class="heading">Upload Resume</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>
		    
		   
		</div>
<!----------------------------------------------------------------------------------------------------------------------------->	


		<div class="col-md-4 my-5">
		        <div class="card regform wow bounce animated my-5" data-wow-delay="0.05s">
		            <div class="card-body regform">
		               <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                           
                              <h1 class="sign">Login</h1>
                           </div>
                        </div>
                        <p style="color:#F00"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
                        <form id="login-form" class="login-form" action="" method="post">
                   
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email" id="txtusername" class="form-control" required="true">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="txtpassword" class="form-control" required="true"> 
                           </div>
                           <div class="col-md-12 text-center mb-3">
                          
                              <button type="submit" name="login" class=" btn btn-block mybtn btn-primary tx-tfm">Log in</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="#" id="signin">Create account?</a></p>
                              </div>
                           </div>
                            </div>
		            </div>
		        </div>
		    </div>
	</div>
	</div>
</div>



	<script type="text/javascript">
	$("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});

$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});


  
   /*      $(function() {
           $("form[name='login']").validate({
             rules: {
               
               email: {
                 required: true,
                 email: true
               },
               password: {
                 required: true,
                 
               }
             },
              messages: {
               email: "Please enter a valid email address",
              
               password: {
                 required: "Please enter password",
                
               }
               
             },
             submitHandler: function(form) {
               form.submit();
             }
           });
         });
         

*/
$(function() {
  
  $("form[name='registration']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
  
    submitHandler: function(form) {
      form.submit();
    }
  });
});

	</script>
</body>
</html>
