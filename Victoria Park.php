<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.340843605508!2d80.7660158147732!3d6.969056294965324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3805288fa714b%3A0xbb44afbf5324004c!2sVictoria%20Park!5e0!3m2!1sen!2slk!4v1588313674445!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

  
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/victoria1.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/victoria2.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/victoria3.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/victoria4.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/victoria5.jpg" style="width:50%">
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
<h1>Victoria Park</h1>
<p>The park is said to be named to commemorate the 60th Jubilee Coronation of Queen Victoria in the year 1897. Originally this was used as the research field of Haggala Botanical Garden. 27 acres in size, the park is home to many foreign species of trees. The location is a frequently-visited destination of birdwatchers as the serene atmosphere provides the opportunity to observe a large number of rare birds. There is also plenty of space for kids to play. The park comes alive with flowers during the month of April. Get a breath of fresh mountain air while relaxing in the warmth of nature at Victoria Park, Nuwara Eliya.<br>
  Victoria Park is old, as in extremely old. It was initially the research field for the Hakgala Botanical Garden, but was renamed after Queen Victoria in 1897. It covers a pretty large area spanning over 25 acres. The park is open year-round but the best times to visit it is during the flowering seasons from March to May and August to September.<br>

It is not in the same league as the Botanical Gardens but is worth a detour for a quiet peaceful stroll through the manicured lawns and maintained flower beds. Local courting couples seek out the tranquility and seclusion of the park. It is funny to see signs telling them to act decently in public. Obviously some couples have got carried away by the moment in the past and caused offence.

Most young couples have no privacy at home as there are normally a lot of people living under the same roof. They go in search of somewhere more serine and less congested to hold hands, kiss and get to know each other like most teenagers around the world.
</p></div>

</body>
</html>
