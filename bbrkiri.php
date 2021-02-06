

<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7280682570936!2d80.69681241477629!3d7.495245994593564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35a6b4c729eab%3A0x4ac046263bcd5fd6!2sBambarakiri%20Ella!5e0!3m2!1sen!2slk!4v1586021257820!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/bbr1.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/knu2.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/Bambarakiri-Ella-Waterfalls-in-Sri-Lanka.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/bbr4.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/bbr5.jpg" style="width:50%">
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
<h1>Bambarakiri Ella</h1>
<p>The beautiful Bambarakiri Ella waterfalls are within the Matale district of the central province, near the Rattota town. The falls are mighty and at the same time, pleasant. Two falls subside here. A small fall is hidden inside the jungle and is named ‘Kuda Bambarakiri Ella’ where ‘Kuda’ implies ‘little’. The primary falls allow tourists to sit peacefully and enjoy the sound of splashing water.
<br>
After turning away from the A4 Highway at Kalupahana Junction, the route to the waterfall is a nostalgic drive through the massive unchanging mountains and lush vegetation that marks the untouched areas of Sri Lanka. Many cool streams and tributaries of rivers run right underneath the road or within sight of the traveller.
<br>
<br>
Not long after a passing a quaint little village known as the Weerakoon Village, an old Colonial era sign can be seen directing travellers to proceed on foot. The short walk after this sign is rather peaceful, being surrounded by nature, and the path also passes a small pretty bridge that lies over a stream that is perfect for a few photographs. After the bridge the path grows quite steep as it travels through the pine forest; and good boots or rubber soled shoes with a good grip are a necessity to avoid dangerous falls, as it is very slippery. After walking for a very short distance the base of the waterfall can be reached.</p>

</div>

</body>
</html>
