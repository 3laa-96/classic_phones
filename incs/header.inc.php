<?php
// session_start();
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Library</title>
  <link href="<?php echo BASEURL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <script src="<?php echo BASEURL; ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo BASEURL; ?>assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/fa.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/style.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">

  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>


</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand nokia" href="#">NOKIA</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav w-100">
          <a class="nav-link <?php echo (isset($currentTab) && $currentTab == "home") ? "active" : ""; ?>"
            aria-current="page" href="<?php echo BASEURL; ?>index.php">
            <i class="fas fa-home" style="color: #e7ebf4;"></i> Home</a>
          <a class="nav-link <?php echo (isset($currentTab) && $currentTab == "phones") ? "active" : ""; ?>"
            href="<?php echo BASEURL; ?>phones.php">
            <i class="fas fa-mobile"></i> Phones</a>

        </div>
      </div>
    </div>
  </nav>