<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253229.12400636036!2d80.57060135509523!3d7.3869107146832595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35f659beee899%3A0x3bf7cc23068a888d!2sKnuckles!5e0!3m2!1sen!2slk!4v1584857953079!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  <link rel="stylesheet" type="text/css" href="css/css2img.css">

	  </div>
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/knu1.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/knu2.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/knu3.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/knu4.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/knu5.jpg" style="width:50%">
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
<h1>Pitawala Pathana</h1>
<p>The range, with its grasslands, rugged peaks, meandering roads and cascading streams and waterfalls are a vibrant biodiversity zone. Despite being only 0.03% of the country's area, this zone consists of 34% of Sri Lanka's endemic vegetation. The forest cover of the region includes dry evergreen forests, montane forests, sub-montane forests, dry and wet savanna etc.

The range faces two significant threats: constant cultivation of cardamom has deprived the forest of its vegetation cover, and a plant species called Mist Flower, which spreads into the woods and destroys the vegetation. However, there are some local and global initiatives to preserve and restore the cover. Currently, watershed conservation and restoration project is being undertaken here full-fledged.

The range makes for an idyllic hiking zone. Passionate hikers from all over the world consider the Knuckles trek as their goal. Among the popular hiking trails are Mini world's end from Deanston; Trail to Dothalugala from Deanston; Trail to Nitro Caves from Corbet's Gap; Trail to Augallena cave via Thangappuwa from Corbet's Gap; Trail to Kalupahana from "Meemure" village. These are not allowed without a local guide.</p>

<h2>Flora</h2>
A large extent of Sri Lanka's vegetation is found in montane forests of the Knuckles Mountain Range. These include a variety of trees. Shrubs and herbs. The most common cultivation is that of cardamom and cinnamon.

<h2>Fauna</h2>
<p>
This range is home to a wide range of mammals, including wild boar, spotted deer, giant squirrel, barking deer, purple-faced leaf monkey, mongoose and porcupine. Apart from these, various species of lizards and birds are also here</p></div>

</body>
</html>
