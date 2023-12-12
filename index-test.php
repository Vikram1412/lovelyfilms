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
    <!--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner" role="listbox"> 
    <!-- Slide One - Set the background image for this slide in the line below -->
    <!-- <div class="carousel-item" style="background-image:url(images/baneerpsd.gif)">
      <div class="carousel-caption d-none d-md-block"> 
      </div>
    </div> -->
    <!-- Slide Two - Set the background image for this slide in the line below -->
    
    <!--<div class="carousel-item active" style="background-image: url(images/slide1.png)">
      <div class="carousel-caption d-none d-md-block"> 
      </div>
    </div>

    <div class="carousel-item" style="background-image: url(images/banner2.png)">
      <div class="carousel-caption d-none d-md-block"> 
      </div>
    </div>-->
    
    <!--<div class="carousel-item active">
        <video id="ocScreencapVideo" autoplay="autoplay" loop="loop" playsinline="playsinline" preload="metadata" data-aos="fade-up">
          <source src="images/SETTERS.mp4"
                  type="video/mp4">
        </video>
    </div>-->
    
    <div class="carousel-item active">
        <video id="ocScreencapVideo" autoplay="autoplay" loop="loop" playsinline="playsinline" preload="metadata" data-aos="fade-up">
          <source src="images/avc_Los_Angeles.mp4"
                  type="video/mp4">
        </video>
    </div>
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>

<!--movies section-->
<section>
  <div class="full bg-white">
    <div class="mycontainer">
      <div class="col-xs-12 float-left">
        <nav class="tabnav">
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Completed</a> <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">UP Coming</a> </div>
        </nav>
        <!-- <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active float-left" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="full mt-5">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/m1.png" alt="" title="" /></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /> </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /> </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /> </div>
            </div>
          </div>
          <div class="tab-pane fade float-left" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="full mt-5">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /> </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /> </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/Na.png" alt="" title="" /> </div>
            </div>
          </div>
        </div> -->

        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active float-left" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="full mt-5">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b><a href="video-link" target="_blank"> 1. The Court Kachahri</b></a></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b><a href="https://www.imdb.com/title/tt9239772/" target="_blank"> 2. Setters</b></a></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
            </div>
            <!--<div class="full mt-5">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/m1.png" alt="" title="" /></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/m3.png" alt="" title="" /> </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/m5.png" alt="" title="" /> </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"> <img src="images/m6.jpg" alt="" title="" /> </div>
            </div>-->
          </div>
          <div class="tab-pane fade float-left" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="full mt-5">
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>1. Pahchan- The Genetic Code</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>2. Notebandi-Demonetisation</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>3. Mukhveer (The Informer)</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>4. The MiddleMan</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>5. Naukri</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>6. Setters 2</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>7. Belchhi</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>8. Cinderella</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3"><b>9. Postmortem</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
              
              <!--<div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">Tentative Title of Hindi Feature <b>Films "The Court Kachahri"</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">Tentative Title of Hindi Feature <b>Films "The Genetic Code"</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">Tentative Title of Hindi Feature <b>Films "Comming Soon.."</b></div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-12 float-left forimg mb-3">Tentative Title of Hindi Feature <b>Films "Comming Soon.."</b></div>-->
            </div>
          </div>
        </div>

        
      </div>
      <div class="full text-center mt-5 mb-3"> <a href="movies">
        <button type="button" class="btn btn-danger btn-danger1 text-uppercase text-center">More Movies</button>
        </a> </div>
    </div>
  </div>
</section>
<!--end of movies section--> 
<!--video section-->
<section>
  <div class="full bg-primary mt-5">
    <div class="mycontainer">
      <div class="full mt-5">
        <h1 class="text-uppercase text-center my-clr">video</h1>
      </div>
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
      <div class="full text-center mt-5 mb-5"> <a href="videos">
        <button type="button" class="btn btn-danger btn-danger1 text-uppercase text-center">More video</button>
        </a> </div>
    </div>
  </div>
</section>
<!--end of video section--> 
<!--news section-->
<section>
  <div class="full bg-white">
    <div class="mycontainer">
      <div class="full">
        <h1 class="text-uppercase text-center mt-my">Top News</h1>
      </div>
      <div class="full mt-5"> 
        <section id="demos">
          <div class="owl-carousel owl-theme">
              
        <?php
        $query = mysqli_query($conn, "SELECT id, title, description, link, photo FROM tbl_news WHERE 1");
        while($res = mysqli_fetch_array($query)){
        ?>
        
        <!--<div class="item">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 card-personal mb-12 float-left">  
          <div class="view overlay"><a href="news"> 
          <img src="adminmain/uploads/news/<?php  if($res['photo']) { echo $res['photo']; } else { echo 'Na.png'; }?>" alt="" title="" style="height: 166px; width: 295px;">
            <div class="mask rgba-white-slight"></div>
            </a> </div>
          <div class="card-body card " style="height:210px;">
            <h5 style="font-size: 17px;"><?php echo substr(stripslashes($res['title']), 0, 100); ?></h5>
            <p class="card-text"><a href="<?php echo stripslashes($res['link']); ?>"><?php echo substr(stripslashes($res['description']), 0, 125); ?></a></p>
          </div>
        </div>
        </div>-->
        
        
        <div class="item">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 card-personal mb-12 float-left"> 
            <div class="view overlay"><a href="news"> <img src="adminmain/uploads/news/<?php  if($res['photo']) { echo $res['photo']; } else { echo 'Na.png'; }?>" alt="" title="" style="height: 166px; width: 288px;">
              <div class="mask rgba-white-slight"></div>
              </a> </div>          
            <div class="card-body card " style="height:210px;">
              <h5 style="font-size: 17px;"><a href="<?php echo stripslashes($res['link']); ?>"><?php echo substr(stripslashes($res['title']), 0, 200); ?></a></h5>
              <p class="card-text"><?php echo substr(stripslashes($res['description']), 0, 125); ?>...</p>
            </div>          
          </div>
        </div>

        
        <?php }?>
        </div>
        </section>
        
      </div>
      <div class="full text-center mt-5 mb-5"> <a href="news">
        <button type="button" class="btn btn-danger text-uppercase text-center">More news</button>
        </a> </div>
    </div>
  </div>
</section>
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
