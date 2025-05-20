function openModal() {
    document.getElementById("chicas_modal").style.display = "block";
  }
  function closeModal() {
    document.getElementById("chicas_modal").style.display = "none";
  }
  
  function openModal_2() {
    document.getElementById("aviones_modal").style.display = "block";
  }
  function closeModal_2() {
    document.getElementById("aviones_modal").style.display = "none";
  }
  
  function openModal_3() {
    document.getElementById("paisajes_modal").style.display = "block";
  }
  function closeModal_3() {
    document.getElementById("paisajes_modal").style.display = "none";
  }
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
    var slides2 = document.getElementsByClassName("mySlides2");
    var slides3 = document.getElementsByClassName("mySlides3");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > 4) {slideIndex = 1}
    if (n < 1) {slideIndex = 4}
    for (i = 0; i < 4; i++) {
        slides[i].style.display = "none";
        slides2[i].style.display = "none";
        slides3[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    slides2[slideIndex-1].style.display = "block";
    slides3[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
  }
