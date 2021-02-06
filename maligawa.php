<html>
<head>
	<div class="sembu clearfix">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.875688259186!2d80.63955808233824!3d7.293800934305805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662db149fbf5%3A0x8165d70ac115e887!2sTemple%20of%20the%20Sacred%20Tooth%20Relic!5e0!3m2!1sen!2slk!4v1586060740948!5m2!1sen!2slk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	  </div>

    <link rel="stylesheet" type="text/css" href="css/css2img.css">
</head>
<body bgcolor="#e6fff7">

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/maligawa2.jpg"SS>
  <div class="text">Most</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/maligawa3.jpg" style="width:50%">
  <div class="text">Beautiful</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/maligawa4.jpg" style="width:50%">
  <div class="text">Lake</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/maligawa5.jpg" style="width:50%">
  <div class="text">In</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/maligawa6.jpg" style="width:50%">
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
<h1>Sri Dalada Maligawa</h1>
<p>The Temple of the Tooth Relic of Lord Buddha, sri dalada Maligawa is in the centre of the city, the highest venerated religious place with steeped in cultural heritage attracting the highest respect of the Buddhists as well as the other religions all over the world. The beautiful magnificent temple was built by late king Vimaladharmasooriya 1st in 1592 AD.<br>

The Relic Shrine is approached by a large draw-bridge over the moat and through a beautifully decorated frontispiece. A tunnel” ambarawa”, leads to the main shrine complex, having a central courtyard surrounded by storied structures.<br>

The two-storied open pillared hall in front constitutes the area where visitors and devotees gather. The lower hall has its central part set apart for the beating of drums and other forms of traditional music performed during ritual service hours. On either side are the Pallemale Vihara constructed by king Kirti Sri Rajasimha and the Octagon (Pattirippuva) built by the last king, Sri Vikrama Rajasimha on one side and the small “stupa” supposed to contain the Bowl Relic of the Buddha on the other. The storied structures to the right and left of the shrine, constitute the residence quarters of the monks engaged during daily service (Tevava), the conference hall, the Library and the Office of the Diyawadana Nilame.The recognition of the sacred temple it has been declared kandy as a world heritage city by UNESCO. Ven.Monks of the two chapters of Malwattu and Asgiriya conduct daily worships in the inner chamber of the temple. Rituals are performing 3 times daily at dawn, at noon and in the evening. On Wednesdays, there is a symbolic bathing of the sacred relic with an herbal preparation from scented water and fragrant flowers called “Nanumura Mangalya”.<br>

This holy water is believed to contain healing powers and it is distributed among those present.</p>

</div>

</body>
</html>
