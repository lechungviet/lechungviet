	<!--Slider-->
    <div class="slideshow-container">
	<div class="mySlides fade">
	<video autoplay muted loop id="myVideo">
  <source src="img/2040056401.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
	<button id="myBtn" onclick="myFunction()">Pause</button>
	

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
	</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/banner-festival-fashion-1.jpg" style="width:100%">
  <div class="text">FESTIVAL FASHION</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/megamenutype1_img6.jpg" style="width:100%">
  <div class="text">SUN KISSED</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/slideshow_2.jpg" style="width:100%">
  <div class="text">SUMMER SUNSET</div>
</div>
		
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/slideshow_3.jpg" style="width:100%">
  <div class="text">ON THE STREET</div>
</div>
		
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="img/slideshow_5.jpg" style="width:100%">
  <div class="text">FIELD FLOWER</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 3;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
	</div>
	<!--End slider-->
