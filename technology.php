<?php include 'header.php';?>				<!-- header end -->

			</div>

            
			
            <div class="banner dark-translucent-bg" style="background-image:url('images/technology.jpg'); background-position: 85% 27%;">
				
				<div class="container">
					<div class="row">
						<div class="col-md-8 text-center col-md-offset-2 pv-20">
							<h2 class="title object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100">Technologies</h2>
							<div class="separator object-non-visible mt-10 animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"></div>
							
						</div>
					</div>
				</div>
			</div>
            
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.php">Home</a></li>
						<li class="active">Technologies</li>
					</ol>
				</div>
			</div>
			<!-- breadcrumb end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container" style="padding-bottom: 0;">

				<div class="container">
					<div class="row">

					<div class="col-lg-8 col-lg-offset-2 text-center fc-tret" data-stlye="color_pulse" data-hotspot-icon="numerical" data-size="medium" data-color="accent-color" data-tooltip-func="hover" data-tooltip_shadow="none" data-animation="">
               
                <div>

                  <img src="images/technology-girl.jpg" width="800" height="">
                  <div class="fc-dot-pos1">
                  <div onclick="openModal();currentSlide(1)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Forehead 'worry lines'</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos2">
                  <div onclick="openModal();currentSlide(2)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Sun Spots-Neck</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos3">
                  <div onclick="openModal();currentSlide(3)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Acne Scars</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos4">
                  <div onclick="openModal();currentSlide(4)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Skin Lightening</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos5">
                  <div onclick="openModal();currentSlide(5)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Laser Hair Reduction</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos6">
                  <div onclick="openModal();currentSlide(6)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Laser Hair Reduction</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos7">
                  <div onclick="openModal();currentSlide(7)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Stretch Marks</div>
                  </div>
                  </div>
                  <div class="fc-dot-pos8">
                  <div onclick="openModal();currentSlide(8)" class="cust-fc-count pulse"><span>+</span></div>
                  <div class="nttip" data-tooltip-position="top" style="height: auto; width: 100px;">
                  <div class="inner">Scars</div>
                  </div>
                  </div>

                </div>
              </div>
						
					</div>
				</div>
			</section>
			<!-- main-container end -->
		<?php include'footer.php';?>

 

        <style>
        .cust-fc-count{
    background-color: #9c4d3c!important;
    height: 22px;
    width: 22px;
    border-radius: 100px;
    position: absolute;
    z-index: 100;
    cursor: pointer;
    line-height: 22px;
    text-align: center;
    color: #fff;
    font-size: 11px;
    display: block;
  }

.fc-dot-pos1{position: absolute!important; top: 25.8628%; left: 48.1893%; width: 30px; height: 30px;}
.fc-dot-pos2{position: absolute!important; top: 67.8628%; left: 56.1893%; width: 30px; height: 30px;}
.fc-dot-pos3{position: absolute!important; top: 47.8628%; left: 58.1893%; width: 30px; height: 30px;}
.fc-dot-pos4{position: absolute!important; top: 42.8628%; left: 39.1893%; width: 30px; height: 30px;}
.fc-dot-pos5{position: absolute!important; top: 91.8628%; left: 82.1893%; width: 30px; height: 30px;}
.fc-dot-pos6{position: absolute!important; top: 82.8628%; left: 87.1893%; width: 30px; height: 30px;}
.fc-dot-pos7{position: absolute!important; top: 91.8628%; left: 68.1893%; width: 30px; height: 30px;}
.fc-dot-pos8{position: absolute!important; top: 54.8628%; left: 56.1893%; width: 30px; height: 30px;}

