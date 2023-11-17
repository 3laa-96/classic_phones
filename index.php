<?php
$currentTab = "home";
require_once('incs/header.inc.php');
require_once('incs/functions.inc.php');
function exception_error_handler($severity, $message, $file, $line)
{
  throw new ErrorException($message, 0, $severity, $file, $line);
}

set_error_handler("exception_error_handler");
try {
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

  <div class="container pt-5">
    <p>Welcome to a nostalgic journey through the iconic era of mobile communication! Our website is a tribute to the
      timeless classics—the legendary Nokia phones that defined an entire generation from the year 2000 to 2009. In an
      age when mobile phones were becoming an essential part of our daily lives, Nokia stood at the forefront, setting
      the standard for durability, reliability, and innovation.</p>

    <p> Step back in time with us as we showcase a curated collection of Nokia mobile phones that captured the hearts of
      millions. From the sturdy Nokia 3310 to the stylish Nokia 8800, each device tells a story of innovation,
      resilience, and a touch of retro charm.</p>

  </div>

  <div class="container">
    <div class="d-flex flex-column align-items-center pb-5">
      <h3 class="my-5 section-title">New Arrivals</h3>
      <div class="row justify-content-center px-3">
        <div class="col-6 col-md-4  mb-3 phone active">
          <a href="<?php echo BASEURL; ?>phone.php?phone=2">
            <div class="card">
              <img src="assets\images\phones\nokia-5310-used\5310-1.jpg" class="card-img-top" alt="image" />
              <span class="badge-new badge bg-danger text-capitalize "> New</span>
              <div class="card-body">
                <h5 class="card-title pt-4">
                  <spam class="nokia">NOKIA </spam> 5310
                </h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4  mb-3 phone active">
          <a href="<?php echo BASEURL; ?>phone.php?phone=6">
            <div class="card">
              <img src="assets\images\phones\nokia-e71-used\e71-1.jpg" class="card-img-top" alt="image" />
              <span class="badge-new badge bg-danger text-capitalize "> New</span>
              <div class="card-body">
                <h5 class="card-title pt-4">
                  <spam class="nokia">NOKIA </spam> e71
                </h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-6 col-md-4  mb-3 phone active">
          <a href="<?php echo BASEURL; ?>phone.php?phone=8">
            <div class="card">
              <img src="assets\images\phones\nokia-8800-used\8800-1.jpg" class="card-img-top" alt="image" />
              <span class="badge-new badge bg-danger text-capitalize "> New</span>
              <div class="card-body">
                <h5 class="card-title pt-4">
                  <spam class="nokia">NOKIA </spam> 8800
                </h5>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
  <div class="alert alert-secondary m-5 text-center fs-5 text-secondary nokia ">AN ERA WHERE PHONES HAD STYLE AND
    CHARACTER
  </div>

  <?php
  require_once('incs/footer.inc.php');
} catch (Exception $th) {
  logError($th);
}
?>