<footer class="bg-5 bg-overlay-2" style="background-color:#000; color: #fff;">
  <!-- <div class="full">
    <div class="map-responsive">
      <div class="row"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.6973920664643!2d72.83315871614319!3d19.134188853484673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7aed48afee9%3A0x94be1a282a0211be!2sLovely+Films+Production+House!5e0!3m2!1sen!2sin!4v1561360004049!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> 
    </div>
  </div> -->
				<!-- Footer Top Area Start -->
				<div class="footer-top ptb-90">
					<div class="container">
						<div class="row">
							<!-- Footer Single Item -->
							 <div class="col-lg-3 col-md-3 col-sm-12">
								<div class="footer-single" style="padding-top: 20px;">
									<h5 style="margin-left: 0px;">OVERVIEW</h5>
									<div class="stay-with-content">
										<div class="col-md-3 col-sm-3" style="padding-left: inherit;padding-right: 280px;">
                      <div class="head-social dh-list">
                        <ul class="padding0 margin0" style="width: 107px !important;">
                          <li><a href="https://www.facebook.com/lovelyfilmsprod/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="https://twitter.com/LovelyFilmsProd" target="_blank"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="https://www.youtube.com/channel/UCbATYHl-6-KM9jOSa0fzEPA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                          <li><a href="https://www.instagram.com/LovelyFilmsProd/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3" style="padding-left: inherit;padding-right: 280px;">
                      <div class="head-social dh-list">
                        <ul class="padding0 margin0" style="width: 107px !important;">
                          <li>VISITORS<br><b><?php echo $stri = (string)$count;?></b></li>
                        </ul>
                      </div>
                    </div>
									</div>
								</div>
							</div>
							<!-- Footer Single Item -->
							<!-- Footer Single Item -->
							<div class="col-lg-3 col-md-3 col-sm-12">
								<div class="footer-single" style="padding-top: 20px;">
									<h5 style="margin-left: 0px;">QUICK LINKS</h5>
									<div class="footer-menu">
										<ul>
											<li class="active"><a href="/">Home</a></li>
											<li><a href="movies">Movies</a></li>
											<li><a href="register">Careers</a></li>
											<li><a href="contact">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<!-- Footer Single Item -->
							<!-- Footer Single Item -->
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="footer-single" style="padding-top: 20px;">
									<h5 style="margin-left: 0px;">QUICK CONTACT</h5>
									<div class="footer-menu">
										<ul>
											<li>
												<p>M/s Lovely Films Pvt Ltd, 1405, Remi Commercio, opp. Yash Raj Studio, Industrial Area, Andheri (W), Mumbai, Maharashtra - 400053, India.</p>
											</li>
											<li>
												<p>Phone :  +91-22-6708 0500</p>
											</li>
											<li>
												<p>Email : info@lovelyfilms.in</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- Footer Single Item -->
						</div>
					</div>
				</div>
				<!-- Footer Top Area End -->
				<!-- Footer Bottom Area Start -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="footer-bottom">
								
								<div class="footer-left">
									<p> Copyright © 2022 LovelyFilms Pvt. Ltd.</p>
								</div>
								<!-- <div class="col-md-3 col-sm-3 hidden-xs main-pad0 float-right mt-10-hide">
                  <div class="head-social dh-list pull-right mt15 m24-mob fl-main">
                    <ul class="padding0 margin0">
                      <li><a href="https://www.facebook.com/lovelyfilmsprod/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://twitter.com/LovelyFilmsProd" target="_blank"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://www.youtube.com/channel/UCbATYHl-6-KM9jOSa0fzEPA" target="_blank"><i class="fa fa-youtube"></i></a></li>
                      <li><a href="https://www.instagram.com/LovelyFilmsProd/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Footer Bottom Area End -->
			</footer>


<script type="text/javascript">
	
/*$(document).ready(function(){
	$(".mynav ul li").hover(function(){
		$(".mydown ul").slideToggle();
	});
	
});	*/

$('.mynav ul li').hover(
  function() {
	  $('ul', this).stop().slideDown(200);
  },
	function() {
    $('ul', this).stop().slideUp(200);
  }
);
$(document).ready(function(){
	$('#nav-icon2').click(function(){
		$(this).toggleClass('open');
		$('#menutogg').slideToggle(300);
	});
	
	});
</script>

<style type="text/css">    
* {
  margin: 0;
  padding: 0;
}
video {
  width: 100%;
  height: 100%;
  position: absolute;
  object-fit: cover;
  transition: all 150ms linear;
  z-index: 10;
}

/*.container {
  width: 100%;
  height: 100vh;
  background-color: rgba(0, 0, 0, 0.5);
}*/
</style>


<style type="text/css">
				
.aboutus-video  {
  box-sizing: border-box;
  display: inline-block;
  height: 300px;
  overflow: hidden;
  width: 970px;
}
.popup-youtube {
  color: #fff;
  font-size: 60px;
  height: 70px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  z-index: 2;
  right: 0;
  text-align: center;
  top: 38%;
  transition: all 0.3s ease 0s;
  width: 70px;
}
.video-content .popup-youtube {
  top: 32%;
}
.aboutus-titel {margin-bottom: 45px;}
.aboutus-bottom-txt {margin-top: 30px;}
.person-area {
  display: inline-block;
  margin: 8px auto 0;
  text-align: center;
  width: 17%;
}
.person-img {float: left;}
.person-txt {
  display: block;
  margin-top: 12px;
  overflow: hidden;
}
.aboutus-bottom-txt > p {
  font-size: 16px;
  line-height: 30px;
  margin: auto auto 20px;
  width: 65%;
}
.person-txt h6 {
  font-weight: 500;
  margin: 0 0 5px;
}
.person-txt > span {
  color: #666666;
  font-size: 12px;
}
/* About Us Actor */
.about-actor-left > h3 {
  font-size: 26px;
  font-weight: 500;
}
.about-actor-left > h3 span {
  color: #e2a750;
}
.button-horizental > a {
  color: #ed008c;
  font-size: 14px;
  font-weight: 500;
  margin-top: 15px;
  transition: all 0.4s ease 0s;
}
.button-horizental > a:hover {
  color: #e2a750;
}
.button-horizental a{
  display: inline-block;
  position: relative;
}
.button-horizental a::after {
  background: #e2a750 none repeat scroll 0 0;
  bottom: 25px;
  content: "";
  height: 35px;
  left: 0;
  position: absolute;
  width: 1px;
}
/* ============= 2. Project Count Area ============= */
.project-count span {
  color: #ed008c555;
  display: inline-block;
  font-size: 30px;
  font-weight: 400;
  margin-bottom: 22px;
  padding-bottom: 20px;
  position: relative;
}
.project-count span::after {
  background: #ed008c555 none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  width: 50px;
}
.project-count h3 {
  font-size: 20px;
  font-weight: 500;
  margin: 0;
}

