<?php

  include 'db_connection.php';

  session_start();

  // if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] === true){
  //   // header("location:../profile/profile.php");
  //   exit;
  // }
?>
<?php
$errors = array(); 

// $conn = mysqli_connect('127.0.0.1', 'root', '', 'sdi1700038');

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Παρακαλώ συμπληρώστε το όνομα χρήστη");
  }
  if (empty($password)) {
    array_push($errors, "Παρακαλώ συμπληρώστε τον κωδικό σας");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM simpleuser WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($results);
    $active = $row['active'];  

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['login_user'] = true;
      $_SESSION["name"] = $row["name"];
      $_SESSION["email"] = $row["email"];
      $_SESSION["phone"] = $row["phone"];
      $_SESSION["afm"] = $row["afm"];
      $_SESSION["role"] = $row["role"];
      // header('location:../profile/profile.php');
    }else {
     array_push($errors, "Λανθασμένος συνδιασμός όνομα χρήστη και κωδικού");
      
    }
  }
}

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

<div class="container login-form">
  <br>  <p class="text-center"> <a href="http://bootstrap-ecommerce.com/"></a></p>
  <hr>

  <div class="card bg-light">
  <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center" >Είσοδος Χρήστη</h4>
    <!-- <p class="text-center">Get started with your free account</p> -->
    <p>
      <a href="" class="btn btn-block btn-taxis "> Μέσω TaxisNet</a>
    </p>
    <p class="divider-text">
          <span class="bg-light">Ή</span>
    </p>
    <form action="login.php"  method="post">
      <?php include('errors.php'); ?>

      <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
            <input name="username" class="form-control" placeholder="Όνομα χρήστη" type="text">
      </div> <!-- form-group// -->

      <div class="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
          <input name="password" class="form-control" placeholder="Κωδικός" type="password">
      </div> <!-- form-group// -->                                   
      <div class="form-group">

          <button type="submit" name="login_user" class="btn btn-primary btn-block btn-sub"> Είσοδος </button>
      </div> <!-- form-group// -->      
      <p class="text-center">Δεν έχετε λογαριασμό; <a href="register.php">Εγγραφή</a> </p>                                                                 
    </form>
  </article>
  </div> <!-- card.// -->

</div> 
<!--container end.//-->

  <!-- ========= End of login form ============ -->


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