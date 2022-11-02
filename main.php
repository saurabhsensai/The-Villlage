<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>
<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:42:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ro/assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/material-design-icons/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" type="text/css" href="ro/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="ro/assets/css/app.css" type="text/css" />
</head>

<body>
  
              
           
        <?php include 'navslider.php';?>  
<!------------------------------------------------------------------------------------------------------------------------------------>



<!----------------------------------------------------------------------------------------------------------------------------------->

    <script src="ro/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="ro/assets/js/app.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/jquery.flot.time.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="ro/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</body>

<!-- Mirrored from foxythemes.net/preview/products/beagle/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Jun 2021 18:42:54 GMT -->

</html>