<?php
$currentTab = "phones";
require_once('incs/header.inc.php');
require_once('incs/functions.inc.php');

function exception_error_handler($severity, $message, $file, $line)
{
  throw new ErrorException($message, 0, $severity, $file, $line);
}

set_error_handler("exception_error_handler");

try {
  if (isset($_GET["phone"]) && !empty($_GET["phone"])) {
    $key = $_GET["phone"];
    $pdo = connectPDO();
    $sql = "SELECT id, phone_model_year as year, phone_name as name, phone_image_path as image, phone_description
        FROM phone_details
         WHERE id= :phone_id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":phone_id", $key, PDO::PARAM_INT);
    $stmt->execute();
    $b = $stmt->fetch(PDO::FETCH_ASSOC);
  } else {
    echo "phone not found ";
    exit();
  }
  ?>
  <div class="container my-5 product-details">

    <div class="row">
      <!-- <div class="col-12 col-lg-9"> -->
      <div class="col-lg-6">
        <div class="row">
          <div class="col-12">
            <div id="carouselControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselControls" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
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
          </div>
          <div class="col-4">
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] ?>" class="float-start py-3 gallery-image img-fluid"
              style="max-height: 500px; width: auto" alt="<?php $b["name"] . '.jpg' ?>" />
          </div>
          <div class="col-4">
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] ?>" class="float-start py-3 gallery-image img-fluid"
              style="max-height: 500px; width: auto" alt="<?php $b["name"] . '.jpg' ?>" />
          </div>
          <div class="col-4">
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] ?>" class="float-start py-3 gallery-image img-fluid"
              style="max-height: 500px; width: auto" alt="<?php $b["name"] . '.jpg' ?>" />
          </div>
        </div>
        <!-- <p>
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] ?>" class="float-start p-3"
              style="max-height: 500px; width: auto" alt="<?php $b["name"] . '.jpg' ?>" />
          </p> -->


      </div>
      <div class="col-lg-6">
        <h1 class="py-3 pt-lg-0 ">
          <?php echo $b["name"] ?>
        </h1>
        <h5 class="py-2 ">
          <?php echo $b["year"]; ?>.
        </h5>
        <h5 class="border-top ">
          $ 150
        </h5>
        <div class="pb-3">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
        </div>
        <p class="mb-4 border-top">
          <?php
          echo nl2br($b["phone_description"]);
          ?>
        </p>

        <div class="btn btn-outline-warning text-capitalize fs-5 " id="buyBtn" data-bs-toggle="modal"
          data-bs-target="#buyModal">Buy Now</div>
        <div class="btn btn-outline-warning text-capitalize fs-5 ms-2" id="buyBtn" data-bs-toggle="modal"
          data-bs-target="#buyModal">Add To Cart</div>
      </div>
    </div>
    <!-- <div class="col-12 col-lg-3">
      <div class="row gx-2">
        <div class="col-6 col-md-6 col-lg-12 mb-3">
          <div class="card phone-aside mx-md-auto h-100">
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] . '2.jpg' ?>" class="card-img-top" />
          </div>
        </div>
        <div class="col-6 col-md-6 col-lg-12 mb-3">
          <div class="card phone-aside mx-md-auto h-100">
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] . '3.jpg' ?>" class="card-img-top" />
          </div>
        </div>
      </div>
    </div> -->
    <!-- </div> -->
  </div>
  <!-- Modal -->
  <div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="buyModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="buyModalLabel">Buy Now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="process_buy.php">
            <!-- Assuming process_buy.php is the script to handle the form data -->
            <div class="mb-3">
              <label for="firstName" class="form-label">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="mb-3">
              <label for="lastName" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <input type="hidden" name="productId" value="<?php echo $b['id']; ?>">
            <!-- Passing product id as a hidden field -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once('incs/footer.inc.php');
} catch (Exception $th) {
  logError($th);
}
?>