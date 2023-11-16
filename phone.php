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
  <div class="container my-5">
    <h1>
      <?php echo $b["name"] ?>
    </h1>
    <em>
      <?php echo $b["year"]; ?>.
    </em>
    <div class="row">
      <div class="col-12 col-lg-9">
        <div class="col-lg-12">
          <p>
            <img src="<?php echo PHONE_IMGS_PATH . $b["image"] ?>" class="float-start p-3"
              style="max-height: 500px; width: auto" alt="<?php $b["name"] . '.jpg' ?>" />
          </p>
        </div>
        <div class="col-lg-12">
          <p class="my-5">
            <?php
            echo nl2br($b["phone_description"]);
            ?>
          </p>
          <div class="btn btn-outline-warning text-capitalize px-5 fs-2" id="buyBtn" data-bs-toggle="modal"
            data-bs-target="#buyModal">buy</div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
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
      </div>
    </div>
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