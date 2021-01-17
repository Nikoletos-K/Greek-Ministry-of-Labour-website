<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">info@ypakp.gr</a>
        <i class="icofont-phone"></i> +30 213 151 6649
      </div>
        <?php 
          if(isset(($_SESSION['login_user'])) && ($_SESSION['login_user']) == true) {

              if($_SESSION['role'] === 'ergazomenos'){

                  echo '<div class=" d-flex justify-content-end">
                  <a class="login-icons" href="worker.php"><i class="icofont-user-alt-7"></i> Προφίλ</a>
                  <a class="login-icons" href="logout.php"><i class="icofont-logout"></i>Αποσύνδεση</a>
                  </div>'; 

              } else {
                  echo '<div class=" d-flex justify-content-end">
                  <a class="login-icons" href="business.php"><i class="icofont-user-alt-7"></i> Προφίλ</a>
                  <a class="login-icons" href="logout.php"><i class="icofont-logout"></i>Αποσύνδεση</a>
                  </div>'; 
              }
                            
          } else {

            echo '<a href="login.php"><button class="get-started-btn scrollto">Σύνδεση</button></a>
            <a href="register.php"><button  class="get-started-btn scrollto">Εγγραφή</button></a>';

          }
          ?>
    </div>
  </div>

 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    
    <div class="navbar-br">
      <div class="container align-items-center">
        <nav class=" sec-navbar navbar ">
          <h1 class="logo mr-auto navbar-brand">
            <a href="index.php" class="mr-auto "><img src="assets/img/logo.png" alt="ΥΕΚΥ" class="img-fluid"></a>
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
          <li class="active"><a href="index.php" style="color: #19229e;">Αρχική</a></li>
          <li class="drop-down"><a href="#">Εργοδότης</a>
            <ul>
              <li><a href="coming_soon.php">Προσλήψεις</a></li>
              <li><a href="covid19.php">COVID-19</a>
                <ul>
                  <!-- <li><a href="#">Δήλωση τηλεργασίας εργαζομένου</a></li>
                  <li><a href="#">Αναστολή σύμβασης εργαζομένου</a></li>
                  <li><a href="#">Διαχείρηση κρούσματος</a></li>
                  <li><a href="#">Μέτρα προφύλαξης</a></li>
                  <li><a href="#">Αποζημιώσεις</a></li>
                  <li><a href="#">Άλλα θέματα COVID-19</a></li> -->
                </ul>
              </li>
              <li><a href="coming_soon.php">Νέα επιχείρηση</a></li>
              <li><a href="coming_soon.php">Ασφάλιση εργαζομένου</a></li>
              <li><a href="coming_soon.php">Απολύσεις</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Εργαζόμενος</a>
            <ul>
              <li><a href="coming_soon.php">Μισθοδοσία</a></li>
              <li><a href="covid19.php">COVID-19</a>
                <!-- <ul>
                  <li><a href="covid19.php#adeia">Άδεια ειδικού σκοπού</a></li>
                  <li><a href="#">Αναστολή εργασίας</a></li>
                  <li><a href="#">Τηλεργασία</a></li>
                  <li><a href="#">Μέτρα προφύλαξης</a></li>
                  <li><a href="#">Αποζημιώσεις</a></li>
                  <li><a href="#">Άλλα θέματα COVID-19</a></li>
                </ul> -->
              </li>
              <li><a href="coming_soon.php">Επιδόματα</a></li>
              <li><a href="coming_soon.php">Άδειες</a></li>
              <li><a href="coming_soon.php">Απόλυση</a></li>
              <li><a href="coming_soon.php">Ασφάλιση</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="#">Εργασία και Ασφάλιση</a>
            <ul>
              <li><a href="coming_soon.php">Επιχειρήσεις</a></li>
              <li><a href="coming_soon.php">Συνταξιοδότηση</a></li>
              <li><a href="coming_soon.php">Ανεργία</a></li>
              <li><a href="coming_soon.php">Ελεύθεροι Επαγγελματίες</a></li>
              <li><a href="coming_soon.php">ΑΜΕΑ</a></li>
              <li><a href="coming_soon.php">Εποχιακή Απασχόληση</a></li>
              <li><a href="coming_soon.php">Κοινωνική Ασφάλιση</a></li>
              <li><a href="coming_soon.php">Επιδόματα</a></li>
              <li><a href="coming_soon.php">Εργασία στην ΕΕ</a></li>
              <li><a href="coming_soon.php">Διεθνείς υποθέσεις</a></li>
            </ul>
          </li>
          <li class="drop-down" ><a href="#">Υπουργείο</a>
            <ul>
              <li><a href="coming_soon.php">Πολιτική ηγεσία</a></li>
              <li><a href="coming_soon.php">Γραμματεία</a></li>
              <li><a href="coming_soon.php">Εκδηλώσεις</a></li>
              <li><a href="coming_soon.php">Δαπάνες</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Επικοινωνία</a></li>
          <li><a href="coming_soon.php">Νέα</a></li>

          <li><a href="covid19.php" class="covid-btn scrollto " >Covid-19</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <script>
    window.onload = function(){  

      var url = document.location.toString();
      if (url.match('#')) {
          $('.nav ul il a[href="#' + url.split('#')[1] + '"]').tab('show');
      }

      //Change hash for page-reload
      $('.nav ul il a[href="#' + url.split('#')[1] + '"]').on('shown', function (e) {
          window.location.hash = e.target.hash;
      }); 
    } 
    
  </script>
