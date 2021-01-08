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


</head>

<body>

    <?php
        $page = 'one'; include(dirname(__FILE__)."./header.php");
    ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
            <!-- <h2>Επικοινωνία</h2> -->
            <ol>
                <li><a href="index.php"><i class="icofont-home"></i></a></li>
                <li>Προφίλ</li>
            </ol>
            </div>
        </div>
        </section><!-- End Breadcrumbs -->

     <div class="col-lg-10 mt-4 mt-lg-0">   
        <div class="tab-wrapper">
            <ul class="tab-menu">
                <li class="active">Κάνε αίτηση</li>
                <li>Εργασιακή Κατάσταση </li>
                <li>Λεωφορεία</li>
                <li>Τραμ</li>
                <li>Προαστιακός</li>
                <li>Τρόλεϊ</li>
            </ul>
            <div class="tab-content">
                <div>
                    <h5>Επιλέξτε μια γραμμή</h5>
                    <br>
                    <a href="timetables_results.php?TID=<?php echo 'Μ1'; ?>" class="icon-border-m1">
                        <span>M1</span>
                    </a>
                </div>
                <div>
                    <h5>Επιλέξτε μια γραμμή</h5>
                    <br>
                    <a href="timetables_results.php?TID=<?php echo 'Μ2'; ?>" class="icon-border-m2">
                        <span>M2</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-m3">
                        <span>M3</span>
                    </a>
                </div>
                <div>
                    <h5>Επιλέξτε μια γραμμή</h5>
                    <br>
                    <p onClick = "openList(this)" id="l0" class="icon-border-l">
                        <span>0</span>
                    </p>
                    <p onClick = "openList(this)" id="l1" class="icon-border-l">
                        <span>1</span>
                    </p>
                    <p onClick = "openList(this)" id="l6" class="icon-border-l">
                        <span>6</span>
                    </p>
                    <ul id="lil0" style="display: none">
                        <li>
                            <a href="coming_soon.php" class="icon-border-l">
                                <span>022</span>
                            </a>
                        </li>
                        <li>
                            <a href="timetables_results.php?TID=<?php echo '024'; ?>" class="icon-border-l">
                                <span>024</span>
                            </a>
                        </li>
                        <li>
                            <a href="coming_soon.php" class="icon-border-l">
                                <span>049</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="lil1" style="display: none">
                        <li>
                            <a href="coming_soon.php" class="icon-border-l">
                                <span>101</span>
                            </a>
                        </li>
                        <li>
                            <a href="coming_soon.php" class="icon-border-l">
                                <span>122</span>
                            </a>
                        </li>
                        <li>
                            <a href="timetables_results.php?TID=<?php echo '140'; ?>" class="icon-border-l">
                                <span>140</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="lil6" style="display: none">
                        <li>
                            <a href="coming_soon.php" class="icon-border-l">
                                <span>602</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>Επιλέξτε μια γραμμή</h5>
                    <br>
                    <a href="coming_soon.php" class="icon-border-tram">
                        <span>T</span>
                    </a>
                </div>
                <div>
                    <h5>Επιλέξτε μια γραμμή</h5>
                    <br>
                    <a href="timetables_results.php?TID=<?php echo 'Π1'; ?>" class="icon-border-p1">
                        <span>Π1</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-p2">
                        <span>Π2</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-p3">
                        <span>Π3</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-p4">
                        <span>Π4</span>
                    </a>
                </div>
                <div>
                    <h5>Επιλέξτε μια γραμμή</h5>
                    <br>
                    <a href="coming_soon.php" class="icon-border-t">
                        <span>T1</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-t">
                        <span>T2</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-t">
                        <span>T3</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-t">
                        <span>T4</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-t">
                        <span>T5</span>
                    </a>
                    <a href="coming_soon.php" class="icon-border-t">
                        <span>T6</span>
                    </a>
                </div>
            </div><!-- //tab-content -->
        </div><!-- //tab-wrapper -->
    </div> 




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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="assets/js/wrapper.js"></script>


</body>

</html>