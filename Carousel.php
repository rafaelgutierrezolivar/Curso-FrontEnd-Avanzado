<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/carousel.css ">

<body>

<h2 style="text-align:center">Dibujos Luis Royo</h2>
<!-- Galería 1 -->
<div class="row">
  <div class="column">
    <img src="img/galeria/1.jpg"  onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/2.jpg"  onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/3.jpg"  onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/4.jpg"  onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<h2 style="text-align:center">Aviones y Aeropuertos</h2>
<!-- Galería 2 -->
<div class="row">
  <div class="column">
    <img src="img/galeria/5.jpg"  onclick="openModal_2();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/6.jpg"  onclick="openModal_2();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/7.jpg"  onclick="openModal_2();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/8.jpg"  onclick="openModal_2();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<h2 style="text-align:center">Playas de Asturias</h2>
<!-- Galería 3 -->
<div class="row">
  <div class="column">
    <img src="img/galeria/9.jpg"  onclick="openModal_3();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/10.jpg"  onclick="openModal_3();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/11.jpg"  onclick="openModal_3();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/galeria/12.jpg"  onclick="openModal_3();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
<!-- Modal 1 -->
<div id="chicas_modal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="img/galeria/1.jpg" style="width:100%">
    </div>

    <div class="mySlides swirlInZoomIn">
      <div class="numbertext">2 / 4</div>
      <img src="img/galeria/2.jpg" style="width:100%">
    </div>

    <div class="mySlides bounceIn">
      <div class="numbertext">3 / 4</div>
      <img src="img/galeria/3.jpg" style="width:100%">
    </div>
    
    <div class="mySlides flip">
      <div class="numbertext">4 / 4</div>
      <img src="img/galeria/4.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

  </div>
</div>

<!-- Modal 2 -->
<div id="aviones_modal" class="modal">
  <span class="close cursor" onclick="closeModal_2()">&times;</span>
  <div class="modal-content">

    <div class="mySlides2 fade">
      <div class="numbertext">1 / 4</div>
      <img src="img/galeria/5.jpg" style="width:100%">
    </div>

    <div class="mySlides2 swirlInZoomIn">
      <div class="numbertext">2 / 4</div>
      <img src="img/galeria/6.jpg" style="width:100%">
    </div>

    <div class="mySlides2 bounceIn">
      <div class="numbertext">3 / 4</div>
      <img src="img/galeria/7.jpg" style="width:100%">
    </div>
    
    <div class="mySlides2 flip">
      <div class="numbertext">4 / 4</div>
      <img src="img/galeria/8.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

  </div>
</div>

<!-- Modal 3 -->
<div id="paisajes_modal" class="modal">
  <span class="close cursor" onclick="closeModal_3()">&times;</span>
  <div class="modal-content">

    <div class="mySlides3 fade">
      <div class="numbertext">1 / 4</div>
      <img src="img/galeria/9.jpg" style="width:100%">
    </div>

    <div class="mySlides3 swirlInZoomIn">
      <div class="numbertext">2 / 4</div>
      <img src="img/galeria/10.jpg" style="width:100%">
    </div>

    <div class="mySlides3 bounceIn">
      <div class="numbertext">3 / 4</div>
      <img src="img/galeria/11.jpg" style="width:100%">
    </div>
    
    <div class="mySlides3 flip">
      <div class="numbertext">4 / 4</div>
      <img src="img/galeria/12.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

  </div>
</div>

<script src="js/carousel.js"></script>

    
</body>
</html>