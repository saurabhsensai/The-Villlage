
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

  
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .card .carousel-item {
  height: 200px;
}
.card .carousel-caption {
  padding: 0;
  right: 0;
  left: 0;
  color: #3d3d3d;
}
.card .carousel-caption h3 {
  color: #3d3d3d;
}
.card .carousel-caption p {
  line-height: 30px;
}
.card .carousel-caption .col-sm-3 {
  display: flex;
  align-items: center;
}
.card .carousel-caption .col-sm-9 {
  text-align: left;
}
.navi a {
    text-decoration:none;
}
a > .ico {
    background-color: grey;
    padding: 10px;
    
}
a:hover > .ico {
    background-color: #666;
}
    </style>
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
</head>
<body>
    <div class="card col-md-3 mt-5 mb-5 my-0 mx-auto">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
    <div class="w-100 carousel-inner my-3" role="listbox">
      <div class="carousel-item active ">
        <div class="carousel-caption">
        <div class="row">
          
          <div class="">
            <h3>Velvet pouch!</h3>
            <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
            </small>
            <small class="smallest mute">- Yayo Dudemous</small>
          </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
          <div class="row">
          
            <div class="">
              <h3>Velvet pouch!</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </small>
              <small class="smallest mute">- Yayo Dudemous</small>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-caption">
        
        <div class="row">
     
            <div class="">
              <h3>Velvet pouch!</h3>
              <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                  Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
              </small>
              <small class="smallest mute">- Yayo Dudemous</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="float-right navi">
    <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>	<script type="text/javascript">
		</script>
</body>
</html>
