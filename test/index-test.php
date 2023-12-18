<?php
session_start();
require_once 'includes/config.php';
?>
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

<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/owlcarousel/owl.carousel.js"></script>
<!-- <link rel="stylesheet" href="assets/css/docs.theme.min.css">
 --><link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">

</head>

<body>
<!-- Navigation -->
<?php include('header.php');?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="images/chandrayaan/chandryaan-upcoming-12.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="images\chandrayaan\chandryaan-upcoming-11.jpg" alt="Third slide">
    </div> 


<div class="carousel-item">
      <img class="d-block w-100" src="images/chandrayaan/court-kachahari.jpg" alt="Third slide">
    </div> 

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="padding:15px;">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="padding:15px;"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true" style="padding:15px;"></span>
    <span class="sr-only">Next</span>
    </a>
</div>


<!-- /slider section -->
<!-- start movie section -->



 <section>
   <div class="full bg-dark">
     <div class="mycontainer">
           <!-- <div class="full mt-5">
             <h1 class="text-uppercase my-clr underline">Upcoming Film Chandrayaan</h1>
            </div> -->
           <div class="row">

           <div class="col-md-12 col-sm-12 mt-5">
            <!-- <img src="images\baneerpsd.gif" class="img-fluid" alt="Responsive image"> -->
            <img src="./images/chandrayaan/chandryaan-upcoming.jpg"  class="img-thumbnail" alt="Responsive image">
            </div>
            <div class="col-md-12 col-sm-12 mt-5"></div>

      </div>
    </div>
  </section>
<!-- end movie section -->


<!-- start Privies movie  -->
<!-- <section>
   <div class="full bg-dark">
     <div class="mycontainer">
          <div class="full mt-5">
            <h1 class="text-uppercase my-clr underline " >Other Movies</h1>
          </div>
          
            <div class="row">  row under first item -->

<!--             <div class="col"> 
            <img class="img-thumbnail" src="images\complete-films\setter-1.png" alt="First slide">
            </div>

            <div class="col"> 
            <img class="img-thumbnail" src="images\courth-kachehari\court-3.jpg" alt="First slide">
            </div>

          </div>
      </div>
    </div>
</section> --> 

<!-- end  privious movie -->

<!-- <section>
   <div class="full bg-dark">
     <div class="mycontainer">




     <h1 class="text-uppercase my-clr underline">****************************************************************************</h1>
          </div>

      </div>
    </div>
</section> -->




<section>
  <div class="full" style="backgroud-color:#000; -webkit-backgroud-color:#000;">
    <div class="mycontainer">
      <div class="full">
      <h1 class="text-uppercase text-center my-clr">Lovely films Pvt Ltd</h1>
      </div>
      <div class="full"> 
        
      
      <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol> -->


       <!--   <div class="carousel-inner">
       <div class="carousel-item active">
      <img class="d-block w-100" src="./images/chandrayaan/chandryaan-upcoming-11.jpg" alt="First slide">
       </div>

       <div class="carousel-item">
      <img class="d-block w-100" src="images/banner/chandrayaan.jpg" alt="Third slide">
      </div> 

      <div class="carousel-item">
      <img class="d-block w-100" src="images/chandrayaan/courtkachahary.jpg" alt="Third slide">
      </div> 

        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="padding:15px;">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="padding:15px;"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="padding:15px;"></span>
         <span class="sr-only">Next</span>
        </a>
        </div> -->

  
        <img class="d-block w-100" src="./images/gif/productions-steps.gif" alt="First slide">
      </div>
    </div>
  </div>
</section>

<!--end of video section--> 
<!--news section-->
<!--- <section>
  <div class="full bg-white">
    <div class="mycontainer">
      <div class="full">
        <h1 class="text-uppercase text-center mt-my">Top News</h1>
      </div>
      <div class="full mt-5"> 
        <section id="demos">
          <div class="owl-carousel owl-theme">
              
        <?php
      /*   $query = mysqli_query($conn, "SELECT id, title, description, link, photo FROM tbl_news WHERE 1");
        while($res = mysqli_fetch_array($query)){ */
        ?>
        
       <div class="item">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 card-personal mb-12 float-left">  
          <div class="view overlay"><a href="news"> 
          <img src="adminmain/uploads/news/<?php  if($res['photo']) { echo $res['photo']; } else { echo 'Na.png'; }?>" alt="" title="" style="height: 166px; width: 295px;">
            <div class="mask rgba-white-slight"></div>
            </a> </div>
          <div class="card-body card " style="height:210px;">
            <h5 style="font-size: 17px;"><?php /* echo substr(stripslashes($res['title']), 0, 100); */ ?></h5>
            <p class="card-text"><a href="<?php /* echo stripslashes($res['link']); ?>"><?php echo substr(stripslashes($res['description']), 0, 125); */ ?></a></p>
          </div>
        </div>
        </div>
        
        
        <div class="item">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 card-personal mb-12 float-left"> 
            <div class="view overlay"><a href="news"> <img src="adminmain/uploads/news/<?php/*   if($res['photo']) { echo $res['photo']; } else { echo 'Na.png'; } */?>" alt="" title="" style="height: 166px; width: 288px;">
              <div class="mask rgba-white-slight"></div>
              </a> </div>          
            <div class="card-body card " style="height:210px;">
              <h5 style="font-size: 17px;"><a href="<?php /* echo stripslashes($res['link']); ?>"><?php echo substr(stripslashes($res['title']), 0, 200); ?></a></h5>
              <p class="card-text"><?php echo substr(stripslashes($res['description']), 0, 125); */ ?>...</p>
            </div>          
          </div>
        </div>

        
        <?php /* } */?>
        </div>
        </section> -->
        
   <!--    </div>
      <div class="full text-center mt-5 mb-5"> <a href="news">
        <button type="button" class="btn btn-danger text-uppercase text-center">More news</button>
        </a> </div>
    </div>
  </div> -->
<!-- </section> -->
<!--end of news section--> 
<!--footer section-->
<?php include('footer.php');?>
<!--end of footer section--> 

<script style>

var autoPlayVideo = document.getElementById("ocScreencapVideo");
  autoPlayVideo.oncanplaythrough = function() {
      autoPlayVideo.muted = true;
      autoPlayVideo.play();
      autoPlayVideo.pause();
      autoPlayVideo.play();
  }

$(document).ready(function(){
  $("video").click(function() {
    autoPlayVideo.muted = false;
    if (this.paused) {
      this.play();
    } else {
      this.pause();
    }
  });   
})

$(document).ready(function() {
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    margin: 10,
    nav: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  })
})


$(document).ready(function(){
  $('.owl-nav').removeClass('disabled');
  $(".owl-next").click(function(){
    $('.owl-nav').removeClass('disabled');
  });

  $(".owl-prev").click(function() {
    $('.owl-nav').removeClass('disabled');
  });  
})

</script>




</body>
</html>
