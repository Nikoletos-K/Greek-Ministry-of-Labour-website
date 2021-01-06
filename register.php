<?php

    echo "About to start\n";
    session_start();
    echo "Connected Successfully\n";

    include 'db_connection.php';

?>

<?php

  $errors = array(); 

  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = $_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
    $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
    $name =  $_POST['phone'] = mysqli_real_escape_string($conn, $_POST['phone']);
    $afm =  $_POST['afm'] = mysqli_real_escape_string($conn, $_POST['afm']);
    $role =  $_POST['role'] = mysqli_real_escape_string($conn, $_POST['role']);
    $password_1 = $_POST['password_1'] = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = $_POST['password_2'] = mysqli_real_escape_string($conn, $_POST['password_2']);

  }

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($afm)) { array_push($errors, "afm is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM simpleuser WHERE username='$username' OR email='$email' LIMIT 1";
  // $result = mysqli_query($conn, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "Το email χρησιμοποιείται από άλλον χρήστη");
  //   }
  // }

  // Finally, register user if there are no errors in the form
  //  if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO simpleuser (username, password, email, phone, afm, role) 
            VALUES ('$username', '$password', '$email', '$phone', '$afm', '$role')";

      if(mysqli_query($conn, $query)){
         
         $_SESSION['reg_user'] = true;
         $_SESSION['login_user'] = true;
         
         $_SESSION["username"] = $username;
         $_SESSION["email"] = $email;
         $_SESSION["phone"] = $phone;
         $_SESSION["afm"] = $afm;
         $_SESSION["role"] = $role;      
         
        //  header('location:../profile/profile.php');
      }
      else{
         array_push($errors, "Αποτυχία εγγραφής");
      }
  //  }
// }
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

  <!-- ========= Registration form ============ -->

<div class="container">
<br>  <p class="text-center"> <a href="http://bootstrap-ecommerce.com/"></a></p>
<hr>

<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Δημιουργία λογαριασμού</h4>
	<!-- <p class="text-center">Get started with your free account</p> -->
	<p>
		<a href="" class="btn btn-block btn-taxis "> Μέσω TaxisNet</a>
	</p>
	<p class="divider-text"><span class="bg-light">Ή</span> </p>
  
  <form action="register.php"  method="post">
  

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
        <input name="username" class="form-control" placeholder="Όνομα χρήστη" type="text" id="form_username" required <?php if(isset($_POST['username'])) echo 'value="'.$_POST['username'].'"' ?>>
  </div> <!-- form-group// -->
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		  </div>
        <input name="email" class="form-control" placeholder="Email" type="email" id="form_email" required <?php if(isset($_POST['email'])) echo 'value="'.$_POST['email'].'"' ?>>
  </div> <!-- form-group// -->
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		  </div>
    	<input name="phone" class="form-control" placeholder="Αριθμός Τηλεφώνου" type="text" id="form_phone" required <?php if(isset($_POST['phone'])) echo 'value="'.$_POST['phone'].'"' ?>>
  </div> <!-- form-group// -->
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
    </div>
    <input name="afm" class="form-control" placeholder="ΑΦΜ" type="text" id="form_afm" required <?php if(isset($_POST['afm'])) echo 'value="'.$_POST['afm'].'"' ?>>
  </div> <!-- form-group// -->
  <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		  </div>
      <select name="role" class="form-control" id="form_role" required <?php if(isset($_POST['role'])) echo 'value="'.$_POST['role'].'"' ?>>
        <option selected=""> Κατάσταση</option>
        <option>Εργαζόμενος</option>
        <option>Εργοδότης</option>
        <option>Άνεργος</option>
        <option>Ελεύθερος Επαγγελματίας</option>
        <option>Άλλο</option>
      </select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		  </div>
        <input name="password_1" class="form-control" placeholder="Κωδικός" type="password" id="form_password_1" required <?php if(isset($_POST['password_1'])) echo 'value="'.$_POST['password_1'].'"' ?>>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		  </div>
        <input name="password_2" class="form-control" placeholder="Επανάληψη κωδικού" type="password"  id="form_password_2" required <?php if(isset($_POST['password_2'])) echo 'value="'.$_POST['password_2'].'"' ?>>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-sub" name="reg_user"> Δημιουργία  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Έχετε ήδη λογαριασμό; <a href="login.html">Σύνδεση</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

  <!-- ========= End of registration form ============ -->


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