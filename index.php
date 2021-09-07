<!DOCTYPE html>
<html>
<head>
	<?php include "assets/partials/header.php" ?>
</head>
<body data-scroll-container>

	<?php include "assets/partials/inner-header.php" ?>

	<section data-scroll-section class="section m_disp_none" id="section01" data-scroll data-scroll-class="active" data-scroll-repeat="true">
		<div class="row">
			<div class="ss-lndg-left">
				<h2 data-splitting data-scroll data-scroll-class="active" data-scroll-repeat="true">Are you <br/> going to be the one?<br> this year</h2>

				<div id="overlay">
		            <div id="progstat"></div>
		            <div id="progress"></div>
		        </div>
			</div>
			<div class="ss-lndg-right">
				<div class="ss-lndg-video-container" data-scroll data-scroll-speed="2" data-scroll-class="active" data-scroll-repeat="true" onmouseover="smallImg()" onmouseout="normalImg()">
					<iframe title="Sharad Sundari 2020 video" class="youtube-player" type="text/html" width="560" height="345" src="http://www.youtube.com/embed/JliWGcIhfIk?rel=0&controls=0&autoplay=0&mute=1&loop=1" frameborder="0" allowFullScreen></iframe>
				</div>
			</div>
		</div>
	</section>

	<section data-scroll-section class="section m_disp_none" id="section02" data-scroll data-scroll-class="active" data-scroll-repeat="true">
		<div class="row">
			<div class="ss-abt-left">
				<div class="ss-abt-video-container" data-scroll data-scroll-speed="0" data-scroll-class="active" data-scroll-repeat="true" onmouseover="smallImg()" onmouseout="normalImg()">
					<iframe title="Sharad Sundari 2020 video" class="youtube-player" type="text/html" width="560" height="345" src="https://www.youtube.com/embed/iJRJsYuau1Y?rel=0" frameborder="0" allowFullScreen></iframe>
				</div>
			</div>

			<div class="ss-abt-right" id="about-the-festival">
				<div class="about-festival-content">
					<h2 data-splitting data-scroll data-scroll-class="active" data-scroll-repeat="false" data-scroll-speed="1">Moments</h2>
					<p data-splitting data-scroll data-scroll-class="active" data-scroll-repeat="false">Shyam Sundar Co. Jewellers presented<br> the eight edition of Sharad Sundari at<br> Calcutta Boating Club. In the finale 12<br> finalists were presented on stage and<br> after two rounds of walking the ramp and<br> facing the audience, were judged by an<br> eminent panel which decided the winner,<br> two runners-up and the ones with the<br> winning eyes, skin, smile, confidence,<br> spirit, enterprise and special talent.</p>
				</div>
			</div>
		</div>
	</section>

	<section data-scroll-section class="winning-faces-section section m_disp_none" id="section03" data-scroll data-scroll-class="active" data-scroll-repeat="true">
		<div class="back-lay">
			<h2 data-splitting>Winning Faces</h2>
			<p>2020</p>
		</div>

		<div class="row" data-scroll data-scroll-speed="2">
			<div class="col-4 winner_box 1strunner">
				<div class="faces_box" data-scroll data-scroll-class="active">
					<div class="imgBox">
						<img src="assets/images/crown/1strunner.jpg" onmouseover="smallImg()" onmouseout="normalImg()">
					</div>
				</div>
				<div class="crown_winners_info" data-scroll data-scroll-speed="1">
					<h4 data-scroll data-scroll-speed="0.5">Dona Mondal</h4>
					<p data-scroll data-scroll-speed="-0.5">Runner up</p>
				</div>
			</div>

			<div class="col-4 winner_box winner">
				<div class="faces_box" data-scroll data-scroll-class="active">
					<div class="imgBox">
						<img src="assets/images/crown/winner.jpg" onmouseover="smallImg()" onmouseout="normalImg()">
					</div>
				</div>
				<div class="crown_winners_info" data-scroll data-scroll-speed="1">
					<h4 data-scroll data-scroll-speed="0.5">Kirtika Singh</h4>
					<p data-scroll data-scroll-speed="-0.5">Winner</p>
				</div>
			</div>

			<div class="col-4 winner_box 2ndrunner">
				<div class="faces_box" data-scroll data-scroll-class="active">
					<div class="imgBox">
						<img src="assets/images/crown/2ndrunner.jpg" onmouseover="smallImg()" onmouseout="normalImg()">
					</div>
				</div>
				<div class="crown_winners_info" data-scroll data-scroll-speed="1">
					<h4 data-scroll data-scroll-speed="0.5">Udeesha Singh</h4>
					<p data-scroll data-scroll-speed="-0.5">1st Runner Up</p>
				</div>
			</div>
		</div>
	</section>

	<section data-scroll-section class="crown-winner-section section m_disp_none" id="section04" data-scroll data-scroll-class="active" data-scroll-repeat="true">

		<div class="inner_content">

			<div class="fixed_title_header">
				<h2 data-splitting data-scroll data-scroll-class="active" data-scroll-repeat="false">Crown Winners<span class="year-span">20</span><span class="year-span">20</span></h2>
				<p data-splitting data-scroll data-scroll-class="active" data-scroll-repeat="false">Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do eiusmod tempor<br/> incididunt ut labore et dolore magna<br/> aliqua. Ut enim ad minim veniam,<br/> quis nostrud exercitation ullamco</p>
			</div>

			<div class="title-winner-row">
				<div class="swiper crown-winners">
		      <div class="swiper-wrapper">

		        <?php include "assets/partials/crown-winners.php" ?>

					</div>
					<div class="swiper-button-next swiper-button-next__c">
						<img src="assets/images/icons/up-arrow.png" class="arrow arrow-up">
					</div>
		      <div class="swiper-button-prev swiper-button-prev__c">
						<img src="assets/images/icons/up-arrow.png" class="arrow arrow-down">
					</div>
					<div class="swiper-pagination"></div>
				</div>

			</div>

		</div>

	</section>

	<!-- <section data-scroll-section class="newspaper_all" id="section05">
		<div class="inner_content">
			<div class="news_row">
				<div class="news_single">
					<img src="">
				</div>
			</div>
		</div>
	</section> -->

	<section data-scroll-section class="sharad_sundar_details section m_disp_none" id="section05" data-scroll data-scroll-class="active" data-scroll-repeat="true">
		<div class="inner_content">
			<p data-splitting data-scroll data-scroll-class="active" data-scroll-repeat="false">Sharadotsav is a festival that brings much joy and happiness and, naturally, it all<br/> shows in the way people look and feel - specially young girls who take special care<br/> to look their very best, make heads turn and enjoy all the attention.<br><br>And Sharad Sundari is all about capturing that mood and moment and selecting the<br> face with the most festive look of the season.</p>

			<div class="power_concept_row">
				<div class="col-6">
					<h2>Powered by</h2>
					<div class="row">
						<img src="assets/images/powered/abudhabi.png">
						<img src="assets/images/powered/parul-academy.png">
					</div>
				</div>

				<div class="col-6">
					<h2>Concept & Content</h2>
					<div class="row">
						<img src="assets/images/powered/resource-indica.png">
					</div>
				</div>
			</div>

			<div class="all_sponsers_row">
				<h2>Sponsered By</h2>
				<div class="sponser_slider_container">
					<div class="swiper sponser_slide">
			      <div class="swiper-wrapper">
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/6-ballygunge-place.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/aartage.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/cakes.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/fauji-bhai.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/greynomad.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/red-fm-93.5.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/shatabdi.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/surojit-kala.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/techno-global-hospital.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/tengerine.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/the-dreamers.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/the-wise-owl.png">
			        </div>
			        <div class="swiper-slide">
			        	<img src="assets/images/sponsers/tunus.png">
			        </div>
			      </div>
			      <!-- <div class="swiper-pagination"></div> -->
			    </div>
				</div>
			</div>

		</div>
	</section>

	<div id="cursor"></div>
	
	<?php include "assets/partials/footer.php" ?>
	
	<script type="text/javascript">
		const desk_section = document.querySelector(".c_disp_none")
		const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)

		function removeFromDomBasedOnWv(width){
		// if width is less or equal 480 ...
		    if(width <= 480){
		        // ...remove element from DOM
		        desk_section.parentNode.removeChild(mobileNav);
		    }
		return
		}
		removeFromDomBasedOnWv(viewportWidth)


		Splitting();
		const scroll = new LocomotiveScroll({
		    el: document.querySelector('[data-scroll-container]'),
		    smooth: true,
		    repeat: true,
		    direction: 'horizontal',
		    smartphone: {
		    	smooth: true,
			    direction: 'vertical',
		    },
		    tablet: {
		    	smooth: true
		    },
		});

		$("#scroll-next").click(function(){
			if($("#section01").hasClass('active')){
				var target = document.querySelector('#section02');
			}else if($("#section02").hasClass('active')){
				var target = document.querySelector('#section03');
			}else if($("#section03").hasClass('active')){
				var target = document.querySelector('#section04');
			}else if($("#section04").hasClass('active')){
				var target = document.querySelector('#section05');
			}
			scroll.scrollTo(target);
		});

		$("#sharad-sundari-logo").click(function(){
			var target = document.querySelector('#section01');
			scroll.scrollTo(target);
		});

		var cursor = document.querySelector("#cursor");
		var s_link = document.querySelectorAll("footer li a");
		document.addEventListener("mousemove", (e)=>{
			cursor.style.left = e.pageX + 'px';
			cursor.style.top = e.pageY + 'px';
		});

		function bigImg() {
		  cursor.style.transform = 'translate(-50%, -50%) scale(2)';
		}

		function normalImg() {
		  cursor.style.transform = 'translate(-50%, -50%) scale(1)';
		}

		function smallImg() {
		  cursor.style.transform = 'translate(-50%, -50%) scale(0.2)';
		}

		var swiper = new Swiper(".crown-winners", {
        direction: "vertical",
        slidesPerView: 1,
        spaceBetween: 30,
        mousewheel: true,
        loop: true,
        speed: 1000,
        navigation: {
          nextEl: ".swiper-button-next__c",
          prevEl: ".swiper-button-prev__c",
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        }
      });

		var swiper = new Swiper(".sponser_slide", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        speed: 1000,
        autoplay: {
          delay: 1500,
          disableOnInteraction: false,
        },
        // pagination: {
        //   el: ".swiper-pagination",
        //   clickable: true,
        // },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });

	</script>


	<script>
        (function(){
          function id(v){ return document.getElementById(v); }
          function loadbar() {
            var ovrl = id("overlay"),
                prog = id("progress"),
                stat = id("progstat"),
                img = document.images,
                c = 0,
                tot = img.length;
            if(tot == 0) return doneLoading();

            function imgLoaded(){
              c += 1;
              var perc = ((100/tot*c) << 0) +"%";
              prog.style.width = perc;
              stat.innerHTML = "Loading "+ perc;
              if(c===tot) return doneLoading();
            }
            function doneLoading(){
              ovrl.style.opacity = 0;
              setTimeout(function(){ 
                ovrl.style.display = "none";
              }, 1200);
            }
            for(var i=0; i<tot; i++) {
              var tImg     = new Image();
              tImg.onload  = imgLoaded;
              tImg.onerror = imgLoaded;
              tImg.src     = img[i].src;
            }    
          }
          document.addEventListener('DOMContentLoaded', loadbar, false);
        }());
    </script>

</body>
</html>