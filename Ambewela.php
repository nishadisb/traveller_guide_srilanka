<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63376.10827884298!2d80.76104314331224!3d6.889791775444527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3879b9d429d69%3A0x3428d075cfa9a476!2sAmbewela%20Farm!5e0!3m2!1sen!2slk!4v1588314293608!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/ambewela2.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/ambewela3.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/ambewela4.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/ambewela5.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/ambewela6.jpg" style="width:50%">
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
<h1>Ambewela</h1>
<p>Ambewela is a small town, or a hill station, located in the Nuwara Eliya District of Sri Lanka. The area is also sometimes called "Little New Zealand". The town is situated approximately 17 km (11 mi) south-east of the district capital Nuwara Eliya. Ambewela is also a service center to the New Galway tea planting district.<br>

Due to the high altitude of 6,064 ft (1,848 m) the mean annual temperature in the area is below 17.5 °C (63.5 °F), while frost is common during Winter. Ambewela is also popular for of being the highest (in altitude) and widest grassland in Sri Lanka.[1] Mammals such as the Sambar Deer, Leopard dominate the majority of the forest cover around the area.<br>
Ambewela situated en route to the Horton Plains National Park and is famous scenic landscapes, Rhododendron arboreum flowers, and the World's End, which is a 1,219 m (3,999 ft) deep cliff. Similar to Horton Plains and Ohiya, this site is also one of the Important Bird Areas of Sri Lanka, making the area a popular location for birdwatching as well.
</p></div>

</body>
</html>
