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

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">info@ypakp.gr</a>
        <i class="icofont-phone"></i> +30 213 151 6649
      </div>
       <!-- <div class="social-links"> -->
        <a href="login.php"><button class="get-started-btn scrollto">Σύνδεση</button></a>
        <a href="register.php"><button  class="get-started-btn scrollto">Εγγραφή</button></a>
        <!-- <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a> -->
      <!-- </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    
    <div class="navbar-br">
      <div class="container align-items-center">
        <nav class=" sec-navbar navbar ">
          <h1 class="logo mr-auto navbar-brand">
            <a href="index.php" class="mr-auto "><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <a href="index.php" >Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</a></h1>
          <form class="form-inline">
            <div class="md-form my-0 search-engine  ">
              <i class="icofont-ui-search search-icon"></i>
              <input class="form-control mr-sm-2 input-fr" type="text" placeholder="Αναζήτηση" aria-label="Search">
            </div>
          </form>
        </nav>
      </div>
    </div>
    
    
    <div class="container d-flex align-items-center"> 
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Αρχική</a></li>
          <li class="drop-down"><a href="#">Εργοδότης</a>
            <ul>
              <li><a href="#">Πρόσλήψεις</a></li>
              <li class="drop-down"><a href="#">COVID-19</a>
                <ul>
                  <li><a href="#">Χορήγηση άδειας ειδικού σκοπού</a></li>
                  <li><a href="#">Αναστολή σύμβασης εργαζομένου</a></li>
                  <li><a href="#">Διαχείρηση κρούσματος</a></li>
                  <li><a href="#">Μέτρα προφύλαξης</a></li>
                  <li><a href="#">Αποζημιώσεις</a></li>
                  <li><a href="#">Άλλα θέματα COVID-19</a></li>
                </ul>
              </li>
              <li><a href="#">Νέα επιχείρηση</a></li>
              <li><a href="#">Ασφάλιση εργαζομένου</a></li>
              <li><a href="#">Απολύσεις</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Εργαζόμενος</a>
            <ul>
              <li><a href="#">Μισθοδοσία</a></li>
              <li class="drop-down"><a href="#">COVID-19</a>
                <ul>
                  <li><a href="#">Άδεια ειδικού σκοπού</a></li>
                  <li><a href="#">Αναστολή εργασίας</a></li>
                  <li><a href="#">Τηλεργασία</a></li>
                  <li><a href="#">Μέτρα προφύλαξης</a></li>
                  <li><a href="#">Αποζημιώσεις</a></li>
                  <li><a href="#">Άλλα θέματα COVID-19</a></li>
                </ul>
              </li>
              <li><a href="#">Επιδόματα</a></li>
              <li><a href="#">Άδειες</a></li>
              <li><a href="#">Απόλυση</a></li>
              <li><a href="#">Ασφάλιση</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Εργασία και Ασφάλιση</a>
            <ul>
              <li><a href="#">Επιχειρήσεις</a></li>
              <li><a href="#">Συνταξιοδότηση</a></li>
              <li><a href="#">Ανεργία</a></li>
              <li><a href="#">Ελεύθεροι Επαγγελματίες</a></li>
              <li><a href="#">ΑΜΕΑ</a></li>
              <li><a href="#">Εποχιακή Απασχόληση</a></li>
              <li><a href="#">Κοινωνική Ασφάλιση</a></li>
              <li><a href="#">Επιδόματα</a></li>
              <li><a href="#">Εργασία στην ΕΕ</a></li>
              <li><a href="#">Διεθνείς υποθέσεις</a></li>
            </ul>
          </li>
          <li class="drop-down" ><a href="#">Υπουργείο</a>
            <ul>
              <li><a href="#">Πολιτική ηγεσία</a></li>
              <li><a href="#">Γραμματεία</a></li>
              <li><a href="#">Εκδηλώσεις</a></li>
              <li><a href="#">Δαπάνες</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Επικοινωνία</a></li>
          <li><a href="#">Νέα</a></li>

          <li><a href="covid19.php" class="covid-btn scrollto " >Covid-19</a></li>
        </ul>

        
      </nav><!-- .nav-menu -->
       
     
       
      
    </div>
  </header><!-- End Header -->

  <!-- ========= Login form ============ -->


  <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <!-- <h2>Επικοινωνία</h2> -->
            <ol>
              <li><a href="index.html">Αρχική</a></li>
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
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 footer-contact">
          <h3>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</h3>
          <p>
            Σταδίου 29<br>
            Αθήνα, 10559<br>
            Ελλάδα <br><br>
            <strong>Τηλέφωνο:</strong> +30 213 151 6649<br>
            <strong>Email:</strong> info@ypakp.gr<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Εργασία και Ασφάλιση</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Εργαζόμενος</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Εργοδότης</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Σύνταξη</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Ανεργία</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Απασχόληση στο Δημόσιο</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">ΑΜΕΑ</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Ελεύθεροι Επαγγελματίες</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Υπηρεσίες</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Επικοινώνια</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Ψηφιακή γραμμετεία</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Δελτία τύπου</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">ΦΕΚ</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Ευρωπαϊκή Ένωση</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Κοινωνική Ευρώπη</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Εργασία στην Ε.Ε.</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Νέα και Εκδηλώσεις</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Εποχιακή Εργασία</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Επιχορηγήσεις</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container d-md-flex py-4">

    <div class="mr-md-auto text-center text-md-left">
      <div class="copyright">
        &copy; Copyright <strong><span>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
    <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</footer><!-- End Footer -->

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