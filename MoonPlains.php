<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5592984287505!2d80.81797831477303!3d6.943152994983636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae47f663dfaef3d%3A0x9da34e3b3dfcca03!2sMoon%20Plains!5e0!3m2!1sen!2slk!4v1588341574910!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/MoonPlains2.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/MoonPlains3.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/MoonPlains4.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/MoonPlains5.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/MoonPlains6.jpg" style="width:50%">
  <div class="text">Sri Lanka</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
   <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<script>
var slideIndex = 1;
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
<div class="pr">
<h1>Moon Plains</h1>
<p>
  Amongst the jagged peaks of the Central Highlands of Sri Lanka; are the surprisingly beautiful and vast slopes of the Moon Plains. Located just off the Nuwara Eliya city; this most recently opened attraction, was once the dump site of the tons of garbage used by the dwellers of the nearby city. It was cleaned and reconditioned in 2010, and is now classified as an Agricultural and Environmental Tourism Zone by the Municipality of Nuwara Eliya.<br>

Covered in a verdant carpet of healthy grass; the Moon Plains are home to many wildlife elk, wild buffaloes, dear, the occasional leopard and many types of birds. However, the main point of interest is the viewpoint of the ‘Mini World’s End’. A location on the apex of a sharply dropping cliff, that gives a 360º view of the surrounding landscape.<br>

As such, the Moon Plains prove to be an ideal place for a hike or a cycling tour, with beautiful landscapes galore. The view from the Mini World’s Peak at sunrise is especially spectacular; with the golden glow of the sun, mixing with the mist that wreaths the peaks and valleys surrounding the area. This photo-worthy location is not to missed during a visit.
<br>

 It is a Wide open area with the chances of seeing wild boars, cows, buffaloes, deer and also a total of 105 bird species are recorded in the area of which 16 are endemic to Sri Lanka.
</p></div>
</body>
</html>
