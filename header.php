<?php
include_once("includes/config.php");
?>
<style>
.mydown > a:after {
    content: ' \25BF';
    color:#fff;
   font-weight:600;
}

.submenus{

          right: 224px !important;

}


@media (max-width:786px ){

  .submenus{right:0px !important;}
}

.animation{

        animation: blinks 1000ms infinite;

}

@keyframes blinks {
    
        0%,20%{ color: #ff0000;text-shadow : 7px 0px 15px #ff0000; }
        35%{color: #007bff;text-shadow : 7px 0px 15px #007bff;}
        80%{color: yellow; text-shadow : 7px 0px 15px yellow;}
        100%{color: orange; text-shadow : 7px 0px 15px orange;}

        
}


.underline{
      border-bottom: 4px solid #f37021;
    } 

    .carousel-control-prev{
            left: -4% !important;

    }

    .carousel-control-next{
      right: -4% !important;
    }

.img-thumbnail{
            opacity:0.8;transform:scale(1);

            cursor: pointer;
            -webkit-cursor: pointer;
            -ms-cursor: pointer;
            -moz-cursor: pointer;
            -o-cursor: pointer;
              }

  .img-thumbnail:hover{
    opacity:1.5;
    -o-opacity:1.5;
    -webkit-opacity:1.5;
    -ms-opacity:1.5;
    -moz-opacity:1.5;
    
    transform:scale(1.01);
    -webkit-transform:scale(1.01);
    -moz-transform:scale(1.01);
    -ms-transform:scale(1.01);
    -o-transform:scale(1.01);

    transition:all 500ms ease-out;
    -webkit-transform:scale(1.01);
    -ms-transform:scale(1.01);
    -moz-transform:scale(1.01);
    -o-transform:scale(1.01);

  }

  .my-clr{
    background-image:url('images/bg-head.jpg');
    background-image: url(images/bg-head.jpg);
    border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    -o-border-radius: 10px 10px 0 0;
    -ms-border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
  
  }


  .grays{color:#b9afafbd !important ;}
  
</style>
<nav>
  <div class="full forposition">
    <div class="bg-orange">
      <div class="full bg-orange-color">
        <div class="logo"><a href="index"><img src="images/logo.png" alt="" /></a></div>
	 <div class="hidondesk float-right mt-25 mr-3">
              <div id="nav-icon2"> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> </div>
            </div>
        <div class="mynav">
			<div class="full" id="menutogg" style="width:100%">  
        <ul >
            <li><a href="index">Home</a></li>
            <li><a href="movies">Movies</a></li>
            <li><a href="videos">Videos</a></li>
            <li class="mydown"><a href="#">Sevices</a>
              <ul class="submenuss">
                <li><a href="marketing">Marketing & Distribution</a></li>
              </ul>
            </li>
            <!-- <li><a href="news">News</a></li>
            <li><a href="investor">Investors</a></li> -->

           <li class="mydown"  ><a href="#">About</a>
              <ul  class="submenus" style="">
                <li><a href="who-we-are">Who we are ?</a></li>
                <li><a href="team">Our Leadership Team </a></li>
              </ul>
            </li> 

             <!--<li><a href="#">Making</a></li>-->
    
             <!--<li class="mydown"><a href="#">Making</a>
              <ul style="width: 203px; float: left;background: #000; position: absolute;top: 55px;right: 22px; display: none;">
                <li><a href="#">Setters</a></li>
                <li><a href="#">The Court Kachahri</a></li>
                <li><a href="#">Pahchan- The Genetic Code</a></li>
              </ul>
            </li>-->
            
         <!-- <li class="mydown"><a href="#">Making</a>
              <ul style="width: 203px; float: left;background: #000; position: absolute;top: 55px;right: 22px; display: none;">
                <li><a href="#">Pahchan- The Genetic Code</a></li>
                <li><a href="#">Notebandi-Demonetisation</a></li>
                <li><a href="#">Setters 2</a></li>
                <li><a href="#">The Court Kachahri</a></li>
                <li><a href="#">Setters</a></li>
              </ul>
            </li> --> 
            
             <!-- <li><a href="#">Press Release</a></li>
            <li><a href="register">Careers</a></li> -->
            
           <!--  <li><a href="contact">Contact Us</a></li> -->

            <li><a href="new-upcoming-chandrayaan" > Upcoming Film <span class="animation">Chandrayaan</span></a></li>
          </ul>


			<div class="full hidondesk head-social">   <ul class="padding0 margin0">
              <li><a href="https://www.facebook.com/lovelyfilmsprod/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/LovelyFilmsProd" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <!-- <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>-->
              <li><a href="https://www.youtube.com/channel/UCbATYHl-6-KM9jOSa0fzEPA" target="_blank"><i class="fa fa-youtube"></i></a></li>
              <li><a href="https://www.instagram.com/lovelyfilms_prod/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul></div>
			  </div>
        </div>
		  
        <div class="col-md-3 col-sm-3 hidden-xs main-pad0 float-right mt-25-hide" style="max-width: 11%;">
          <div class="head-social dh-list pull-right mt15 m24-mob fl-main">
            <ul class="padding0 margin0 hideonmob">
     <!--<li><a href="register" style="font-size: 19px;
        margin-right: 40px;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;">Audition Open</a></li>-->
              <li><a href="https://www.facebook.com/lovelyfilmsprod/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/LovelyFilmsProd" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <!-- <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>-->
              <li><a href="https://www.youtube.com/channel/UCbATYHl-6-KM9jOSa0fzEPA" target="_blank"><i class="fa fa-youtube"></i></a></li>
               <li><a href="https://www.instagram.com/lovelyfilms_prod" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
           
          </div>
        </div>
      </div>
      <div class="full bg-curve"></div>
    </div>
  </div>
</nav>
