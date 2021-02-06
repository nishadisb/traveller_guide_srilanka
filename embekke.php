
<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.2006048720878!2d80.56552241477459!3d7.217944394789253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae36ef317bb65e5%3A0x6787aeef212af953!2zRW1iZWtrZSBEZXZhbGF5YSAoIOC2h-C2uOC3iuC2tuC3kOC2muC3iuC2muC3miDgtq_gt5rgt4Dgt4_gtr3gtrogKQ!5e0!3m2!1sen!2slk!4v1586663405291!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/embekke2.jpg" style="width:50%"">
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/embekke3.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/embekke4.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/embekke5.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/embekke6.jpg" style="width:50%">
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
<h1>Embekka Devalaya</h1>
<p>Embekka Devalaya is situated in Medapalata Korale of Udunuwara in Kandy district. This is a sheltered place used to rest during long pilgrimage or long journeys in ancient days of Sri Lanka. This Ambalama is said to be built during A.D. 1341 - 1357 by the King Bhuwanekabhahu IV.
</p><br>
<p>
  It is said that some of the wood work utilised for the "Drummers' Hall" came from an abandoned "Royal Audience Hall" at Gampola. There is every possibility the hall has seen repairs during the reigns of the Sinhalese Kings of Kandy. The carvings, which adorn the wooden pillars of the drummers' hall, as well as the "Vahalkada" (the entrance porch of the devala, which is said to be older) are some of the best examples of Sinhalese art. The base of the wooden pillars are octagonal shaped while their top end with four leaves stacked in a square.The most noted and famous carvings out of them are the entwined swans, double headed eagles, entwined rope designs, breast-feeding image, a soldier fighting on horseback, female dancers, wrestlers, women emanating from a vein, bird-human hybrid, elephant-bull hybrid and elephant-lion hybrid.

The roof itself has significant features. The rafters all slant from above towards the incoming visitor are fixed together and kept in position by a "Madol Kurupawa", a kind of a giant catch pin the like of which we do not find elsewhere. When we consider the carvings of the entire temple there are about 125 series of decorations, 256 liyawela type designs, and 64 lotus designs, 30 decorative patterns and roof designs, ending up in 514 unique designs.
</p>


</body>
</html>
