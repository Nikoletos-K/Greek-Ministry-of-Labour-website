<?php
  include 'db_connection.php';
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ΥΕΚΥ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/mdb.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v2.3.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
      $page = 'one'; include(dirname(__FILE__)."./header.php");
  ?>

  <!-- ========= Login form ============ -->


  <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <!-- <h2>Επικοινωνία</h2> -->
            <ol>
              <li><a href="index.html"><i class="icofont-home"></i></a></li>
              <li>Σύνδεση</li>
            </ol>
          </div>
        </div>
      </section><!-- End Breadcrumbs -->


      <section id="contact" class="contact">
        <div class="row justify-content-center ">
          <div class="col-lg-4 mt-5 mt-lg-0 d-flex">
            <form action="forms/login.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="section-title">
                  <br>
                  <h3 style="font-weight: bold; ">Σύνδεση</h3><br><hr>
                  <h7>Συμπληρώστε τo όνομα χρήστη και τον κωδικό σας για να αποκτήσετε πρόσβαση στον ιστοχώρο του Υπουργείου.</h7><br><hr>
                </div>
              </div>
              <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="form-group col-md-8">
                  <label for="username">Όνομα χρήστη</label>
                  <input type="text" class="form-control" name="username" id="username" data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε ένα όνομα χρήστη με τουλάχιστον 4 χαρακτήρες" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-8">
                    <label for="password">Κωδικός</label>
                    <input type="password" class="form-control" name="password" id="password" data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε έναν κωδικό με τουλάχιστον 4 χαρακτήρες" />
                    <div class="validate"></div>
                </div>

              </div>
              <hr><br>
              <div class="mb-3">
                <div class="loading">Φόρτωση</div>
                <div class="error-message"></div>
                <div class="sent-message">Επιτυχής σύνδεση!</div>
              </div>
              <div class="text-center">
                <button value="submit" name="submit" type="submit">Σύνδεση</button>
              </div>
            </form>
          </div>
        </div>
      </section>

  </main><!-- End #main -->


<!-- ======= Footer ======= -->
<?php
    include "./footer.php";
  ?>
<!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> 

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>