/* ============= 3. Section Titel Css ============= */
.section-titel h2 {
  display: block;
  margin-bottom: 14px;
  position: relative;
}
.section-titel.style-3 h2 span {color: #e2a750;}
.section-titel {
  margin-bottom: 40px;
  margin-right: 100px;
}
.section-titel.style-3 {margin-right: 0;}
.section-titel h2::after {
  border-bottom: 2px dashed #e2a750;
  bottom: 10px;
  content: "";
  height: 70px;
  position: absolute;
  right: -100px;
  width: 70px;
}
.section-titel.style-3 h2::after {display: none;}
.section-titel p {font-size: 16px;}
.section-titel.two {margin-left: 100px;}
.section-titel.two h2::after {left: -102px;}
.section-titel.two h2,.section-titel.two p {color: #fff;}
.ourteam-area .section-titel.two h2,.ourteam-area .section-titel.two p {color: #ed008c555;}

/* ============= 4. Trailer Area ============= */
.trailer-single {box-shadow: 0 1px 1px #ddd;margin-bottom: 2px;}
.trailer-titel h5 {
  background: #f6f6f6 none repeat scroll 0 0;
  font-weight: 500;
  margin: 0;
  padding: 20px;
  text-transform:uppercase;
}
.trailer-titel span {
  float: right;
  font-family: roboto;
  font-size: 14px;
  font-weight: normal;
}
.trailer-video  {
  box-sizing: border-box;
  display: inline-block;
  height: 100%;
  overflow: hidden;
  width: 100%;
}
.trailer-img .popup-youtube {
  color: #fff;
  font-size: 45px;
  height: 70px;
  left: 0;
  line-height: 70px;
  margin: 0 auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: 41%;
  transition: all 0.3s ease 0s;
  width: 70px;
  z-index: 99;
  opacity:0;
  visibility:hidden;
}
.trailer-single:hover .trailer-img .popup-youtube{opacity:1;visibility:visible;}
.trailer-img {
  display: block;
  position: relative;
}
.trailer-img::after {
  background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  opacity:0;
  visibility:hidden;
  transition:.4s;
}
.trailer-single:hover .trailer-img::after{opacity:1;visibility:visible;}
/* Trailer Video Area */
.trailer-right-area {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: #f6f6f6 none repeat scroll 0 0;
  border-color: #e2a750 currentcolor;
  border-image: none;
  border-style: solid none;
  border-width: 11px 0;
  padding: 10px 0 0;
  z-index: 99999;
}
.trailer-thumb {
  display: inline-block;
  float: left;
}
.trailer-content > h6 {
  font-size: 14px;
  font-weight: 500;
  margin-bottom: 4px;
}
.trailer-content span {
  color: #777;
  font-size: 14px;
  font-weight: 400;
  line-height: 30px;
  padding-right: 20px;
}
.trailer-content span:last-child {
  padding-right: 0;
}
.trailer-content {
  overflow: hidden;
  padding: 15px;
}
.traier-nav-thumb-area {
  padding-left: 30px;
}
.trailer-thumb-single {
  display: block;
  overflow: hidden;
}
.trailer-right-area .slick-arrow i{
  background: transparent none repeat scroll 0 0;
  border: 1px solid #555;
  border-radius: 0;
  color: #555555;
  cursor: pointer;
  display: inline-block;
  font-size: 22px;
  height: 35px;
  line-height: 32px;
  padding: 0;
  text-align: center;
  transition: all 0.4s ease 0s;
  width: 35px;
transform: rotate(90deg);
}
.trailer-right-area .slick-arrow i:hover{
  color: #fff;
  border-color: #e2a750;
  background: #e2a750;
}
.trailer-right-area .slick-arrow {
  left: 0;
  margin-top: 0;
  opacity: 1;
  position: absolute;
  right: auto;
  text-align: right;
  top: -87px;
  transition: all 0.4s ease 0s;
  width: 100%;
} 
.trailer-right-area .slick-prev.slick-arrow {
  left: -45px;
  z-index: 99;
}
.trailer-right-area .slick-left-thumb.slick-slide > img {
  width: 100%;
}
.trailer-left-area .slick-left-thumb {
  background: #e2a750 none repeat scroll 0 0;
  padding: 9.5px;
  position: relative;
}
.trailer-left-area .slick-left-thumb::after {
  background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
  bottom: 10px;
  content: "";
  height: 95%;
  left: 10px;
  opacity: 1;
  position: absolute;
  right: 10px;
  top: 10px;
  transition: all 0.4s ease 0s;
  visibility: visible;
  width: 96.5%;
} 
/* Owl Indicator Active */
.indicator-style .owl-theme .owl-nav {
  margin-top: 0;
  position: absolute;
  top: 42%;
  width: 100%;
  opacity:0;
  transition:.4s;
}
.home-three .testimonial-area.indicator-style .owl-theme .owl-nav {
  top: 18px;
}
.indicator-style:hover .owl-theme .owl-nav{opacity:1;}
.indicator-style .owl-theme .owl-nav [class*="owl-"] {
  background: transparent none repeat scroll 0 0;
  border-radius: 0;
  color: #555555;
  cursor: pointer;
  display: inline-block;
  font-size: 44px;
  margin: 0;
  padding: 0;
}
.indicator-style .owl-carousel .owl-nav .owl-prev {left: -50px;position: absolute;}
.indicator-style .owl-carousel .owl-nav .owl-next {right: -50px;position: absolute;}
.indicator-style .owl-theme .owl-nav [class*="owl-"]:hover,.service-area.indicator-style .owl-theme .owl-nav [class*="owl-"]:hover {
  background: transparent;
  color: #e2a750;
  text-decoration: none;
}
/* Indicator Style two */
.indicator-style-two .owl-theme .owl-nav {
  left: 0;
  margin-top: 0;
  opacity: 1;
  position: absolute;
  right: auto;
  text-align: right;
  top: -87px;
  transition: all 0.4s ease 0s;
  width: 100%;
}
.indicator-style-two .owl-theme .owl-nav [class*="owl-"] {
  background: transparent none repeat scroll 0 0;
  border: 1px solid #555;
  border-radius: 0;
  color: #555555;
  cursor: pointer;
  display: inline-block;
  font-size: 22px;
  height: 35px;
  line-height: 32px;
  margin: 0 0 0 10px;
  padding: 0;
  text-align: center;
  transition: all 0.4s ease 0s;
  width: 35px;
}
.indicator-style-two .owl-theme .owl-nav [class*="owl-"]:hover {
  background: #e2a750;
  border-color: #e2a750;
  color: #fff;
}

/* ============= 5. Service Area ============= */
.service-single {padding: 38px 25px 35px;transition:.4s;}
.service-single:hover {background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0;}
.servce-icon i {color: #cccccc;font-size: 48px;}
.service-details h4 {
  color: #fff;
  font-weight: 700;
  margin: 20px 0 18px;
  text-transform:uppercase;
}
.service-details > p {color: #cccccc;margin: 0;}
.service-area.indicator-style .owl-theme .owl-nav [class*="owl-"] {color: #fff;}
.servce-date > h5 {
  color: #ed008c;
  font-size: 18px;
  font-weight: 500;
  position: relative;
  margin-bottom: 15px;
  padding-bottom: 15px;
}
.servce-date > h5::after {
  background: #e2a750 none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 1px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 80px;
}
.style-3 .service-details h4 {
  color: #ed008c;
}
.style-3 .service-details > p {
  color: #ed008c;
}
.service-single.style-3 {
  background-attachment: scroll;
  background-clip: border-box;
  background-color: rgba(0, 0, 0, 0);
  background-image: url("img/home-actor/actor.png");
  background-origin: padding-box;
  background-position: center center;
  background-repeat: no-repeat;
  margin-bottom: 45px;
  padding: 38px 30px 35px;
  transition: all 0.4s ease 0s;
}
.service-area-actor .owl-theme .owl-dots .owl-dot span {
  backface-visibility: visible;
  background: transparent none repeat scroll 0 0;
  border: 1px solid #eab454;
  border-radius: 30px;
  display: block;
  height: 10px;
  margin: 5px 7px;
  transition: opacity 0.2s ease 0s;
  width: 10px;
}
.service-area-actor .owl-theme .owl-dots .owl-dot.active span,.service-area-actor .owl-theme .owl-dots .owl-dot:hover span {
  background: #eab454 none repeat scroll 0 0;
  border-color: #eab454;
}
.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 0;
}
/* ============= 6. Our Gallery ============= */
.grid-item {float: left;}
.grid-item  {margin-bottom: 30px;}
.gallery-menu {margin-bottom: 35px;margin-right: 100px;}
ul.gallery-menu li {
  color: #ed008c555;
  cursor: pointer;
  font-size: 14px;
  padding-left: 40px;
  text-transform: uppercase;
  transition:.3s;
  font-weight: 500;
}
ul.gallery-menu li.active,ul.gallery-menu li:hover{color:#e2a750;}
.gallery-image {
  display: block;
  position: relative;
  overflow:hidden;
}
.gallery-image::before {
  background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  bottom: -50%;
  width: 100%;
  opacity:0;
  transition:.4s;
  visibility:hidden;
}
.gallery-single:hover .gallery-image::before{opacity:1;bottom:0;visibility:visible;}
.popup-gallery,.gallery-image .popup-youtube {
  color: #fff;
  font-size: 36px;
  height: 70px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: 25%;
  transition: all 0.3s ease 0s;
  width: 70px;
  line-height: 70px;
  opacity:0;
  visibility:hidden;
}
.popup-youtube:hover{color:#e2a750;}
.gallery-single:hover .popup-gallery,.gallery-single:hover .gallery-image .popup-youtube{opacity:1;top: 38%;visibility:visible;}
.gallery-image > img {width: 100%;}
.hvr-btn {
  background: #e2a750 none repeat scroll 0 0;
  box-shadow: 0 0 1px transparent;
  color: #fff;
  display: inline-block;
  font-weight: 500;
  height: 45px;
  letter-spacing: 1px;
  line-height: 45px;
  padding: 0 32px;
  text-align: center;
  text-transform: uppercase;
  transform: perspective(1px) translateZ(0px);
  transform-origin: 0 100% 0;
  transition-duration: 0.3s;
  transition-property: transform;
  vertical-align: middle;
}
.hvr-btn:hover {
  -webkit-transform: skew(-10deg);
  transform: skew(-10deg);
  background:#000;
  color:#fff;
}
/* Gallery Style Two */
.gallery-meta {
  background: #f1f1f1 none repeat scroll 0 0;
  padding: 20px 0;
}
.gallery-meta h6 {
  font-family: Roboto;
  font-size: 14px;
  margin: 0;
}
.gallery-single.style-two:hover {
  border-bottom: 1px solid #e2a750;
}
.gallery-single.style-two .popup-gallery,.gallery-single.style-two .gallery-image .popup-youtube {
  font-size: 54px;
}
.gallery-meta > h5 {
  font-weight: 700;
}
.gallery-single.style-two:hover .popup-gallery, .gallery-single.style-two:hover .gallery-image .popup-youtube {
  opacity: 1;
  top: 42%;
  visibility: visible;
}
.container .gallery-single.style-two:hover .popup-gallery,.container .gallery-single.style-two:hover .gallery-image .popup-youtube {
  top: 36%;
}
.container .gallery-single.style-two .popup-gallery,.container .gallery-single.style-two .gallery-image .popup-youtube {
  font-size: 46px;
}
/* ============= 7. Testimonial Area ============= */
.testi-img {margin-bottom: 22px;}
.testimonial-content > h6 {
  color: #666666;
  font-size: 14px;
  font-weight: 500;
  margin: 0 0 4px;
}
.testimonial-content > span {color: #666666;font-size: 12px;}
.testi-img {margin-bottom: 18px;}
.testi-img > img {display: inline-block !important;width: auto !important;}
 .testimonial-content > p {padding: 0 200px;}
.client-feedback {
  position: relative;
  max-width: 50%;
}
.client-feedback::after {
  background: #e2a750 none repeat scroll 0 0;
  bottom: -50px;
  content: "";
  height: 35px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 1px;
}
.client-feedback > h3 {
  color: #ed008c;
  font-weight: 700;
  font-size:28px;
}
.client-feedback > h3 span{
  color: #e2a750;
}
.clientsay-content {
  flex-basis: 50%;
}
.client-img {
  margin-left: 35px;
  margin-top: -125px;
}
.clientsay-content h6 {
  font-family: "Roboto",sans-serif;
  font-size: 16px;
  font-weight: 500;
  margin-top: 35px;
}
.clientsay-area {
  position: relative;
}
.clientsay-area .owl-carousel .owl-nav {
  bottom: 10px;
  left: 22%;
  margin: 0;
  opacity: 1;
  position: absolute;
  text-align: left;
  transition: all 0.4s ease 0s;
  width: auto;
}
.clientsay-area .owl-carousel .owl-nav [class*="owl-"] {
  background: transparent none repeat scroll 0 0;
  border-radius: 0;
  color: #ed008c555;
  cursor: pointer;
  display: inline-block;
  font-size: 34px;
  margin: 0 2px;
  padding: 0;
  transition:.4s;
}
.clientsay-area .owl-carousel .owl-nav [class*="owl-"]:hover{color:#e2a750}
.clientsay-area .owl-carousel .owl-nav [class*="owl-"]::after {
  color: #ed008c555;
  content: "/";
  font-size: 20px;
  left: 35px;
  position: absolute;
  top: 10px;
}
.cr-border-bottom {
  border-bottom: 1px solid #dddddd;
}
.brand-logo {
  margin-bottom: 80px;
}
/* ============= 8. Our Team ============= */
.large-img {float: left;margin-right: 80px;}
.slick-slider {-moz-user-select: elements;}
.thumb-content {display: block;overflow: hidden;}
.teamper-titel > h5 {
  font-size: 20px;
  font-weight: 500;
  padding-bottom: 15px;
  position: relative;
}
.teamper-titel > h5::after {
  border-bottom: 1px dashed #e2a750;
  bottom: 0;
  content: "";
  height: 70px;
  position: absolute;
  right: 0;
  width: 70px;
}
.teamper-titel > span {color: #ed008c555;}
.team-social {margin-bottom: 35px;margin-top: 22px;}
.team-social ul li a {
  border: 1px solid #ed008c555;
  border-radius: 100px;
  display: block;
  font-size: 18px;
  height: 30px;
  line-height: 28px;
  margin-left: 8px;
  text-align: center;
  width: 30px;
  color:#ed008c555;
  transition:.3s;
}
.team-social ul li a:hover{color:#fff;background:#ed008c555;}
.team-area-main .slider.slider-nav.slick-initialized.slick-slider {width: 690px;}
.team-area-main .slick-arrow {
  bottom: 0;
  font-size: 30px;
  position: absolute;
  cursor:pointer;
  transition:.4s;
}
.team-area-main .slick-next.slick-arrow {
  bottom: -10px;
  left: 50%;
}
.team-area-main .slick-prev.slick-arrow {
  bottom: -10px;
  left: 50%;
  margin-left: -50px;
}
.team-area-main .slick-arrow::after {
  color: #ed008c555;
  content: "/";
  font-size: 25px;
  left: -15px;
  position: absolute;
  top: 4px;
}
.team-area-main .slick-arrow:first-child::after {display: none;} 
.team-area-main .slick-arrow i{transition:.4s;}
.team-area-main .slick-arrow i:hover {color:#e2a750;}
.team-area-main .slider-nav {
  bottom: 38px;
  display: block;
  float: left;
  overflow: hidden;
  padding-bottom: 4%;
  position: absolute;
  right: -12px;
  z-index: 9;
}
.ourteam-area {display: block;position: relative;}
.thumb-content {margin-top: 30px;}

/* ============= 9. Footer Area ============= */
.footer-single > h5 {
  color: #ffffff;
  font-weight: 500;
  margin: 0 0 25px;
  font-size: 18px;
}
.stay-with-content > p {color: #fff;margin: 0 0 20px;}
.subcribe input {
  background: transparent none repeat scroll 0 0;
  border-color: currentcolor currentcolor #fff;
  border-style: none none solid;
  border-width: 0 0 1px;
  color: #fff;
  font-size: 14px;
  height: 45px;
  padding-left: 10px;
  width: 100%;
}
.subcribe button {
  background: #fff none repeat scroll 0 0;
  border: medium none;
  color: #ed008c555;
  font-weight: 500;
  height: 40px;
  letter-spacing: 1px;
  margin-top: 15px;
  padding: 0 32px;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
}
.subcribe button:hover{background:#e2a750;color:#fff;}

/* Mail Chimp */
.mailchimp-submitting{color:#31708f}
.mailchimp-success{color:#3c763d;}
.mailchimp-error{color:#a94442;}

/* Footer Menu */
.footer-menu ul li {display: block;}
.footer-menu ul li a {
  color: #fff;
  cursor: pointer;
  display: block;
  font-size: 14px;
  font-weight: 400;
  overflow: hidden;
  padding-bottom: 15px;
  transition:.3s;
}
.footer-menu ul li a:hover {color: #e2a750;}
.footer-menu ul li:last-child a {padding-bottom: 0;}
.contact-info ul li p {color: #fff;margin: 0 0 13px;}
.contact-info ul li:last-child p{margin:0;}

/* Footer Bootom */ 
.footer-bottom {
  border-top: 1px solid #aaa;
  display: block;
  overflow: hidden;
  padding: 15px 0;
}
.footer-left {float: left;}
.footer-left > p,.footer-left > p a {
  color: #fff;
  margin: 0;
  transition:.4s;
}
.footer-left > p a:hover{color: #e2a750;}
.footer-right-social ul li a {
  border: 1px solid #fff;
  border-radius: 100px;
  color: #fff;
  display: block;
  font-size: 18px;
  height: 30px;
  line-height: 28px;
  margin-left: 8px;
  text-align: center;
  transition: all 0.3s ease 0s;
  width: 30px;
}
.footer-right-social ul li a:hover{color:#ed008c555;background:#fff;}


/* ============= 10. Home Two Css ============= */
/* Header Area *//* 
.home-two .main-menu nav ul li.active a,.home-two .main-menu nav ul li:hover a {color: #fe2d20;}
.home-two .main-menu ul li ul > li > a:hover {color: #fe2d20 !important;}
.home-two .trailer-titel h5 a:hover {color: #fe2d20;}
.home-two .slide-btn a {background: #fe2d20 none repeat scroll 0 0;}
.home-two .slide-content h2 span,.home-two .slide-content h1 span {color: #fe2d20;}
.home-two .slider-area .owl-theme .owl-dots .owl-dot.active span{background: rgba(0, 0, 0, 0) url("img/home-two/icon/dot-active.png") no-repeat scroll 0 0;}
.home-two .slider-area .owl-theme .owl-dots .owl-dot span {background: rgba(0, 0, 0, 0) url("img/home-two/icon/dot.png") no-repeat scroll 0 0;} */
/* About Us */
/* .home-two .popup-youtube:hover {
  color: #aaa;
}
.home-two .hvr-btn {background: #fe2d20 none repeat scroll 0 0;}
.home-two .hvr-btn:hover {
  -webkit-transform: skew(-10deg);
  transform: skew(-10deg);
  background:#000;
  color:#fff;
} */

.logo-img {
    display: flex;
    height: 100%;
    align-items: center;
}
/* Titel */
.home-two .section-titel.three h2,.home-two .section-titel.three p {color: #fff;}
.home-two .section-titel.dark h2,.home-two .section-titel.dark p {color: #ed008c555;}

/* Gallery */
.home-two .gallery-menu {margin-left: 115px;margin-right: 0;}
.home-two ul.gallery-menu li {padding-left: 0;padding-right: 40px;}
.home-two .popup-gallery:hover {color: #fff;}
.home-two .testimonial-content > p,.home-two .testimonial-content > h6,.home-two .testimonial-content span,.home-two .indicator-style .owl-theme .owl-nav [class*="owl-"]{
  color: #fff;
}
/* Team Area */
.home-two .large-img {
  float: right;
  margin-left: 80px;
  margin-right: 0;
}
.home-two .teamper-titel > h5::after {
  left: 0;
  right: 0;
}
.home-two .slider.slider-nav.slick-initialized.slick-slider {
  width: 690px;
}
.home-two .slider-nav {
  bottom: 36px;
  display: block;
  float: left;
  left: 15px;
  overflow: hidden;
  position: absolute;
  right: 0;
  z-index: 9;
}
.home-two .slick-slider .slick-list,.home-two .slick-slider .slick-track {transform: translate3d(0px, 0px, 0px);}
.home-two .trailer-titel h5{font-size:14px;}
/* Footer Area */
.home-two .testi-img i {color: #696969;font-size: 80px;}

/* ============= 11. Home Three Css ============= */
.home-three .project-count span,.home-three .project-count h3 {color: #fff;}
.home-three .project-count span::after {background: #fff none repeat scroll 0 0;}
.section-titel-img h2 {
  line-height: 28px;
  margin-bottom: 22px;
  padding-bottom: 25px;
  position: relative;
}
.section-titel-img h2::after {
  border-bottom: 1px dashed #e2a750;
  content: "";
  height: 100%;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  top: 0;
  width: 135px;
}
.section-titel-img h2::before {
  background: #fff none repeat scroll 0 0;
  color: #e2a750;
  content: "\ec69";
  font-family: icofont;
  font-size: 20px;
  height: 22px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  top: 40px;
  width: 25px;
  z-index: 99;
}
.home-three .section-titel-img h2::before {
  top: 38px;
}
.section-titel-img.two h2,.section-titel-img.two p{color:#fff}
.section-titel-img.two h2::before {background: #262317 none repeat scroll 0 0;}
.home-three .service-single:hover{background: rgba(226, 167, 80, 0.4) none repeat scroll 0 0;}
.home-three .service-single {margin-bottom: 42px;}
.home-three .gallery-menu {margin-bottom: 35px;margin-right: 0;}
.home-three .gallery-image::before {background: rgba(226, 167, 80, 0.8) none repeat scroll 0 0;}
.home-three .popup-gallery:hover {color: #fff;}
.home-three .testimonial-content > p,.home-three .testimonial-content > h6,.home-three .testimonial-content span{color: #fff;}
.home-three .testimonial-area.indicator-style .owl-theme .owl-nav [class*="owl-"] {color: #fff;}
.home-three .testimonial-area.indicator-style .owl-theme .owl-nav [class*="owl-"]:hover {color: #e2a750;}

/* ============= 12. Home Four Css ============= */
.home-four p {color: #fff;}
.home-four .aboutus-titel h2,.home-four .person-txt h6,.home-four .person-txt span,.home-four .project-count h3,.home-four .project-count span,.home-four .section-titel h2,.home-four ul.gallery-menu li,.home-four .testimonial-content h6,.home-four .testimonial-content span,.home-four .teamper-titel > h5,.home-four .teamper-titel > span,.home-four .slick-arrow::after,.home-four .slick-arrow i,.hmvblk .section-titel h2,.hmvblk .section-titel p,.hmvblk .indicator-style-two .owl-theme .owl-nav [class*="owl-"],.hmvblk .trailer-right-area .slick-arrow i,.home-two.default-bg .aboutus-titel h2,.home-two.default-bg .aboutus-titel p,.home-two.default-bg .aboutus-bottom-txt > p,.home-two.default-bg .person-txt h6,.home-two.default-bg .person-txt > span,.home-two.default-bg .project-count span,.home-two.default-bg .project-count span::after,.home-two.default-bg .project-count h3,.home-two.default-bg .section-titel.dark h2,.home-two.default-bg .section-titel.dark p,.home-two.default-bg ul.gallery-menu li,.home-two.default-bg .section-titel h2,.home-two.default-bg .section-titel p,.home-two.default-bg .teamper-titel > h5,.home-two.default-bg .teamper-titel > span,.home-two.default-bg .thumb-content.text-left p,.home-two.default-bg .team-area-main .slick-arrow::after,.home-two.default-bg .team-area-main .slick-arrow,.two-blck .about-actor-left > h3,.two-blck .about-actor-left p,.two-blck .section-titel h2,.two-blck .section-titel p,.two-blck .indicator-style-two .owl-theme .owl-nav [class*="owl-"],.two-blck .latestmovie-meta > h5,.two-blck .latestmovie-meta h6,.two-blck .pro-test-sngle .testimonial-content > p,.two-blck .pro-test-sngle .testimonial-content > h6,.two-blck .testimonial-content > span,.two-blck .news-content h4 a,.two-blck .pro-latest-news-area .news-content > p,.campgn-black .section-titel h2,.campgn-black .section-titel p,.campgn-black .campaign-content h5,.campgn-black .campaign-content h3,.campgn-black .campaign-content p,.campgn-black .indicator-style-two .owl-theme .owl-nav [class*="owl-"],.campgn-black .campaign-aboutus-left h3,.campgn-black .campaign-aboutus-content p,.campgn-black .campaign-aboutus-icon-list-items .icon-list-item .icon-list-text,.campgn-black .aboutus-text-editor p,.campgn-black .news-content h4 a,.campgn-black .news-content .news-meta span,.campgn-black .news-content .news-meta span a,.campgn-black .campaign-count-title h3,.campgn-black .project-count-camp h3 {color:#fff;}
.home-four .project-count span::after {background: #fff none repeat scroll 0 0;}
.home-four .trailer-titel h5 {background: #030c16 none repeat scroll 0 0;color: #fff;}
.home-four .trailer-single {box-shadow: none;}
.home-four .indicator-style .owl-theme .owl-nav [class*="owl-"] {color: #fff;}
.home-four .indicator-style .owl-theme .owl-nav [class*="owl-"]:hover {color: #e2a750;}
.home-four .trailer-img .popup-youtube:hover{color: #e2a750;}
.home-four ul.gallery-menu li.active,.home-four ul.gallery-menu li:hover {color: #e2a750;}
.home-four .section-titel.two h2, .home-four .section-titel.two p {color: #fff;}
.home-four .team-social ul li a {border: 1px solid #fff;color: #fff;}
.home-four .team-social ul li a:hover {background:#fff;color:#ed008c;}
.home-four .slick-arrow i:hover {color:#e2a750;}
.two-blck .latestmovie-meta{border-bottom:1px solid #fff;}

/* Actor Black Page */
.actor-black .button-horizental > a ,.actor-black .servce-date > h5,.actor-black .style-3 .service-details h4,
.actor-black .style-3 .service-details > p,.actor-black .client-feedback > h3, 
.actor-black .clientsay-area .owl-carousel .owl-nav [class*="owl-"]::after,
.actor-black .clientsay-area .owl-carousel .owl-nav [class*="owl-"],.actor-black .news-content h4 a,
.actor-black .news-content .news-meta span,.actor-black .news-content .news-meta span a
{
  color: #fff;
}
.actor-black .section-titel-img h2::before {
  background: #151515 none repeat scroll 0 0;
}
.actor-black .service-single.style-3 {
  background-attachment: scroll;
  background-clip: border-box;
  background-color: rgba(0, 0, 0, 0);
  background-image: url("img/home-actor/actor-2.png");
  background-origin: padding-box;
  background-position: center center;
  background-repeat: no-repeat;
}

/* Home Production */
.pro-mre-btn > a {
  border: 1px solid #fff;
  color: #fff;
  display: inline-block;
  font-family: "Orbitron",sans-serif;
  font-size: 14px;
  font-weight: 700;
  padding: 10px 30px;
}
.sticky .pro-mre-btn {
  margin-top: 12px;
}
.pro-mre-btn > a:hover{background:#e2a750;color:#fff;border-color:#e2a750;}
.slider-area.actor.production .slide-content h2 {
  text-shadow: none;
}
.slider-social-production {
  bottom: -410%;
  position: absolute;
  right: 120px;
}
.pro-slide-pop {
  bottom: -330%;
  left: 150px;
  position: absolute;
}
.slider-social-production li a {
  color: #fff;
  font-size: 14px;
  margin-right: 30px;
}
.slider-social-production li a:hover{color:#e2a750;}
.production .owl-theme .owl-nav [class*="owl-"] {
  background: transparent none repeat scroll 0 0;
  border-radius: 100%;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  left: 0;
  opacity: 0;
  position: absolute;
  text-align: center;
  top: 48%;
  transition: all 0.4s ease-in-out 0s;
  visibility: hidden;
  z-index: 3;
}
.production .owl-carousel .owl-nav .owl-next {
  left: auto;
  right: 12%;
  transform: translate(100px);
  background-attachment: scroll;
  background-clip: border-box;
  background-color: rgba(0, 0, 0, 0);
  background-image: url("img/home-pro/next-1.png");
  background-origin: padding-box;
  background-position: center center;
  background-repeat: no-repeat;
  width: 100px;
}
.production .owl-carousel .owl-nav .owl-next:hover {background-image: url("img/home-pro/next-2.png");}
.production .owl-carousel .owl-nav .owl-prev {
  background-attachment: scroll;
  background-clip: border-box;
  background-color: rgba(0, 0, 0, 0);
  background-image: url("img/home-pro/prev-1.png");
  background-origin: padding-box;
  background-position: center center;
  background-repeat: no-repeat;
  left: 12%;
  right: auto;
  transform: translate(-100px);
  width: 100px;
}
.production .owl-carousel .owl-nav .owl-prev:hover {background-image: url("img/home-pro/prev-2.png");}
.production:hover .owl-theme .owl-nav [class*="owl-"]{opacity:1;visibility:visible;}
.production .owl-theme .owl-nav [class*="owl-"] i {
  font-size: 42px;
}
.production .owl-theme .owl-nav [class*="owl-"] span {
  color: #e2a750;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1px;
  opacity: 0;
  position: absolute;
  top: -5px;
  transition: all 0.4s ease 0s;
  visibility: hidden;
}
.production .owl-theme .owl-nav [class*="owl-"]:hover{color: #e2a750;}
.production .owl-theme .owl-nav [class*="owl-"]:hover span{opacity:1;visibility:visible;}
.production .owl-carousel .owl-nav .owl-prev span {
  right: -30px;
  opacity:0;
  visibility:hidden;
}
.production .owl-carousel .owl-nav .owl-next span {
  left: -30px;
}
.production .owl-theme .owl-nav {
  margin-top: 0;
}
.button-rectangle > a {
  border: 1px solid #e2a750;
  color: #e2a750;
  display: inline-block;
  font-family: "Orbitron",sans-serif;
  font-size: 14px;
  font-weight: 700;
  padding: 10px 30px;
  transition:.4s;
}
.button-rectangle > a:hover {
  border-color: #e2a750;
  color: #fff;
  background:#e2a750;
}
.home-production .about-actor-left > h3 {
  font-size: 36px;
}
.latestmovie-image {
  display: block;
  overflow: hidden;
  position: relative;
}
.latestmovie-image::before {
  background: rgba(0, 0, 0, 0.4) none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 100%;
  left: 0;
  opacity: 0;
  position: absolute;
  transform: scale(0);
  transition: all 0.4s ease 0s;
  visibility: hidden;
  width: 100%;
  z-index: 9;
}
.latestmovie-single:hover .latestmovie-image::before {
  opacity: 1;
  transform: scale(1);
  visibility: visible;
}
.latestmovie-meta {
  border-bottom: 1px solid #333;
  padding: 20px 0;
}
.latestmovie-single:hover .latestmovie-meta{
  border-bottom: 1px solid #e2a750;
}
.latestmovie-meta > h5 {
  font-weight: 700;
}
.latestmovie-meta h6 {
  font-family: Roboto;
  font-size: 12px;
  margin: 0;
}
.latestmovie-single .popup-youtube {
  color: #fff;
  font-size: 36px;
  height: 70px;
  left: 0;
  line-height: 70px;
  margin: 0 auto;
  opacity: 0;
  position: absolute;
  right: 0;
  text-align: center;
  top: 42%;
  transition: all 0.3s ease 0s;
  visibility: hidden;
  width: 70px;
  z-index: 99;
  transform:scale(0);
}
.latestmovie-single:hover .popup-youtube {
  opacity: 1;
  visibility: visible;
  transform:scale(1);
}
.latestmovie-single .popup-youtube > img {
  margin: 0 auto;
  width: auto;
  z-index:999;
}
.latestmovie-img-single {
  display: block;
  position: relative;
}
.latestmovie-img-single::after {
  border: 15px solid rgba(255, 255, 255, 0.5);
  content: "";
  height: 100%;
  left: 0;
  opacity: 0.4;
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
}
.pro-test-sngle .testi-img {
  margin-bottom: 35px;
}
.pro-test-sngle .testimonial-content > p {
  font-size: 24px;
  line-height: 38px;
  padding: 0 200px;
  font-weight:300;
}
.pro-test-sngle .testimonial-content > h6 {
  color: #333333;
  font-family: Roboto;
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 5px;
  margin-left: 0;
  margin-right: 0;
  padding-top: 50px;
  position: relative;
}
.pro-test-sngle .testimonial-content > h6::after {
  background: #e2a750 none repeat scroll 0 0;
  bottom: 35px;
  content: "";
  height: 35px;
  left: 0;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
  position: absolute;
  right: 0;
  width: 1px;
}
.newletter-top-title {
  position: relative;
  display:block;
}
.newletter-top-title::after {
  background: #fff none repeat scroll 0 0;
  bottom: -50px;
  content: "";
  height: 35px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 1px;
}
.newletter-top-title > h3 {
  color: #fff;
  font-size: 36px;
  font-weight: 700;
}
.newletter-top-title > p {
  color: #fff;
  margin: 0 auto;
  max-width: 350px;
}
.subscribe-form form input {
  background: #fff none repeat scroll 0 0;
  border: medium none;
  border-radius: 100px;
  box-shadow: none;
  color: #aaaaaa;
  display: inline-block;
  float: left;
  font-size: 13px;
  height: 50px;
  margin: 0;
  padding: 0 0 0 30px;
  position: relative;
  width: 100%;
  margin-bottom:20px;
}
.mc-form .mc-news {
  display: none;
}
.subscribe-form form .submit-button input {
  background: rgba(0, 0, 0, 0) url("img/home-pro/news.png") no-repeat scroll center center;
  border: medium none;
  cursor: pointer;
  height: 50px;
  line-height: 1;
  padding: 15px 40px;
  position: absolute;
  right: 10px;
  text-transform: uppercase;
  top: 2px;
  width: inherit;
}
.footer-newsletter > h3 {
  color: #fff;
  display: block;
  font-size: 18px;
  font-weight: 500;
  margin: 0 auto;
  text-align: center;
}
.pro-latest-news-area .news-content > p {
  margin: 0;
  padding: 0 20px;
}
.pro-latest-news-area .news-thumbnail {
  margin-bottom: 20px;
}
.pro-latest-news-area .recent-news-single {
  padding-bottom: 20px;
}
.pro-latest-news-area .news-content h4 a {
  font-size: 16px;
}
/* Home Production Black */
.production-black .about-actor-left > h3,.production-black .about-actor-left .text p,
.production-black .section-titel h2,.production-black .section-titel p,
.production-black .latestmovie-meta > h5,.production-black .latestmovie-meta h6,
.production-black .indicator-style .owl-theme .owl-nav [class*="owl-"],
.production-black .pro-test-sngle .testimonial-content > p,
.production-black .pro-test-sngle .testimonial-content > h6,
.production-black .testimonial-content > span,
.production-black .pro-latest-news-area .news-content h4 a,
.production-black .pro-latest-news-area .news-content > p {
  color: #fff;
}
.production-black .pro-latest-news-area .news-content h4 a:hover{color:#e2a750;}
.production-black .indicator-style-two .owl-theme .owl-nav [class*="owl-"] {
  border: 1px solid #fff;
  color: #fff;
}
.production-black .latestmovie-meta {
  border-bottom: 1px solid #fff;
}
.production-black .indicator-style .owl-theme .owl-nav [class*="owl-"]:hover{color:#e2a750;}
/* ============= 13. Breadcamp Area ============= */
.breadcamb-area {
  padding-bottom: 130px;
  padding-top: 215px;
}
.bradcamb-content h1 {
  color: #fff;
  font-size: 36px;
}
.bradcamb-content ul li {
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-transform: uppercase;
}
.bradcamb-content ul li a {
  color: #fff;
  font-size: 14px;
}
.bradcamb-content ul li i, .top-titel ul li span {
  display: inline-block;
  padding: 0 6px 0 8px;
}
.bradcamb-content a span {padding: 0 8px 0 10px;}

/* ============= 14. Contact Us Page ============= */
.contact-us-area{position:relative;display:block;}
.section-titel-contact h3 {
  display: block;
  position: relative;
  font-weight: 700;
}
.section-titel-contact p{color:#ed008c555;}
.section-titel-contact {
  margin-bottom: 45px;
  margin-left: 100px;
}
.section-titel-contact h3::after {
  border-bottom: 2px dashed #ed008c;
  bottom: 10px;
  content: "";
  height: 70px;
  left: -100px;
  position: absolute;
  width: 70px;
}
.contact-us-map {
  padding-left: 100px;
  position: relative;
}
#googleMap {
  width: 100%;
  height: 390px;
}
/* Contact Address */
.contact-address {
  background: #ed008c none repeat scroll 0 0;
  padding: 50px 15px 15px 0;
  position: absolute;
  right: 0;
  top: -80px;
  width: 370px;
}
.contact-adres-single {
  padding-bottom: 15px;
  padding-left: 140px;
}
.contact-adres-single h4 {
  color: #fff;
  position: relative;
}
.contact-adres-single h4::after {
  border-bottom: 1px dashed #fff;
  bottom: 10px;
  content: "";
  height: 70px;
  left: -100px;
  position: absolute;
  width: 70px;
}
.contact-adres-single > p {color: #fff;}

/* ============= 15. About Us Page ============= */
.about-area {
  display: block;
  position: relative;
}
.about-area .section-titel-contact {margin-bottom: 62px;}
.abt-sm-img {
  position: absolute;
  right: 70px;
  z-index: 99;
}

/* ============= 16. Service Page ============= */
.service-box {
  display: block;
  margin-bottom: 40px;
  overflow: hidden;
  position: relative;
}
.service-content {
  background: #fafafa none repeat scroll 0 0;
  display: block;
  margin: 28px 0;
  overflow: hidden;
  padding: 50px 0 30px 50px;
  position: relative;
}
.service-text h3 {
  font-weight: 700;
  margin-bottom: 15px;
}
.service-text {
  float: left;
  width: 75%;
}
.service-text > p {
  color: #ed008c555;
  font-size: 16px;
}
.service-icon i {
  color: #dddddd;
  float: right;
  font-size: 72px;
  position: absolute;
  right: 40px;
  top: 35px;
  transform: rotate(-29deg);
}
/* Service Style Two */
.service-style-two .service-single {
  box-shadow: 1px 1px 5px 1px #dddddd;
  margin-bottom: 32px;
}
.service-style-two .service-single:hover {
  background: #e2a750 none repeat scroll 0 0;
}
.service-style-two .servce-icon i,.service-style-two .service-details h4 {
  color: #ed008c;
}
.service-style-two .service-details > p {
  color: #606060;
}
.service-style-two .service-single:hover .servce-icon i,.service-style-two .service-single:hover .service-details h4,
.service-style-two .service-single:hover .service-details > p {
  color: #fff;
}
.service-style-two .service-details h4 a:hover{color: #fff;}
/* ============= 17. Service Details ============= */
.serv-title h2 {
  border-bottom: 1px dashed #ddd;
  margin-bottom: 50px;
  padding-bottom: 25px;
}
.serv-content > ul {
  margin-bottom: 35px;
  margin-top: 35px;
}
.serv-content ul li {
  color: #ed008c555;
  margin-bottom: 15px;
}
.serv-content ul li i{margin-right: 10px;color: #e2a750;font-size: 18px;}
.serv-details-gallery h3,.serv-pricing-production h3,.serv-other-service h3{
  font-weight: 600;
  margin-bottom: 20px;
}
.serv-details-gallery p,.serv-other-service p{
  font-size: 16px;
  margin-bottom: 35px;
  max-width: 75%;
}
.serv-gallery-image.d-flex {
  display: flex;
  margin: 0 -5px -5px;
}
.single-image {
  margin: 0 5px 10px;
}
.button-style a {
  animation-delay: 1.6s;
  background: #e2a750 none repeat scroll 0 0;
  box-shadow: 0 0 1px transparent;
  color: #fff;
  display: inline-block;
  font-weight: 500;
  height: 45px;
  letter-spacing: 1px;
  line-height: 45px;
  padding: 0 35px;
  text-align: center;
  text-transform: uppercase;
  transform: perspective(1px) translateZ(0px);
  transform-origin: 0 100% 0;
  transition: all 0.3s ease 0s;
  vertical-align: middle;
}
.button-style a:hover {
  background: #000 none repeat scroll 0 0;
  color: #fff;
  transform: skew(-10deg);
}
.button-style > a:hover::before{left: 0;top: 0;}
.other-singe-item i {
  color: #cccccc;
  font-size: 42px;
}
.other-singe-item .other-desc {
  margin-top: 30px;
}
.other-singe-item .other-desc h4 {
  color: #ed008c;
  font-weight: 600;
}
.other-singe-item .other-desc > p {
  font-size: 14px;
  margin: 15px 0 0;
  max-width: 80%;
}
.other-service-slider {
  position: relative;
}
.other-service-slider .owl-carousel .owl-nav {
  margin: 0;
  opacity: 1;
  position: absolute;
  right: 0;
  text-align: right;
  top: -75px;
  transition: all 0.4s ease 0s;
  width: 100%;
}
.other-service-slider .owl-carousel .owl-nav [class*="owl-"] {
  background: transparent none repeat scroll 0 0;
  border-radius: 0;
  color: #ed008c555;
  cursor: pointer;
  display: inline-block;
  font-size: 34px;
  margin: 0 2px;
  padding: 0;
}
.other-service-slider .owl-carousel .owl-nav [class*="owl-"]::after {
  color: #ed008c555;
  content: "/";
  font-size: 20px;
  position: absolute;
  right: 32px;
  top: 10px;
}
/* Social Icon */
.slider-social {
  display: block;
  position: relative;
}
.slider-social::after {
  background: #fff none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 1px;
  left: 0px;
  position: absolute;
  width: 40px;
}
.slider-social li:first-child {
  margin-left: 60px;
}
.slider-social li {
  margin-right: 20px;
}
.slider-social li a {
  color: #fff;
  font-size: 16px;
}
.slider-social li a:hover {
  color: #e2a750;
}
/* Sidebar Widgets Right Area */
.single-widget {
  box-shadow: 0 0 8px 2px #ddd;
  margin-top: 63px;
  padding: 30px;
}
.single-widget h4.widget-title {
  color: #ed008c;
  font-weight: 500;
  margin-bottom: 35px;
  padding-bottom: 15px;
  position: relative;
}
.single-widget h4.widget-title::after {
  background: #e2a750 none repeat scroll 0 0;
  bottom: 0;
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  width: 30px;
}
.search-widget form {position: relative; }
.search-widget form input {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #fff;
  box-shadow: 0 0 8px 2px #ddd;
  color: #ed008c555;
  font-size: 14px;
  height: 50px;
  padding: 0 0 0 25px;
}
.search-widget form input::-webkit-input-placeholder {color: #ed008c555; }
.search-widget form input:-ms-input-placeholder {color: #ed008c555; }
.search-widget form input:-moz-placeholder {color: #ed008c555; }
.search-widget form input::-moz-placeholder {color: #ed008c555; }
.search-widget form button {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  color: #ed008c555;
  height: 50px;
  line-height: 50px;
  margin-top: -25px;
  padding: 0;
  position: absolute;
  right: 5px;
  top: 50%;
  width: 50px;
  cursor: pointer;
}
.search-widget form button:hover {color: #e2a750; }
.widget-recent-post .widget-recent-post-thumb {
  margin-right: 20px;
  display: inline-block;
  position: relative; }
.widget-recent-post .widget-recent-post-thumb::before {
  content: "";
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.3);
  opacity: 0;
  position: absolute;
  visibility: hidden;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  -ms-transition: all 0.4s ease-in-out 0s;
  -o-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s; }
.widget-recent-post .widget-recent-post-content {
  -webkit-flex-shrink: 100;
  -moz-flex-shrink: 100;
  -ms-flex-negative: 100;
  flex-shrink: 100; }
.widget-recent-post .widget-recent-post-content h6 {
  font-family: "Roboto", sans-serif;
  color: #ed008c;
  font-weight: 500;
  font-size: 16px;
  line-height: 24px;
  margin-bottom: 0;
  margin-top: -5px; }
.widget-recent-post .widget-recent-post-content h6 a {color: #ed008c; }
.widget-recent-post .widget-recent-post-content h6 a:hover {color: #e2a750; }
.widget-recent-post .widget-recent-post-meta span {
  color: #777777;
  display: inline-block;
  font-family: "Roboto",sans-serif;
  font-size: 14px;
  font-style: italic;
  font-weight: 400;
  line-height: 20px;
}
.widget-recent-post ul {padding-left: 0;}
.widget-recent-post ul li {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 30px; }
.widget-recent-post ul li:last-child {margin-bottom: 0;}
.widget-recent-post ul li:hover .widget-recent-post-thumb::before {opacity: 1;visibility: visible; }
.widget-social ul {
  padding-left: 0;
  margin-bottom: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap; }
.widget-social ul li {
  display: block;
  padding: 0;
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 16.66%;
  -moz-box-flex: 0;
  -moz-flex: 0 0 16.66%;
  -ms-flex: 0 0 16.66%;
  flex: 0 0 16.66%;
  margin-top: 1px;
  text-align: center; }
.widget-social ul li a {
  display: block;
  height: 40px;
  line-height: 40px;
  text-align: center;
  width: 40px;
}
.widget-social ul li:nth-child(4n) a {border-right: none; }
.social-icons.social-icons-colorized ul li.facebook a {background: #3B5998;color: #ffffff;border-color: #3B5998;}
.social-icons.social-icons-colorized ul li.facebook:hover a {color: #fff;}
.social-icons.social-icons-colorized ul li.twitter a {background: #00ACEE;color: #ffffff;border-color: #00ACEE;}
.social-icons.social-icons-colorized ul li.twitter:hover a {color: #fff; }
.social-icons.social-icons-colorized ul li.google-plus a {background: #DD4B39;color: #ffffff;border-color: #DD4B39;}
.social-icons.social-icons-colorized ul li.google-plus:hover a {color: #DD4B39;}
.social-icons.social-icons-colorized ul li.pinterest a {background: #C8232C;color: #ffffff;border-color: #C8232C;}
.social-icons.social-icons-colorized ul li.pinterest:hover a {color: #fff;}
.social-icons.social-icons-colorized ul li.vimeo a {background: #00ADEF;color: #ffffff;border-color: #00ADEF;}
.social-icons.social-icons-colorized ul li.vimeo:hover a {color: #fff;}
.social-icons.social-icons-colorized ul li.linkedin a {color: #0E76A8; }
.social-icons.social-icons-colorized ul li.linkedin:hover a {background: #0E76A8;color: #ffffff;border-color: #0E76A8; }
.social-icons.social-icons-colorized ul li.instagram a {background: #3F729B;color: #ffffff;border-color: #3F729B;}
.social-icons.social-icons-colorized ul li.instagram:hover a {color: #fff;}
.social-icons.social-icons-colorized ul li.google a {background: #DD4B39;color: #ffffff;border-color: #DD4B39;}
.social-icons.social-icons-colorized ul li.google:hover a {color: #fff;}

/* ============= 18. News Single Area ============= */
.recent-news-single {
  border-bottom: 1px solid #ddd;
  margin-bottom: 30px;
  padding-bottom: 28px;
  transition: all 0.4s ease 0s;
}
.recent-news-single:hover {
  border-color: #e2a750;
}
.news-thumbnail {
  margin-bottom: 30px;
}
.news-content h4 a {
  color: #ed008c;
  font-size: 18px;
  font-weight: 500;
}
.news-content .news-meta span {
  color: #777;
  font-size: 14px;
  font-weight: 400;
  line-height: 30px;
  padding-right: 25px;
}
.news-content .news-meta span:last-child {
  padding-right: 0;
}
.news-content .news-meta span a {
  color: #777;
}
.news-content .news-meta span a:hover,.news-content h4 a:hover {
  color: #e2a750;
}

/* ============= 19. News Details Area ============= */
.dec-img > img {
    width: 100%;
}
.dec-img-wrapper {
  margin: 40px 0 38px;
}
.blog-dec-tags-social {
  border-bottom: 1px dashed #ddd;
  display: flex;
  justify-content: space-between;
  margin-top: 52px;
  padding-bottom: 10px;
}
.blog-dec-tags ul li {
    display: inline-block;
    position: relative;
}
.blog-dec-tags ul li a {
    color: #ed008c;
    margin-right: 18px;
    text-transform: capitalize;
}
.blog-dec-tags ul li::after {
    background-color: #6d6d6d;
    content: "";
    font-size: 8px;
    height: 12px;
    position: absolute;
    right: 6px;
    top: 5px;
    transform: rotate(20deg);
    width: 1.5px;
}
.blog-dec-tags ul li:last-child::after {
    display: none;
}
.blog-content > h2 {
  font-size: 24px;
}
.blog-dec-social {
    display: flex;
}
.blog-dec-social ul li {
    display: inline-block;
    margin-left: 14px;
}
.blog-dec-social ul li a {
    color: #606060;
    font-size: 18px;
}
.blog-dec-social > span {
    color: #ed008c;
    font-weight: 400;
    margin-top: 3px;
    text-transform: capitalize;
}
.blog-dec-tags ul li a:hover,
.blog-dec-social ul li a:hover {
    color: #e2a750;
}
.administrator-wrapper {
    align-items: center;
    display: flex;
    border-bottom: 1px dashed #ddd;
    padding: 30px 0;
}
.administrator-img {
    margin-right: 30px;
}
.administrator-content > h4 {
    color: #ed008c;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 10px;
}
.administrator-content > p {
    color: #606060;
    font-size: 15px;
    line-height: 26px;
    margin: 0;
}
.blog-dec-title {
    color: #ed008c;
    font-size: 20px;
    font-weight: 500;
    margin: 0;
}
.single-comment-wrapper {
    display: flex;
}
.blog-comment-content > h4 {
    color: #ed008c;
    font-size: 16px;
    font-weight: 500;
    margin: 0;
}
.blog-comment-content > span {
    color: #ed008c;
    display: block;
    margin: 6px 0 8px;
}
.blog-comment-content > p {
    color: #606060;
    font-size: 15px;
    line-height: 26px;
}
.blog-comment-img {
    margin-right: 28px;
}
.leave-form {
    margin-bottom: 30px;
}
.blog-reply-wrapper form input,
.blog-reply-wrapper form textarea {
    background: #f7f7f7 none repeat scroll 0 0;
    border: medium none;
    border-radius: 0px;
    color: #333;
    font-size: 14px;
    font-weight: 400;
    height: 60px;
    padding: 2px 20px;
    transition: .4s;
}
.blog-reply-wrapper form input::-moz-placeholder,
.blog-reply-wrapper form textarea::-moz-placeholder {
    color: #333;
    opacity: 1;
}
.blog-reply-wrapper form input::-webkit-placeholder,
.blog-reply-wrapper form textarea::-webkit-placeholder {
    color: #333;
    opacity: 1;
}
.blog-reply-wrapper form textarea {
    height: 235px;
    padding: 25px 20px;
}
.blog-reply-wrapper form .text-leave input {
    background-color: #ed008c;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    height: inherit;
    margin-top: 40px;
    padding: 14px 30px;
    width: inherit;
}
.blog-reply-wrapper form .text-leave input:hover {
    background-color: #e2a750;
}
.blog-reply-wrapper > form {
    margin-top: 40px;
}
.blog-date-categori {
  margin: 9px 0 19px;
}
.blog-date-categori li {
  color: #ed008c;
  display: inline-block;
  font-size: 14px;
  font-style: italic;
  font-weight: 400;
}
.blog-date-categori ul li::after {
  content: "/";
  margin: 0 3px 0 4px;
}
.blog-date-categori ul li:nth-child(2)::after {
  display: none;
}
/* ============= 20. 404 Error ============= */
.outerwrap-404 {
  background-image: url("img/home-one/slider/1.png");
  background-size: cover;
  bottom: 0;
  height: 100%;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}
.error_main {
  left: 0;
  margin-top: -288px;
  position: absolute;
  right: 0;
  text-align: center;
  top: 50%;
}
.error_main h6 {
  color: #fff;
  font-size: 80px;
  line-height: 54px;
  margin-bottom: 30px;
  text-transform: capitalize;
}
.error_main > img {
  margin-bottom: 30px;
}
.error_main h2 {
  color: #fff;
  line-height: 25px;
  margin-bottom: 50px;
  padding-bottom: 8px;
  text-transform: capitalize;
}
.error_main .icon-studio {
  display: block;
  margin-bottom: 40px;
}
.error_main a {
  background: #e2a750 none repeat scroll 0 0;
  color: #fff;
  display: inline-block;
  font-size: 14px;
  font-weight: 500;
  height: 45px;
  line-height: 45px;
  padding: 0 30px;
  text-transform: uppercase;
}
.error_main a:hover{background:#ed008c555;}


/* ============= 21. Faq Styles ============= */
.accordion .card {
  border: 0 none;
  margin-bottom: 20px; }
.acc-header h5 a {
  background: #eee none repeat scroll 0 0;
  color: #ed008c;
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 18px 40px 18px 26px;
  position: relative; }
.accordion .card {
  border: 1px solid #e1e1e1;
  border-radius: 0; }
.accordion .card-body {
  color: #ed008c;
  font-size: 13px;
  padding-left: 18px;
  padding-right: 18px; }
.acc-header h5 {
  margin: 0;
}
.acc-header h5 a.collapsed::after {
  background-repeat: no-repeat;
  content: "\efc2";
  font-size: 14px;
  height: 20px;
  padding: 0 10px;
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 20px; }
.acc-header h5 a::after {
  background-repeat: no-repeat;
  content: "\ef9a";
  font-family: "IcoFont";
  font-size: 14px;
  height: 20px;
  padding: 0 10px;
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 20px; }
.accordeion__content {
  margin-bottom: 36px; }
.accordeion__content h2 {
  color: #ed008c;
  font-size: 18px;
  font-weight: 600;
  margin: 0 0 5px;
  padding: 0 0 5px;
}
.accordeion__content p {
  font-size: 13px;
}

/* ============= 22. Pricing Table Style ============= */
#price {
  text-align: center;
}
.plan-inner {
  background: #f9f9f9 none repeat scroll 0 0;
  margin: 0 auto 30px;
  position: relative;
}
.plan-inner:hover .entry-title h3 {
  background: #cb9648 ;
}
.plan-inner:hover .entry-title,.plan-inner:hover .entry-title .price{
  background: #e2a750 ;
}
.entry-title {
  background: #333 none repeat scroll 0 0;
  color: #fff;
  height: 140px;
  margin-bottom: 30px;
  position: relative;
  text-align: center;
  transition: .3s;
}
.entry-title > h3 {
  background: #474747 none repeat scroll 0 0;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin: 0;
  padding: 10px 0;
  text-transform: uppercase;
  transition: .3s;
}
.entry-title .price {
  position: absolute;
  bottom: -25px;
  background: #333 none repeat scroll 0 0;
  height: 95px;
  width: 95px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius: 50px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 28px;
  font-weight: 700;
  transition: .4s;
}
.price span {
  bottom: -15px;
  font-size: 9px;
  font-weight: 400;
  left: 25px;
  position: absolute;
}
.entry-content {
  color: #323232;
}
.entry-content ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}
.entry-content li {
  border-bottom: 1px solid #e5e5e5;
  display: block;
  overflow: hidden;
  padding: 10px 0;
}
.entry-content li:last-child {
  border: none;
}
#price .btn {
  padding: 3em 0;
  text-align: center;
}
#price .btn a {
  background: #333 none repeat scroll 0 0;
  color: #fff;
  font-size: 14px;
  font-weight: 500;
  padding: 10px 30px;
  text-decoration: none;
  text-transform: uppercase;
}
#price .btn a:hover {
  background: #cb9648 none repeat scroll 0 0!important;
  color: #fff;
}
.plan-inner:hover .btn a{
  background: #e2a750!important;
}
.hot {
    position: absolute;
    top: -7px;
    background: #e2a750;
    color: #fff;
    text-transform: uppercase;
    z-index: 2;
    padding: 4px 10px;
    font-size: 10px;
    border-radius: 2px;
    right: 10px;
    font-weight: 700;
}

/* ============= 23. Portfolio ============= */
.portfolio .portfolio-content {
  -moz-box-direction: normal;
  -moz-box-orient: vertical;
  -moz-box-pack: end;
  background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
  display: flex;
  flex-direction: column;
  height: 100%;
  justify-content: flex-end;
  left: 0;
  padding: 30px;
  position: absolute;
  top: 100%;
  transition: all 0.4s ease-out 0s;
  width: 100%;
}
.portfolio:hover .portfolio-content {
  top: 0;
}
.portfolio .portfolio-content a.portfolio-zoom-button {
  color: #fff;
  cursor: pointer;
  display: inline-block;
  height: 80px;
  left: 50%;
  margin-left: -40px;
  margin-top: -40px;
  opacity: 1;
  position: absolute;
  top: 50%;
  transform: scale(0.8);
  transition: all 0.3s ease-out 0s;
  visibility: visible;
  width: 80px;
}
.portfolio .portfolio-content h5 {
  font-weight: 600;
  letter-spacing: 1px;
  margin-bottom: 6px;
}
.portfolio .portfolio-content h5 a {
  color: #fff;
}
.portfolio .portfolio-content h5 a:hover,.portfolio .portfolio-content h6 a:hover {
  color: #e2a750;
}
.portfolio .portfolio-content h6 {
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  margin-bottom: 0;
}
.portfolio .portfolio-content h6 a {
  color: #fff;
}
.portfolio {
  background: #f1f1f1 none repeat scroll 0 0;
  overflow: hidden;
  position: relative;
}
.movie-dtls.indicator-style-two .owl-theme .owl-nav {
  top: -70px;
}
/* ============= 24. Portfolio Details ============= */
.portfolio-details-image img {
  width: 100%;
}
.portfolio-details-meta ul {
  background: #f8f8f8 none repeat scroll 0 0;
  border: 1px dashed #e5e5e5;
  padding: 0 20px;
  margin-bottom: 0;
  list-style: none;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 14px;
}
.small-title-fullwidth span {
  border-bottom: 1px dashed #d5d5d5;
  display: block;
  padding-bottom: 7px;
  padding-right: 0;
}
.small-title-fullwidth {
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 0;
  margin-top: -5px;
  padding-bottom: 25px;
}
.portfolio-details-meta ul li {
  border-bottom: 1px dashed #e5e5e5;
  color: #666;
  list-style: outside none none;
  padding: 10px 0;
  width: 100%;
}
.portfolio-details-meta ul li:last-child {
  border-bottom: 0 none;
}
.portfolio-details-meta ul li i {
  color: #444;
  font-size: 16px;
  line-height: normal;
  margin-right: 20px;
}
.portfolio-details-meta ul li span {
  color: #444;
  font-weight: 700;
  margin-right: 5px;
}
.portfolio-details-meta ul li a {
  color: #333333;
}
.portfolio-details-meta ul li a:hover {
  color: #e2a750;
}
.portfolio-details-info .portfolio-title {
  font-weight: 600;
  letter-spacing: 1px;
  margin-bottom: 18px;
}
.portfolio-details-info .post-share {
  border-bottom: 1px dashed #e5e5e5;
  border-top: 1px dashed #e5e5e5;
  overflow: hidden;
  padding: 10px 0;
  margin-top: 30px;
}
.portfolio-details-info .post-share h6 {
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 0;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
  font-size: 14px;
}
.portfolio-details-info .post-share ul {
  display: inline-block;
  vertical-align: middle;
  padding-left: 0;
  margin-bottom: 0;
}
.portfolio-details-info .post-share ul li {
  display: inline-block;
  list-style: none;
  margin: 0 6px;
  font-size: 14px;
}
.portfolio-details-info .post-share ul li a {
  display: block;
  color: #333333;
}
.portfolio-details-info .post-share ul li a:hover {
  color: #e2a750;
}


@media only screen and (min-width: 768px) and (max-width: 991px) {
  .portfolio-details-info {
    margin-top: 50px;
  }
  .video-details-area .portfolio-details-info {
    margin-top: 0px;
  }
  .pt-60 {
    padding-top: 40px;
  }
  .video-details-area .portfolio-details-meta ul {
	  padding: 0;
	}
  .video-details-area .portfolio-details-meta {
	  margin-bottom: 20px;
	  margin-top: 20px;
	}
}

@media only screen and (max-width: 767px) {
  .portfolio-details-info {
    margin-top: 50px;
  }
  .video-details-area .portfolio-details-info {
    margin-top: 0px;
  }
  .pt-60 {
    padding-top: 40px;
  }
  .video-details-area .portfolio-details-meta ul {
	  padding: 0;
	}
  .video-details-area .portfolio-details-meta {
	  margin-bottom: 20px;
	  margin-top: 20px;
	}
}
/* Movie Details */
.movie-popup-video {
  display: block;
  height: 260px;
  margin-top: 5px;
  overflow: hidden;
  width: 100%;
}
.movie-details-meta > h3 {
  font-size: 30px;
  font-weight: 700;
  margin-bottom: 15px;
}
.movie-details-meta > ul li {
  color: #ed008c;
  display: inline-block;
  font-size: 16px;
  margin-bottom: 25px;
}
.movie-details-area .post-share {
  margin-bottom: 30px;
  margin-top: 30px;
  overflow: hidden;
}
.movie-details-area .post-share h6 {
  display: inline-block;
  float: left;
  font-size: 18px;
  margin-right: 20px;
  font-weight: 700;
  letter-spacing: 1px;
  margin-bottom: 0;
  text-transform: uppercase;
  vertical-align: middle;
}
.movie-details-area .post-share > ul {
  display: block;
  margin-top: -4px;
  overflow: hidden;
}
.movie-details-area .post-share ul li {
  display: inline-block;
  font-size: 18px;
  list-style: outside none none;
  margin: 0 10px;
}
.movie-details-area .post-share ul li a {
  color: #ed008c;
  display: block;
}
.movie-details-area .post-share ul li a:hover {
  color: #e2a750;
}
.movie-details-info ul {
  border-right: 1px dashed #ddd;
  font-size: 14px;
  letter-spacing: 1px;
  list-style: outside none none;
  margin-bottom: 0;
  margin-right: 20px;
}
.movie-details-info ul li {
  color: #666;
  list-style: outside none none;
  padding: 8px 0;
  width: 100%;
}
.movie-details-info ul li span {
  color: #444;
  font-weight: 700;
  margin-right: 5px;
}
.movie-details-area .popup-youtube {
  color: #fff;
  font-size: 56px;
  height: 70px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  text-align: center;
  top: 33%;
  transition: all 0.3s ease 0s;
  z-index: 2;
}
h5.trailer-title {
  font-weight: 700;
  margin: 15px 0 0;
}

/* ============= 25. Home Campaign Page ============= */
.campaign-content h5 {
  font-size: 14px;
  margin-top: 0;
  margin-bottom: 10px;
  font-weight: 600;
  color: #333;
  position: relative;
  display: inline-block;
}
.campaign-content h5::after {
  width: 70px;
  position: absolute;
  content: "";
  height: 1px;
  top: 9px;
  right: -80px;
  border-bottom: 1px solid #e2a750;
}
.campaign-content h3 {
  color: #333;
  margin-top: 0px;
  margin-bottom: 22px;
  font-size: 18px;
  font-weight: 600;
  padding: 0;
  transition: all 0.3s ease-in-out;
  font-family: 'Roboto', sans-serif;
  text-transform: uppercase;
}
.campaign-content h3 a {
  text-decoration: none;
  color: inherit;
  transition: all 0.3s ease-in-out;
}
.campaign-content p {
  color: rgb(102, 102, 102);
  font-size: 14px;
  font-weight: 400;
  line-height: 24px;
  margin: 0;
  transition: all 0.3s ease-in-out;
}
.campaign-aboutus-left h2 {
  color: #e2a750;
  font-size: 15px;
  font-weight: 500;
  font-family: 'Roboto', sans-serif;
  margin: 0 0 13px;
  animation-delay: 0.8s;
  position: relative;
  padding-left: 80px;
}
.campaign-aboutus-left h2::before {
  content: "";
  border-left: 50px solid #e2a750;
  left: 0;
  width: 75px;
  top: 10px;
  position: absolute;
  width: auto;
  height: 1px;
}
.campaign-aboutus-left h3 {
  display: block;
  position: relative;
  font-family: 'Roboto', sans-serif;
  margin: 0 0 15px;
  font-size: 40px;
  color: #333;
  font-weight: 900;
  margin-top: 20px;
}
.campaign-aboutus-left h3 span{color:#e2a750;}
.campaign-aboutus-icon-list-items .icon-list-item {
  padding: 5px 0;
}
.campaign-aboutus-icon-list-items .icon-list-item .icon-list-icon i {
  color: #e2a750;
  font-size: 16px;
}
.campaign-aboutus-icon-list-items .icon-list-item .icon-list-text {
  padding-left: 8px;
  color: #ed008c;
  font-family: 'Roboto', sans-serif;
  line-height: 1.7;
  font-weight: 400;
}
.aboutus-text-editor p {
  font-size: 18px;
  color: #ed008c;
  font-family: 'Roboto', sans-serif;
  line-height: 1.7;
  font-weight: 400;
  margin-bottom: 10px;
}
.aboutus-text-editor strong{font-weight: 900;}
.pstr_image {
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
  position: relative;
  padding: 10px;
}
.pstr_image img {
  width: 100%;
}
.pstr_image h3 {
  position: absolute;
  bottom: 20px;
  font-size: 18px;
  color: #fff;
  left: 50%;
  transform: translateX(-50%);
  margin-top: 0;
  margin-bottom: 0;
  font-family: Roboto;
  text-transform: uppercase;
  font-weight: 500;
  letter-spacing: 1px;
}
.pstr_date {
  position: absolute;
  left: -35px;
  padding: 24px 32px;
  background: #e2a750;
  border: 7px solid #fff;
  box-shadow: 0 0 12px 1px #ccc;
  bottom: -40px;
  color: #fff;
  font-size: 30px;
  line-height: 1;
}
.pstr_date span {
  display: block;
  font-weight: 600;
}
.pstr_content {
  display: flex;
  justify-content: center;
  padding: 16px 16px 10px;
  font-size: 18px;
  line-height: 22px;
}
ul.pstr_rating {
  list-style: none;
  padding: 0;
  display: flex;
  margin-bottom: 0;
  margin-right: 10px;
}
.pstr_rating li i {
  color: #ddd;
}
.pstr_rating li .ratclr {
  color: #e2a750;
}
.pstr_content span {
  color: #000;
}
.video-popup-area.bg-20.text-center {
  padding: 130px 0;
}
.video-popupcontent .popup-youtube {
  height: 70px;
  left: 0;
  margin: 0 auto;
  position: initial;
}
.video-popupcontent h4 {
  position: relative;
  color: #fff;
  margin-top: 20px;
  font-weight: 600;
  font-size: 26px;
}
.our-gallery-campaign .gallery-single:hover .popup-gallery,.our-gallery-campaign .gallery-single:hover .gallery-image .popup-youtube {
  opacity: 1;
  top: 38%;
  visibility: visible;
  z-index: 99;
}
.our-gallery-campaign .gallery-single:hover .gallery-image::before {
  opacity: 1;
  bottom: 0;
  visibility: visible;
  z-index: 9;
}
.our-gallery-campaign .popup-gallery,.our-gallery-campaign .gallery-image .popup-youtube {
  font-size: 28px;
}
.indicator-style-two .our-gallery-campaign .owl-theme .owl-nav {
  width: 80%;
}
.campaign-count-title h3::after {
  width: 45px;
  position: absolute;
  content: "";
  height: 1px;
  bottom: 0;
  border-bottom: 2px solid #e2a750;
  margin-left: 10px;
}
.campaign-count-title h3 span{color: #e2a750;}
.campaign-count-title h3 {
  font-size: 36px;
  margin-top: 0;
  margin-bottom: 10px;
  font-weight: 900;
  color: #051b33;
  position: relative;
  display: inline-block;
}
.project-count-camp h3 {
  font-size: 14px;
  color: #051b33;
  font-weight: 900;
  margin-bottom: 10px;
  margin: 0;
}
.project-count-camp span {
  font-size: 60px;
  font-weight: 600;
  margin-bottom: 10px;
  color: #aaa;
  font-family: "Orbitron", Sans-serif;
}
.project-count-camp::after {
  position: absolute;
  top: 50%;
  width: 1px;
  content: "";
  right: 0;
  transform: translateY(-50%);
  border: 1px solid #e2a750;
  height: 40px;
}
/* ============= 26. Home Campaign ============= */

.campaign-section-title h3 {
	font-size: 36px;
	margin-top: 0;
	margin-bottom: 25px;
	font-weight: 900;
	color: #051b33;
	position: relative;
	display: inline-block;
}
.campaign-section-title h3 span {
	color: #e2a750;
}
.campaign-section-title h3::after {
	width: 45px;
	position: absolute;
	content: "";
	height: 1px;
	bottom: 7px;
	border-bottom: 2px solid #e2a750;
	margin-left: 10px;
}
.campaign-section-title h3:last-child {
	margin-bottom: 0;
}
.campaign-section-title p {
	font-size: 16px;
}
.campaign-section-title a {
	font-size: 16px;
	text-transform: uppercase;
	font-weight: 600;
	margin-top: 15px;
	display: inline-block;
}


/*Campaign*/
.campaign {}
.campaign .image {
	display: block;
}
.campaign .image img {
	width: 100%;
}
.campaign .content {}
.campaign .content:not(:first-child) {
	margin-top: 20px;
}
.campaign .content .date {
	font-size: 14px;
	margin-top: 0;
	margin-bottom: 10px;
	font-weight: 600;
	color: #ed008c555;
	position: relative;
	display: inline-block;
}
.campaign .content .date::after {
	width: 70px;
	position: absolute;
	content: "";
	height: 1px;
	top: 9px;
	right: -80px;
	border-bottom: 1px solid #e2a750;
}
.campaign .content .title {
	color: #333;
	font-size: 18px;
	font-weight: 600;
	padding: 0;
	transition: all 0.3s ease-in-out;
	font-family: 'Roboto', sans-serif;
	text-transform: uppercase;
	margin: 6px 0px 15px 0px;
}
.campaign .content .title a {}
.campaign .content p {}
.campaign .content p:last-child {
	margin-bottom: 0;
}

/*Campaign Count*/
.campaign-count-wrap {
	border-top: 1px solid #e2a750;
}
.campaign-count-wrap .project-count-camp h3 {
	margin-bottom: 15px;
}
.campaign-count-wrap .project-count-camp > span {
	display: block;
}
.campaign-count-wrap .project-count-camp span {
	margin: 0;
	line-height: 1;
}
.campaign-count-wrap [class*="col-"]:last-child .project-count-camp::after {
	display: none;
}

/*Video Gallery*/
.video-gallery-single {
	display: block;
	position: relative;
}
.video-gallery-single img {
	width: 100%;
}
.video-gallery-single .hover {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	background: rgba(5, 25, 47, 0.8);
	border: 10px solid rgba(226, 167, 80, 0.8);
	color: #ffffff;
	opacity: 0;
	transition: all 0.3s ease-in-out;
}
.video-gallery-single .hover i {
	font-size: 75px;
}
.video-gallery-single:hover .hover {
	opacity: 1;
}

/*Testimonial*/
.testimonial-slider-wrap {
	border-bottom: 1px solid #e2a750;
}
.testimonial-slider .owl-nav {}
.testimonial-slider .owl-nav > div {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	width: 34px;
	height: 34px;
	text-align: center;
	background-color: #e2a750;
	color: #ffffff;
	transition: all 0.3s ease 0s;
	opacity: 0;
	z-index: 9;
}
.testimonial-slider .owl-nav > div:hover {
	background-color: #05192f;
}
.testimonial-slider:hover .owl-nav > div {
	opacity: 1;
}
.testimonial-slider .owl-nav > div i {
	font-size: 20px;
	line-height: 34px;
	display: block;
}
.testimonial-slider .owl-nav .owl-prev {
	left: 0;
}
.testimonial-slider .owl-nav .owl-next {
	right: 0;
}

.testimonial {
	text-align: center;
	margin: auto;
}
.testimonial img {
	max-width: 100%;
	width: auto !important;
	margin: 0 auto 15px;
}
.testimonial p {
	max-width: 770px;
	margin: auto;
}
.testimonial h6 {
	font-weight: 600;
	line-height: 1;
}
.testimonial h6::before {
	content: "";
	height: 35px;
	width: 1px;
	background-color: #e2a750;
	display: block;
	margin: 10px auto;
}
.testimonial span {
	display: block;
	font-size: 12px;
}

/*Brand*/
.brand-slider {}
.brand-slider .slick-dots {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	margin: 0;
	padding: 0;
	line-height: 1;
	margin-top: 20px;
}
.brand-slider .slick-dots li {}
.brand-slider .slick-dots li button {
	text-indent: -9999px;
	opacity: 1;
	width: 12px;
	height: 12px;
	padding: 0;
	margin: 0 5px;
	border-radius: 100%;
	background-color: #061d36;
	border: none;
	overflow: hidden;
}
.brand-slider .slick-dots li.slick-active button {
	background-color: #e2a750;
}
.brand-item {}
.brand-item a {
	display: block;
}
.brand-item a img {
	width: 100%;
}

/*Gallery*/
.gallery-slider {}
.gallery-slider .owl-nav {}
.gallery-slider .owl-nav > div {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	z-index: 9;
	padding: 40px 15px;
	background-color: rgba(226, 167, 80, 0.8);
}
.gallery-slider .owl-nav > div:hover {
	background-color: #e2a750;
}
.gallery-slider .owl-nav > div i {
	font-size: 24px;
}
.gallery-slider .owl-prev {
	left: 0;
}
.gallery-slider .owl-next {
	right: 0;
}
.gallery-item {}
.gallery-item img {
	width: 100%;
}

/*Brand Logo Section*/
.brand-logo-carousel-2 {
	border-bottom: 1px solid #e2a750;
}
.brand-logo-carousel-2 .slick-track {
	display: flex !important;
	align-items: center;
}
.brand-logo-carousel-2 .slick-track {}
.brand-logo-item {
	text-align: center;
}
.brand-logo-item img {
	max-width: 100%;
	width: auto !important;
	margin: auto;
}

/*Subscribe*/
.campaign-subscribe-form {}
.campaign-subscribe-form form {}
.campaign-subscribe-form form .mc-form {
	position: relative;
}
.campaign-subscribe-form form .mc-form input[type="email"] {
	width: 560px;
	background-color: #ffffff;
	border: medium none;
	border-radius: 100px;
	box-shadow: none;
	color: #666;
	display: inline-block;
	float: left;
	font-size: 13px;
	height: 50px;
	margin: 0;
	padding-left: 25px;
	position: relative;
	padding-right: 160px;
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1) inset;
}
.campaign-subscribe-form form .mc-form input[type="submit"] {
	background-color: #e2a750;
	border: medium none;
	cursor: pointer;
	height: 50px;
	line-height: 1;
	position: absolute;
	right: 0;
	text-transform: uppercase;
	top: 0;
	width: inherit;
	border-radius: 0 100px 100px 0;
	color: #fff;
	font-weight: 500;
	font-family: 'Orbitron', sans-serif;
	padding: 1px 24px;
}

/* ============= 27. ScrollUp ============= */
#scrollUp {
  background: #e2a750 none repeat scroll 0 0;
  border-radius: 0px;
  bottom: 15px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  color: #fff;
  font-size: 28px;
  height: 40px;
  line-height: 35px;
  position: fixed;
  right: 15px;
  text-align: center;
  transition: all 0.3s ease 0s;
  width: 40px;
  z-index: 200;
}
#scrollUp:hover{background:#000;}


</style>