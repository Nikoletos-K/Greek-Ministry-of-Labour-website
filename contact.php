<?php

    session_start();
    echo "Connected Successfully";

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Επικοινωνία</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="bootstrap/css/style.css">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">


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


  <main id="main">

     <!-- ======= Breadcrumbs ======= -->
     <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Επικοινωνία</h2> -->
          <ol>
            <li><a href="index.php"><i class="icofont-home"></i></a></li>
            <li>Επικοινωνία</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Επικοινωνία</h2>
          <p>Όλες οι απαιρέτητες πληροφορίες για την επικοινωνία σας με το Υπουργείο.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Τοποθεσία:</h4>
                <p>Σταδίου 29, Αθήνα 10559, Ελλάδα</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@ypakp.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Τηλέφωνο:</h4>
                <p> +30 213 151 6649</p>
              </div>
              <div style="width: 100%"><iframe width="100%" height="290" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=290&amp;hl=en&amp;q=%CE%A3%CF%84%CE%B1%CE%B4%CE%AF%CE%BF%CF%85%2029+(%CE%A5%CF%80%CE%BF%CF%85%CF%81%CE%B3%CE%B5%CE%AF%CE%BF%20%CE%B5%CF%81%CE%B3%CE%B1%CF%83%CE%AF%CE%B1%CF%82)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm">Οδηγίες</a></div>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="section-title">
                  <h3>Στείλτε μας email</h3><br>
                  <h6>Για οποιαδήποτε πληροφορία θέλετε να μάθετε στείλτε μας μήνυμα και θα σας εξυπηρετήσουμε μέσα σε μία με δύο εργάσιμες μέρες.</h6><br>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Όνομα και Επώνυμο</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε τουλάχιστον 4 χαρακτήρες" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Παρακαλώ εισάγετε ένα έγκυρο email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Θέμα</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε τουλάχιστον 8 χαρακτήρες στο θέμα" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Μήνυμα</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Γράψτε μας το αίτημα σας"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Φόρτωση</div>
                <div class="error-message">ΛΑΘΟΣ</div>
                <div class="sent-message">Το αίτημα σας καχορήθηκε. Θα ενημερωθείτε άμεσα!</div>
              </div>
              <div class="text-center"><button type="submit">Αποστολή</button></div>
            </form>
          </div>
        </div>

        <div class="section-title"></div>

        <div class="row">

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="section-title">
                  <h3>Κλείστε ραντεβού</h3>
                  <h6>Επιλέξτε την ώρα και το τμήμα που θέλετε να εξυπηρετηθείτε. Συμπληρώστε τα στοιχεία σας</h6><br>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="firstname_surname">Όνομα και Επώνυμο</label>
                  <input type="text" name="firstname_surname" class="form-control" id="firstname_surname" data-rule="minlen:6" data-msg="Παρακαλώ εισάγετε τουλάχιστον 5 χαρακτήρες" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Παρακαλώ εισάγετε ένα έγκυρο email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="tmhma">Τμήμα Υπουργείου</label>
                <select id="tmhma" name="tmhma" class="form-control" data-column="tmhma" data-msg="Παρακαλώ εισάγετε το τμήμα που θέλετε να επισκεφτείτε">
                    <option value="default" style="display:none;">Διαλέξτε</option>
                    <option value="grammateia">Γραμματεία</option>
                    <option value="director">Διευθυντής</option>
                    <option value="minister">Υπουργός</option>
                    <option value="submnister">Υφυπουργός</option>
                </select>
                <div class="validate"></div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Διαθέσιμες ημερομηνίες</label>

                  <div class="form-group">
                    <input type="text" name="date" class="form-control datepicker" id="date" placeholder="  Ημερολόγιο" data-rule="required" data-msg="Παρακαλώ επιλέξτε">
                 </div>
                 <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Διαθέσιμες ώρες</label>
                  <select id="appointmenthour" name="appointmenthour" data-column="appointmenthour"  data-rule="required" data-msg="Διαλέξτε την ώρα που σας βολεύει" class="form-control">
                    <option value="default" style="display:none;">Διαλέξτε ώρα</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                  </select>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Αίτημα</label><br>
                <h8 style="font-size:13px;font-style:italic;">Γραψτε μας το αίτημα σας συνοπτικά, για να ετοιμάσουμε τα έγγραφα που θα χρειαστείτε.</h8>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Γράψτε μας το αίτημα σας"></textarea>
                <div class="validate"></div>
              </div>

              <div class="mb-3">
                <div class="loading">Φόρτωση</div>
                <div class="error-message">ΛΑΘΟΣ</div>
                <div class="sent-message">Το αίτημα σας καταχωρήθηκε. Θα ενημερωθείτε άμεσα!</div>
              </div>
              <div class="text-center"><button type="submit">Ολοκλήρωση ραντεβού</button></div>
            </form>
          </div>

          <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
            
            <div class="info">
              <div class="address">
                <i class="icofont-clock-time"></i>
                <h4>Ωράριο:</h4>
                <p>Το υπουργείο εξυπηρετεί τους πολίτες:  <br>
                  <b>Δευτέρα έως Παρασκευή </b> από τις
                  <b>08:00 έως 15:00.</b>  <br>
                </p>
              </div>
              
              <div class="phone alert alert-danger" role="alert">
                <i class="icofont-exclamation-circle"></i>
                <h4>Προσοχή: </h4>
                <p> 
                  Λόγω της πανδημίας του COVID-19 η εξυπηρέτηση των πολιτών με φυσική παρουσία λειτουργεί αποκλειστικά για ζητήματα που 
                  δεν μπορούν να εξυπηρετηθούν ηλεκτρονικά ή με κλήση στο τηλεφωνικό κέντρο.
                  <br>
                  <br>
                  Όλοι οι πολίτες που πρέπει να εξυπηρετηθούν με την φυσική τους παρουσία θα πρέπει να έχουν κλείσει ραντεβού σε μια απο τις διαθέσιμες ώρες και μέρες. 
                  Το <a href="#appointment" class="alert-link">ραντεβού</a>  μπορείτε να το κλείσετε είτε συμπηρώνοντας την υπάρχουσα φόρμα είτε τηλεφωνικά.
                  <br>
                  <br>
                  Παρακαλείσθε κατά την άφιξη σας να τηρήσετε τα μέτρα ασφαλείας κατά της εξάπλωσης του ιού (μάσκα, αποστάσεις). 
                  <br>
                  <br>
                  Ο κωδικός μετακίνησης είναι το νούμερο 2. 
                  <br><br>

                  <a href="#" class="alert-link">Περισσότερες πληροφορίες για τον COVID-19</a>
                </p>
                
              </div>              
              
            </div>

          </div>
        </div>        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
    include "./footer.php";
  ?>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css/locales/bootstrap-datepicker.el.min.js" ></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/datepicker-el.js"></script>


</body>

</html>