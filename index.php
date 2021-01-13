<?php

    session_start();
    echo "Connected Successfully";

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="bootstrap/css/mdb.min.css">

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


<body>

  <?php
      $page = 'one'; include(dirname(__FILE__)."./header.php");
  ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/corona.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Νέα μέτρα</h2>
              <p class="animate__animated animate__fadeInUp">Τι αλλάζει στους χώρους εργασίας, λόγω του COVID-19.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Διαβάστε περισσότερα</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/work.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Αλλαγές στον ιδιωτικό τομέα</h2>
              <p class="animate__animated animate__fadeInUp">Έρχονται αλλαγές στην αγορά εργασίας του ιδιωτικού τομέα με το νομοσχέδιο που προγραμματίζεται να έρθει σε
                 δημόσια διαβούλευση το πρώτο 15ήμερο Φεβρουαρίου.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Διαβάστε περισσότερα</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item " style="background-image: url(assets/img/slide/EE.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Εργασία στην Ευρώπη</h2>
              <p class="animate__animated animate__fadeInUp">Δυνατότητα εργασίας στην Ευρώπη μέσω του προγράμματος EURES. Ο φορέας παρέχει υπηρεσίες πληροφόρησης, συμβουλευτικής και πρόσληψης ή τοποθέτησης αλλά και να προβαίνει σε
                 ενέργειες προκειμένου να διευκολύνει εκείνους που αναζητούν εργασία σε άλλη Ευρωπαϊκή χώρα. Οι υπηρεσίες του EURES προσφέρονται δωρεάν.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Διαβάστε περισσότερα</a>
            </div>
          </div>
        </div>
        

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Προηγούμενο</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Επόμενο</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-files-stack"></i></div>
              <h4 class="title"><a href="">Χρήσιμα έγγραφα</a></h4>
              <p class="description">Εδώ θα βρείτε έναν κατάλογο από όλα τα έγγραφα που μπορεί να χρειαστείτε, ταξινομημένα, σε ηλεκτρονική μορφή.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-medical-sign"></i></div>
              <h4 class="title"><a href="covid19.html">COVID-19</a></h4>
              <p class="description">Όλες οι πληροφορίες που αφορούν τις αλλαγές στον εργασιακό τομέα, λόγω του ιού Covid-19.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Κλείστε ραντεβού</a></h4>
              <p class="description">Αν δεν είναι δυνατή η εξυπηρέτησή σας απο τον ιστόχωρό μας, υπάρχει η δυνατότητα να κλείσετε μια συνάντηση στον χώρο του υπουργείου.</p>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></div>
            <h4 class="title"><a href="#">Ειδικός σχεδιασμός</a></h4>
            <p class="description">Aν ανήκετε σε ομάδα ατόμων με ειδικές ανάγκες, παρακαλώ πατήστε εδώ
               για να γίνει ο ιστότοπος συμβατός με τις απαιτήσεις σας.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="icofont-globe"></i></div>
            <h4 class="title"><a href="#">Ευρωπαϊκή Ένωση</a></h4>
            <p class="description">Πατήστε εδώ για να δείτε τις δυνατότες και τα δικαιώματα που έχετε ως ευρωπαίος πολίτης.
              Ακόμα θα βρείτε θέσεις εργασίας σε όλες τις χώρες της Ε.Ε.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
            <h4 class="title"><a href="#">Σεμινάρια</a></h4>
            <p class="description">Εδώ θα βρείτε τα διαθέσιμα σεμινάρια και ημερίδες που μπορεί να σας ενδιαφέρουν.
            </p>
          </div>
        </div>
      </div>

      </div>
    </section><!-- End Featured Services Section -->

    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Συχνές ερωτήσεις</h2>
      </div>

      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Ποιος είναι ο κατώτατος μισθός; <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
              <p>
                •  Ο κατώτατος μισθός είναι 650€/μήνα μεικτά.</br>

                •  Το κατώτατο ημερομίσθιο είναι 29,04€/ημέρα μεικτά.                
                </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Πόσο διαρκεί η άδεια μητρότητας; <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-parent=".faq-list">
              <p>
                Η συνολική διάρκεια της άδειας μητρότητας ορίζεται σε δεκαεπτά (17) εβδομάδες.Οκτώ (8) εβδομάδες θα χορηγούνται 
                υποχρεωτικά πριν από την πιθανή ημερομηνία του τοκετού και οι υπόλοιπες εννέα (9) μετά τον τοκετό. 
                Σε περίπτωση που ο τοκετός πραγματοποιηθεί σε χρόνο προγενέστερο από αυτόν που είχε αρχικά πιθανολογηθεί,
                 το υπόλοιπο της άδειας θα χορηγείται υποχρεωτικά μετά τον τοκετό, ώστε να εξασφαλίζεται χρόνος συνολικής 
                 άδειας δεκαεπτά (17) εβδομάδων (άρθρο 7 της ΕΓΣΣΕ ετών 2000-2001).
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Πώς βγάζω κωδικούς TaxisNet; <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-parent=".faq-list">
              <p>
                Η διαδικασία εγγραφής ολοκληρώνεται σε 3 βήματα:
                </br> <b>Εγγραφή</b></br> 
                 Από την ιστοσελίδα της Α.Α.Δ.Ε. www.aade.gr, υπηρεσίες πιστοποίησης myTAXISnet, επιλέγετε Εγγραφή Νέου Χρήστη, και στη συνέχεια Αρχική εγγραφή και συμπληρώνετε την αίτηση δηλώνοντας, όνομα χρήστη (username) και κωδικό (password) που επιθυμείτε.
                </br> <b> Παραλαβή κλειδάριθμου</b></br> 
                 Με την επιτυχή ολοκλήρωση της αίτησης λαμβάνεται σημείωμα στο οποίο αναγράφονται ο Α.Φ.Μ., η ημερομηνία και η ώρα υποβολής καθώς επίσης και η προθεσμία μέσα στην οποία πρέπει να μεταβείτε σε οποιαδήποτε Δ.Ο.Υ. για την έγκριση της αίτησης και την παραλαβή του κλειδάριθμου (αν τα προσωπικά στοιχεία του υποψήφιου χρήστη έχουν μεταβληθεί, όπως για παράδειγμα η αστυνομική ταυτότητα, τότε θα πρέπει να μεταβεί στην αρμόδια Δ.Ο.Υ.).
                </br> <b> Για την περίπτωση που ένα Φυσικό Πρόσωπο αδυνατεί</b>
                  να προσέλθει στη Δ.Ο.Υ. για να παραλάβει τον κλειδάριθμο αυτοπροσώπως και να ολοκληρωθεί η διαδικασία πιστοποίησης, μπορεί να πάει αντιπρόσωπός του προσκομίζοντας Ειδικό Πληρεξούσιο από ΚΕΠ ή Αστυνομικό Τμήμα. Παράλληλα στην ηλεκτρονική διεύθυνση που δηλώσατε, έρχεται ενημερωτικό μήνυμα για την έγκριση της αίτησής σας και σας υπενθυμίζετε και το username. Προσοχή: Για τα Νομικά πρόσωπα, τον κλειδάριθμο πρέπει να παραλάβει ο νόμιμος Εκπρόσωπος της Εταιρείας, μόνο από την αρμόδια Δ.Ο.Υ. ή αντιπρόσωπός του, προσκομίζοντας Ειδικό Πληρεξούσιο από ΚΕΠ ή Αστυνομικό Τμήμα.
                </br> <b> Ενεργοποίηση του λογαριασμού</b></br> 
                
                 Από την ιστοσελίδα της Α.Α.Δ.Ε. www.aade.gr, υπηρεσίες πιστοποίησης myTAXISnet, επιλέγετε Ενεργοποίηση Λογαριασμού. Για την ενεργοποίηση του λογαριασμού απαιτείται να συμπληρώσετε
                </br> α) username και κωδικό (password) που επιλέξατε κατά την υποβολή της αίτησης εγγραφής.</br> 
                
              </br> β) τον κλειδάριθμο που σας δόθηκε στη Δ.Ο.Υ. με ακρίβεια , συμπεριλαμβάνοντας τις παύλες.</br> 
                
            </br> γ) τα γράμματα που διακρίνετε στην εικόνα.
                
                  
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Ποιες είναι οι προϋποθέσεις χορήγησης επιδόματος ανεργίας; <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-parent=".faq-list">
              <p>
              <b>Προϋποθέσεις</b></br></br>
                Για τη χορήγηση της τακτικής επιδότησης ανεργίας στους δικαιούχους απαιτείται η συνδρομή των κάτωθι γενικών προϋποθέσεων:
              </br>
                1. Να είναι ασφαλισμένοι ως εργαζόμενοι στον κλάδο ανεργίας του ΟΑΕΔ.</br>
                2. Να έχει προηγηθεί Καταγγελία Σύμβασης Εργασίας (όχι Οικειοθελής Αποχώρηση) ή </br>
                3. Να έχει προηγηθεί Λήξη Σύμβασης Ορισμένου Χρόνου (όχι Οικειοθελής Αποχώρηση) </br>
                4. Να μην αυτοαπασχολούνται </br>
                5. Να έχουν την ιδιότητα του ανέργου κατά την αίτηση για την επιδότηση </br>
              </br>
                Επιπρόσθετα:</br></br>
                
                <p class="q-4"><b>α) Για δικαιούχο που επιδοτείται για πρώτη φορά απαιτείται:</b></p>
                
              </br><b>1η περίπτωση: </b> </br>
                
                • Πραγματοποίηση 125 ημερών εργασίας εντός του 14μήνου πριν από τη λήξη ή τη λύση της εργασιακής σχέσης, χωρίς να υπολογίζονται οι τελευταίοι δύο μήνες πριν από τη λήξη ή τη λύση αυτής και</br>
                
                • Πραγματοποίηση 80 ημερών εργασίας σε κάθε έτος κατά τα δύο προηγούμενα έτη πριν από από την έναρξη της επιδότησής του.</br>
                
              </br><b>2η περίπτωση (για δικαιούχους που δεν καλύπτουν την προϋπόθεση της 1ης περίπτωσης):</b></br>
                
                • Πραγματοποίηση 200 ημερών εργασίας κατά τα δύο προηγούμενα πριν από τη λύση ή τη λήξη της εργασιακής σχέσης, χωρίς να υπολογίζονται σε αυτές οι τελευταίοι δύο μήνες πριν από τη λήξη ή τη λύση αυτής, και</br>
                
                • Πραγματοποίηση 80 ημερών εργασίας σε κάθε έτος κατά τα δύο προηγούμενα έτη, πριν από τη λήξη ή τη λύση της εργασιακής σχέσης.</br>
                
              </br><p class="q-4"><b>β) Για δικαιούχο που έχει επιδοτηθεί στο παρελθόν απαιτείται:</b></p></br>
                
                • Πραγματοποίηση τουλάχιστον 125 ημερών εργασίας στο τελευταίο 14μηνο, πριν από τη λήξη ή τη λύση της εργασιακής του σχέσης, χωρίς να υπολογίζονται σε αυτές οι τελευταίοι δύο μήνες πριν από τη λήξη ή τη λύση αυτής</br>
                
                • Τα ημερήσια επιδόματα ανεργίας που έχει λάβει εντός της προηγούμενης τετραετίας, από την εκάστοτε έναρξη της επιδότησης, να μην υπερβαίνουν τα τετρακόσια (400).</br>
                
              </br>Εάν εντός της τετραετίας έχει επιδοτηθεί για χρονικό διάστημα μικρότερο των τετρακοσίων (400) ημερήσιων επιδομάτων, δικαιούται να επιδοτηθεί για τον υπόλοιπο αριθμό ημερησίων επιδομάτων, μέχρι τη συμπλήρωση του ανώτατου ορίου των τετρακοσίων (400) ημερησίων επιδομάτων.</br>
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Πώς μπορώ να δω τα ένσημα μου; <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-parent=".faq-list">
              <p>
                Για να μπορέσετε να δείτε τα ένσημα που έχετε υπάρχουν δύο τρόποι:</br></br>
                1. Μέσω αυτού του ιστοχώρου. Αν έχετε λογαριασμό συνδεθείτε, αλλιώς δημιουργήστε πατώντας το κουμπί <i>Εγγραφή</i>.
                 Στην συνέχεια θα έχετε πράσβαση σε όλα τα προσωπικά σας στοιχεία που αφορούν τα εργασιακά.</br></br>
                2. Μέσω της πλατφόρμας atlas.gov.gr, όπου εισάγεται τους κωδικούς TaxisNet και το ΑΜΚΑ σας. Τότε μπορείτε να δείτε
                 τα ένσημά σας συγκεντρωτικά ανά ταμείο, ενώ πατώντας την επιλογή εκτύπωση του ασφαλιστικού βιογραφικού μπορείτε
                  να δείτε αναλυτικά όλα τα ένσημα μηνιαίως.</br> </br>
              </p>
            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- FOOTER -->
  
  <?php
    include "./footer.php";
  ?>



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