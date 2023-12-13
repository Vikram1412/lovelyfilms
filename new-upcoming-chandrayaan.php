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
</head>

<body>
<!-- Navigation -->
<?php 

include('header.php');

?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/tab/chandrayan-11.png" alt="First slide" style="height:20%;">
    </div>

    </div>
   
</div>

<!--video section-->
<section>
  <div class="full " style="backgrond-color:#000; -webkit-background-color:#000; margin-top:100px;">
    <div class="mycontainer">
      <div class="full pt-2 p-2">
        <h1 class="text-uppercase text-center my-clr p-2">Chandrayan</h1>


      </div>
      <div class="row mt-5" >


        <div class="col-md-4"> 

        <img src="images/chandrayaan/poster-2.png" alt="Chandrayan" style="width:100%;">
        </div>

        <div class="col-md-4"> 

        <img src="images/chandrayaan/poster-1.png" alt="Chandrayan" style="width:100%;">
        </div>

        <div class="col-md-4"> 

        <img src="images/chandrayaan/poster-3.png" alt="Chandrayan" style="width:100%;">
        </div>

         <br/><br/>
          &nbsp;&nbsp;
        <div class="col-md-12 "> 
        <iframe width="100%" height="450" src="https://www.youtube.com/embed/1tBTi0dfv0E?si=W4bLiY4mcwp4ZRZf&amp;controls=0&amp;start=20" title="YouTube video player"
           frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
		 
    </div>
    </div>
  </div>
</section>
<!--end of video section--> 

<!--footer section-->
<?php include('footer.php');?>
<!--end of footer section--> 

</body>
</html>
