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
  


  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">info@ypakp.gr</a>
        <i class="icofont-phone"></i> +30 213 151 6649
      </div>
       <!-- <div class="social-links"> -->
        <a href="login.html"><button class="get-started-btn scrollto">Σύνδεση</button></a>
        <a href="register.html"><button  class="get-started-btn scrollto">Εγγραφή</button></a>
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
            <a href="index.html" class="mr-auto "><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <a href="index.html" >Υπουργείο Εργασίας και Κοινωνικών Υποθέσεων</a></h1>
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
      <!-- <h1 class="logo mr-auto"><a href="index.html"> </a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Αρχική</a></li>
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

          <li><a href="covid19.html" class="covid-btn scrollto " >Covid-19</a></li>
        </ul>

        
      </nav><!-- .nav-menu -->
       
     
       
      
    </div>
  </header><!-- End Header -->


  <main id="main">

     <!-- ======= Breadcrumbs ======= -->
     <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Επικοινωνία</h2> -->
          <ol>
            <li><a href="index.html">Αρχική</a></li>
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

            <form action="appointment forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="section-title">
                  <h3>Κλείστε ραντεβού</h3>
                  <h6>Επιλέξτε την ώρα και το τμήμα που θέλετε να εξυπηρετηθείτε. Συμπληρώστε τα στοιχεία σας</h6><br>
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
                <label class="control-label" for="appointmentfor">Τμήμα Υπουργείου</label>
                <select id="appointmentfor" name="appointmentfor" class="form-control">
                    <option value="Service#1">Γραμματεία</option>
                    <option value="Service#2">Διευθυντής</option>
                    <option value="Service#3">Υπουργός</option>
                    <option value="Service#4">Υφυπουργός</option>
                </select>
                <!-- <input type="dropdown-menu" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε τουλάχιστον 8 χαρακτήρες στο θέμα" /> -->
                <div class="validate"></div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Διαθέσιμες ημερομηνίες</label>
                  <div class="form-group">
                    <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                 </div>
                  <!-- <input  class="form-control data-date-format="dd/mm/yyyy" id="datepicker"> -->
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Διαθέσιμες ώρες</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Παρακαλώ εισάγετε ένα έγκυρο email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Σημείωση</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Γράψτε μας το αίτημα σας"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Φόρτωση</div>
                <div class="error-message"></div>
                <div class="sent-message">Το αίτημα σας καχορήθηκε. Θα ενημερωθείτε άμεσα!</div>
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
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>