.fc-tret[data-stlye="color_pulse"][data-hotspot-icon="numerical"] .cust-fc-count.pulse:before, .fc-tret[data-stlye="color_pulse"][data-hotspot-icon="plus_sign"] .cust-fc-count:before{
      -webkit-animation: pulsate 3s cubic-bezier(0.2,1,0.2,1) infinite;
  animation: pulsate 3s cubic-bezier(0.2,1,0.2,1) infinite;
}
.fc-tret[data-stlye="color_pulse"] .cust-fc-count:before {
  display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    content: '';
    width: 22px;
    height: 22px;
    margin: -11px auto auto -11px;
    -webkit-transform-origin: 50% 50%;
    transform-origin: 50% 50%;
    border-radius: 50%;
    background-color: inherit;
    opacity: 1;
    z-index: -1;
    pointer-events: none;
}

.fc-tret .nttip[data-tooltip-position="top"] {
    margin-top: -20px;
    margin-left: 6px;
    -ms-transform: translateX(-50%) translateY(-100%);
    transform: translateX(-50%) translateY(-100%);
    -webkit-transform: translateX(-50%) translateY(-100%);
}
.fc-tret .nttip {
    position: relative;
    display: block;
    opacity: 0;
    z-index: 900;
    cursor: default;
    background-color: #e5e5e5;
    max-width: 250px;
    transition: opacity 0.3s;
    -webkit-transition: opacity 0.3s;
    line-height: 22px;
    font-size: 14px;
    color: #666;
    border-radius: 10px;
    pointer-events: none;
}
.fc-tret[data-tooltip-func="hover"] .cust-fc-count:hover+.nttip {
    opacity: 1;
  }

  .fc-tret[data-tooltip-func="hover"] .cust-fc-count:hover
span {
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
  }

  .fc-tret[data-tooltip-func="click"] .cust-fc-count.open
span {
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
  }

  .fc-tret[data-animation="true"] {
    opacity: 0;
    transform: translateY(80px);
    -webkit-transform: translateY(80px);
  }

  .fc-tret[data-animation="true"] .animated-in {
    -webkit-animation: nectarBounceIn .8s ease-out forwards;
    animation: nectarBounceIn .8s ease-out forwards;
  }

  .fc-tret[data-tooltip-func="always_show"] .nttip {
    opacity: 1;
  }



@-webkit-keyframes
pulsate {
  from {
    opacity: 1;
    transform: scale(1);
  }

  to {
    opacity: 0;
    transform: scale(3);
  }
}

@keyframes
pulsate {
  from {
    opacity: 1;
    transform: scale(1);
  }

  to {
    opacity: 0;
    transform: scale(3);
  }
}

@keyframes
nectarBounceIn {
  0% {
    transform: translateY(80px);
    opacity: 0;
  }

  33% {
    transform: translateY(-13px);
    opacity: 1;
  }

  66% {
    transform: translateY(4px);
    opacity: 1;
  }

  100% {
    transform: translateY(0px);
    opacity: 1;
  }
}

@-webkit-keyframes
nectarBounceIn {
  0% {
    transform: translateY(80px);
    opacity: 0;
  }

  33% {
    transform: translateY(-13px);
    opacity: 1;
  }

  66% {
    transform: translateY(4px);
    opacity: 1;
  }

  100% {
    transform: translateY(0px);
    opacity: 1;
  }
}
        </style>

        <style type="text/css">
          /* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.75);
}

/* Modal Content */
.modal-content1 {
  position: relative;
  margin: auto;
  padding: 0;
  width: 800px;
  max-width: 1200px;
}

@media only screen and (max-width: 991px){
  .modal-content1 {
    width: 80%;
  }
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}


.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

        </style>



        <div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content1">

    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/e_mXpqQCEB0?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mySlides">
     <iframe width="100%" height="315" src="https://www.youtube.com/embed/xgJe7zGAB0E?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/o3BmdrKhNdU?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    
    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/EQNziJQ45Kw?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/YGER2q34V20?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZWQE-panaIo?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/-u11ApJXAB4?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="mySlides">
      <iframe width="100%" height="315" src="https://www.youtube.com/embed/-u11ApJXAB4?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>

    

  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
 
}
</script>

	
	</body> 

