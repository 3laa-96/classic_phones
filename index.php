<?php
$currentTab = "home";
require_once('incs/header.inc.php');
?>
<div id="carouselControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="0" class="active" aria-current="true"
      aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="assets/images/carousel/carousel1.jpg" class="d-block w-100" alt="..." />
    </div>
    <div class="carousel-item active">
      <img src="assets/images/carousel/carousel2.jpg" class="d-block w-100" alt="..." />
    </div>
    <div class="carousel-item">
      <img src="assets/images/carousel/carousel3.jpg" class="d-block w-100" alt="..." />
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container py-5">
  <p>Welcome to a nostalgic journey through the iconic era of mobile communication! Our website is a tribute to the
    timeless classics—the legendary Nokia phones that defined an entire generation from the year 2000 to 2009. In an
    age when mobile phones were becoming an essential part of our daily lives, Nokia stood at the forefront, setting
    the standard for durability, reliability, and innovation.</p>

  <p> Step back in time with us as we showcase a curated collection of Nokia mobile phones that captured the hearts of
    millions. From the sturdy Nokia 3310 to the stylish Nokia 8800, each device tells a story of innovation,
    resilience, and a touch of retro charm.</p>

</div>
<div class="alert alert-secondary my-5 text-center fs-4 text-secondary nokia ">AN ERA WHERE PHONES HAD STYLE AND
  CHARACTER
</div>

<?php
require_once('incs/footer.inc.php');
?>