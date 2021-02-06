<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.698600609029!2d80.81933971477292!3d6.92658489499535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae47f4e2989ad8f%3A0xd9ed0d9523eaca78!2sHakgala%20Botanical%20Gardens!5e0!3m2!1sen!2slk!4v1588325002609!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/hakgala2.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/hagkala3.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/hagkala4.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/hagkala5.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/hagkala6.jpg" style="width:50%">
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
<h1>Hakgala Botanical Garden</h1>
<p>
  Hakgala Botanical Garden is the second largest garden among the five botanical gardens in Sri Lanka and is contiguous to Hakgala Strict Nature Reserve, which is the home to a variety of wild life, including bears, monkeys and birds. Situated some 10 kilometres South of Nuwara Eliya, the road to Hakgala along the Badulla road is a pleasant downhill drive, mostly through pine forests. The comfortable cool weather that prevails throughout the year compliments the exotic flora and fauna, creating a true paradise. It boasts of over 10,000 species of flora.<br>
  The main sections of the garden are the rock garden, water garden, fern garden, Japanese garden and the seed room. Hakgala is a temperate hill-country garden, where the lovely low-country lotus and water lily mingles in their serene simplicity with sophisticated English roses, pre-historic looking ferns, and endemic orchids. The intimidating Hakgala rock provides an awe inspiring backdrop to the garden, rising 450 meters over it. According to the legends, the history of Hakgala Gardens dates back to the time of Ramayanaya; an epic love story of the east. 

<br>

</p></div>

</body>
</html>
