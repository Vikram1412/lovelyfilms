<?php
error_reporting(0);
require_once("includes/config.php");

$msg = $_GET['msg'];
if($msg=="Success"){
    $errorMsg = "You have been successfully registered with us!"; 
}else if($msg=="Failure"){
    $errorMsg = "<p style='color:red'>Sorry, your registration failed. Please go back and try again<p> <a href='register'>Back</a>";
}else{
    $errorMsg = "<p style='color:red'>Sorry, your registration failed. Please go back and try again<p> <a href='register'>Back</a>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<!-- Title Page-->
<title>Lovely Films Production House</title>

<!-- Icons font CSS-->
<link href="css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

<!-- Font special for pages-->

<!-- Vendor CSS-->

<link href="css/select2.min.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="css/main_rg.css" rel="stylesheet" media="all">

<!--new links-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--end of new links-->
<style type="text/css">
.select2-container--default .select2-selection--multiple {
    background-color: inherit !important;
    height: 50px;
    border: none;
}
.checkbox {
    width: 20px;
    height: 20px;
    float: left;
    margin-right: 10px;
}
.error{color: red; font-style: italic; font-weight: 500;}
</style>
</head>

<body>
<!--navigation-->
<nav>
  <div class="full forposition">
    <div class="bg-orange">
      <div class="full bg-orange-color">
        <div class="logo"><a href="index"><img src="images/logo.png" alt="" /></a></div>
        <div class="mynav">
          <ul>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Videos</a></li>
            <li class="mydown"><a href="#">Sevices</a>
              <ul>
                <li><a href="#">web series</a></li>
                <li><a href="#">advertisement</a></li>
                <li><a href="#">documentary</a></li>
                <li><a href="#">productionMa</a></li>
                <li><a href="#">advertisement</a></li>
              </ul>
            </li>
            <li><a href="#">News</a></li>
            <li class="mydown"><a href="#">About</a>
              <ul>
                <li><a href="#">our vision</a></li>
              </ul>
            </li>
            <li><a href="#">Investers</a></li>
            <li><a href="register">Register</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-2 hidden-xs main-pad0 float-right mt-4">
          <div class="head-social dh-list pull-right mt15 m24-mob fl-main">
            <ul class="padding0 margin0">
              <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <!-- <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>-->
              <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
         
            </ul>
          </div>
        </div>
      </div>
      <div class="full bg-curve"></div>
    </div>
  </div>
</nav>
<!--end of navigation-->
<div class="page-wrapper bg-gra-03 p-b-50 bg-rg" style="padding-top:100px;">
  <div class="wrapper wrapper--w790">
    <div class="card card-5" style="margin-top:100px; height: 100px;">
     <h5 class="text-center" style="margin-top:35px; color:#348724;"><?php echo $errorMsg;?></h5>
    </div>
  </div>
</div>
<!--footer section-->
<section>
<!--  <div class="full mb-5">
    <h1 class="text-uppercase text-center mt-my">Contact us</h1>
  </div>
  <div class="full">
    <div class="map-responsive">
      <div class="row"></div>
      <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>-->
  <div class="full padd-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="contact-info text-center">
            <div class="info-icon display-inline"><img src="images/info.png" alt="" class="doneLoading"></div>
            <div class="info-text display-inline">
              <h2 class="color-primary font-karla font-bold">INFO</h2>
            </div>
            <div class="descp">
              <p>Lorem Ipsum is simply dummy text<br>
                on <a href="#">lorem@ipsum.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="contact-info text-center">
            <div class="info-icon display-inline"><img src="images/creativity.png" alt="" class="doneLoading"></div>
            <div class="info-text display-inline">
              <h2 class="color-primary font-karla font-bold">CREATIVE</h2>
            </div>
            <div class="descp">
              <p>Lorem Ipsum is simply dummy text<br>
                on <a href="#">lorem@ipsum.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt20">
        <div class="col-md-6 col-sm-12">
          <div class="contact-info text-center">
            <div class="info-icon display-inline"><img src="images/marketing.png" alt="" class="doneLoading"></div>
            <div class="info-text display-inline">
              <h2 class="color-primary font-karla font-bold">MARKETING</h2>
            </div>
            <div class="descp">
              <p>Lorem Ipsum is simply dummy text<br>
                on <a href="#">lorem@ipsum.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="contact-info text-center">
            <div class="info-icon display-inline"><img src="images/syndication.png" alt="" class="doneLoading"></div>
            <div class="info-text display-inline">
              <h2 class="color-primary font-karla font-bold">CAREER</h2>
            </div>
            <div class="descp">
              <p>Lorem Ipsum is simply dummy text<br>
                on <a href="#">lorem@ipsum.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="full bg-footer">
    <footer class="ng-scope">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="footer-data dh-list mobile-center">
              <ul class="padding0 margin0">
               <!-- <li class="pointer" ui-sref="privacy-policy" href="/privacy-policy">Privacy Policy</li>
                <li class="pointer" ui-sref="disclaimer" href="/disclaimer">Disclaimer</li>-->
              </ul>
            </div>
            <div class="footer-social dh-list mt15 mobile-center pd10">
              <ul class="padding0 margin0">
                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
               <!-- <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>-->
                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
               <!-- <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->
               <!-- <li><a href="#" target="_blank"><img src="frontend/img/daily.png" alt="" class="mt-7 daily-image doneLoading"> <img src="frontend/img/daily_hover.png" alt="" class="mt-7 hover-daily doneLoading"></a></li>-->
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="float-right copy mt15 mobile-center pd18">
              <p class="ng-binding">Copyright © 20XY Lovely Fulms Pvt. Ltd.</p>
             <!-- <p class="float-right mobile-center">Designed by <a href="#" target="_blank">TING</a></p>-->
            </div>
          </div>
        </div>
      </div>
    </footer>
   
  </div>
</section>


<script src="jquery/jquery.min.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/global.js"></script>
<script src="js/function.js"></script>
<script src="js/jquery.validate.min.js"></script>
</body>
</html>
