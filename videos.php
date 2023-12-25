<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lovely Films</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<?php include('favicon.php'); ?>
</head>

<body oncontextmenu="return false">
<!-- Navigation -->
<?php 

include('header.php');

// this variable initiate for every pages title
$page_title ="videos";
include('second-header.php');
?>

<section>
  <div class="full mt-5" style="backgroud-color:#000; -webkit-backgroud-color:#000;">
    <div class="mycontainer">
      <!-- <div class="full mt-5">
        <h1 class="text-uppercase text-center my-clr">videos</h1>
      </div> -->
      <div class="full mt-5">
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q8rIKgOtrOs" allowfullscreen></iframe>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qlmClaFoK_E" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VoG19ofl614" allowfullscreen></iframe>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Het6YIi_9H0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!-- <div class="full mt-5">
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/q8rIKgOtrOs" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qlmClaFoK_E" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VoG19ofl614" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left mb-3">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zwa3eAAW18w" allowfullscreen></iframe>
          </div>
        </div>
      </div> -->


      <div class="full text-center"> 
    <!--     <button type="button" class="btn btn-danger btn-danger1 text-uppercase text-center" onclick="window.location.href='videos'">More video</button> -->


        <img src="./images/poster/dark.jpg" alt="" style="width:100%;margin:50px 0 0 0;">
      
      
      
      </div>
    </div>
  </div>
</section>


<!--footer section-->
<?php include('footer.php');?>
<!--end of footer section--> 

</body>
</html>
