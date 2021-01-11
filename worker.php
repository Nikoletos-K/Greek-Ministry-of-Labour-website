<?php
    session_start();
    include 'db_connection.php';
    // echo print_r($_SESSION);
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
            <ol>
                <li><a href="index.php"><i class="icofont-home"></i></a></li>
                <li>Προφίλ</li>
            </ol>
            </div>
        </div>
        </section><!-- End Breadcrumbs -->

        <div class="container-fluid col-md-8 " >
            
            <div class="well-title d-flex align-items-start flex-column">
                <br><br>
                <h4 style="font-weight: bold; ">Τα στοιχεία μου</h4>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div style="font-size:18px;" class="form-group">
                            <label style="font-weight:bold;" class="col-sm-2 control-label">'Ονομα</label>
                            <div class="col-sm-10">
                                <?php echo $_SESSION["firstname"]; ?>
                            </div>
                        </div>
                        <div style="font-size:18px;" class="form-group">
                            <label style="font-weight:bold;" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <?php echo $_SESSION["email"]; ?>
                            </div>
                        </div>
                        <div style="font-size:18px;" class="form-group">
                            <label style="font-weight:bold;" class="col-sm-2 control-label">ΑΦΜ</label>
                            <div class="col-sm-10">
                                <?php echo $_SESSION["afm"]; ?>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div style="font-size:18px;" class="form-group">
                                <label style="font-weight:bold;" class="col-sm-2 control-label">Επίθετο</label>
                                <div class="col-sm-10">
                                    <?php echo $_SESSION["lastname"]; ?>
                                </div>
                            </div>
                            <div style="font-size:18px;" class="form-group">
                                <label style="font-weight:bold;" class="col-sm-2 control-label">Τηλέφωνο</label>
                                <div class="col-sm-10">
                                    <?php echo $_SESSION["phone"]; ?>
                                </div>
                            </div>
                            <div style="font-size:18px;" class="form-group">
                                <label style="font-weight:bold;" class="col-sm-7 control-label">Εργασιακή κατάσταση</label>
                                <div class="col-sm-11">
                                    <?php 
                                        if($_SESSION["role"] === 'ergazomenos'){
                                            echo 'Εργαζόμενος';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
 
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="profile-wrapper">   
                    <div class="tab-wrapper">
                        <ul class="tab-menu">
                            <li class="active">Κάνε αίτηση</li>
                            <li>Εργασιακή Κατάσταση </li>
                            <li>Ιστορικό αδειών</li>
                            <li>Ένσημα</li>
                            <li>Έγγραφα</li>
                            <li >Επεξεργασία προφίλ</li>
                        </ul>
                        <div class="tab-content">
                            <div>
                                <h5>Επιλέξτε αίτηση</h5>
                                <br>
                                <div class="select-btn" style="padding-bottom:50px;">                    
                                    <select id="aithsh" class="form-control col-md-6" >
                                        <option value="default" style="display:none;">Διαλέξτε</option>
                                        <option value="eidikou-skopou" >Άδεια ειδικού σκοπού</option>
                                        <option value="apwzhmeiwsh-eidikou-skopou" >Αίτηση απωζημείωσης ειδικού σκοπού</option>
                                        <option value="anergia" >Επίδομα ανεργείας</option>
                                        <option value="paraithsh" >Αίτηση παραίτησης</option>
                                    </select>
                                </div>
                                <form style="display:none;" id="eidikou-skopou" action="forms/eidikou-skopou.php" method="post" role="form" class="contact">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="php-email-form col-md-9">
                                            <div class="form-row">
                                                <div class="section-title">
                                                    <br>
                                                    <h3 style="font-weight: bold; ">Δήλωση άδειας ειδικού σκοπού</h3><br><hr>
                                                    <h7 >Συμπληρώστε τα στοιχεία που σας ζητούνται για να κάνετε την αίτησή σας στο υπουργείο. Τα προσωπικά σας στοιχεία θα σταλούν αυτόματα απο τον ιστόχωρό μας.<br>Όλα τα πεδία είναι <b>υποχρεωτικά</b>.</h7><br><hr>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="firstname">Ημερομηνία Έναρξης</label>
                                                    <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    <div class="validate"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="firstname">Ημερομηνία Λήξης</label>
                                                    <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                    <div class="validate"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="family">Οικογενειακή κατάσταση</label>
                                                    <select name="role" id="role" class="form-control" data-msg="Παρακαλώ εισάγετε την εργασιακή σας κατάσταση">
                                                        <option value="married">Έγγαμος</option>
                                                        <option value="non-married">Άγαμος</option>
                                                    </select>  
                                                    <div class="validate"></div>
                                                </div>
                                        
                                                <div class="form-group col-md-6">
                                                    <label for="role">Αριθμός ανήλικων τέκνων</label>
                                                    <select name="role" id="role" class="form-control" data-msg="Παρακαλώ εισάγετε την εργασιακή σας κατάσταση">
                                                        <option value="default" style="display:none;">Διαλέξτε</option>
                                                        <option value="ergazomenos">1</option>
                                                        <option value="ergodoths">2</option>
                                                        <option value="anergos">3</option>
                                                        <option value="el_epag">Περισσότερα από 3</option>
                                                    </select>
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group">
                                                <label for="name">Σημείωση</label>
                                                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Γράψτε μας το αίτημα σας"></textarea>
                                                <div class="validate"></div>
                                            </div>
                                            <hr><br>
                                            <div class="mb-3">
                                                <div class="loading">Φόρτωση</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Το αίτημά σας στάλθηκε επιτυχώς </div>
                                            </div>
                                            <div class="text-center">
                                                <button value="submit" name="submit" type="submit">Αποστολή</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <h5>Η εργασιακή μου κατάσταση</h5><br><hr>
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <h5 style="font-weight: bold; ">Στοιχεία Επιχείρησης Εργασίας</h5><br>
                                            <div style="font-size:18px;" class="form-group">
                                                <label style="font-weight:bold;" class="col-sm-9 control-label">'Ονομα </label>
                                                <div class="col-sm-10">
                                                    <?php echo $_SESSION["firstname"]; ?>
                                                </div>
                                            </div>
                                            <div style="font-size:18px;" class="form-group">
                                                <label style="font-weight:bold;" class="col-sm-9 control-label">Email </label>
                                                <div class="col-sm-10">
                                                    <?php echo $_SESSION["email"]; ?>
                                                </div>
                                            </div>
                                            <div style="font-size:18px;" class="form-group">
                                                <label style="font-weight:bold;" class="col-sm-9 control-label">ΑΦΜ </label>
                                                <div class="col-sm-10">
                                                    <?php echo $_SESSION["afm"]; ?>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col">
                                        <h5 style="font-weight: bold; ">Προσωπικά στοιχεία</h5><br>
                                            <div style="font-size:18px;" class="form-group">
                                                <label style="font-weight:bold;" class="col-sm-7 control-label">Ταμείο Ασφάλισης</label>
                                                <div class="col-sm-10">
                                                    <?php echo $_SESSION["lastname"]; ?>
                                                </div>
                                            </div>
                                            <div style="font-size:18px;" class="form-group">
                                                <label style="font-weight:bold;" class="col-sm-7 control-label">Χρόνια Εργασίας</label>
                                                <div class="col-sm-10">
                                                    <?php echo $_SESSION["phone"]; ?>
                                                </div>
                                            </div>
                                            <div style="font-size:18px;" class="form-group">
                                                <label style="font-weight:bold;" class="col-sm-7 control-label">Μηνιαία Επιδόματα</label>
                                                <div class="col-sm-11">
                                                    <?php 
                                                        if($_SESSION["role"] === 'ergazomenos'){
                                                            echo 'Εργαζόμενος';
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> <hr>
                                <div class="container">
                                    <h5 style="font-weight: bold; ">Άλλες πληροφορίες</h5><br>
                                    <div class="row">
                                        <div style="font-size:18px;" class="form-group">
                                            <label style="font-weight:bold;" class="col-sm-9 control-label">'Ονομα </label>
                                            <div class="col-sm-10">
                                                <?php echo $_SESSION["firstname"]; ?>
                                            </div>
                                        </div>
                                        <div style="font-size:18px;" class="form-group">
                                            <label style="font-weight:bold;" class="col-sm-9 control-label">Email </label>
                                            <div class="col-sm-10">
                                                <?php echo $_SESSION["email"]; ?>
                                            </div>
                                        </div>
                                        <div style="font-size:18px;" class="form-group">
                                            <label style="font-weight:bold;" class="col-sm-9 control-label">ΑΦΜ </label>
                                            <div class="col-sm-10">
                                                <?php echo $_SESSION["afm"]; ?>
                                            </div>
                                        </div>
                                    </div> 
                                </div> <hr> 
                            </div>
                            <div>
                                <h5>Οι άδειές μου</h5>
                                    <br>
                            </div>
                            <div>
                                <h5>Τα έμσημά μου</h5>
                                    <br>
                            </div>
                            <div>
                                <h5>Έγγραφα που έχω αποθηκεύσει</h5>
                                    <br>
                            </div>
                            <div>
                                <h5>Επεξεργασία των στοιχείων μου</h5>
                                <hr><br>
                                <div class="row simple-form">
                                    <div class="col-md-12">
                                        <form action="forms/updateprofile.php" method="post" role="form" class="php-email-form">                                            <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή προσωπικών στοιχείων</h4>
                                            <br>                                            
                                            <div class="form-group form-row">
                                                <label for="firstname" class="col-4 col-form-label">Όνομα</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="firstname" name="firstname" placeholder=<?php echo $_SESSION["firstname"]; ?> data-rule="checkifFilled:2" data-msg="Μη έγκυρο όνομα" class="form-control" type="text">
                                                    <div class="validate"></div>
                                                </div>
                                                <div class="validate"></div>
                                            </div>

                                            <div class="form-group form-row">
                                                <label for="lastname" class="col-4 col-form-label">Επίθετο</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="lastname" name="lastname" placeholder=<?php echo $_SESSION["lastname"]; ?> data-rule="checkifFilled:2" data-msg="Μη έγκυρο επίθετο" class="form-control" type="text">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>

                                            <div class="form-group form-row">
                                                <label for="email" class="col-4 col-form-label">Email</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="email" name="email" placeholder=<?php echo $_SESSION["email"]; ?> data-rule="ifemail" data-msg="Μη έγκυρο email" class="form-control" type="email">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>

                                            <div class="form-group form-row">
                                                <label for="afm" class="col-4 col-form-label">ΑΦΜ</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="afm" name="afm" placeholder=<?php echo $_SESSION["afm"]; ?> data-rule="checkifFilled:5" data-msg="Μη έγκυρο ΑΦΜ" class="form-control" type="text">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group form-row">
                                                <label for="phone" class="col-4 col-form-label">Τηλέφωνο</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="phone" name="phone" placeholder=<?php echo $_SESSION["phone"]; ?> data-rule="checkifFilled:10" data-msg="Μη έγκυρο ΑΦΜ" class="form-control" type="text">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>

                                            <div class="form-group form-row">
                                                <label for="role" class="col-4 col-form-label">Εργασιακή κατάσταση</label> 
                                                <div class="form-group col-md-6">
                                                    
                                                    <select name="role" id="role" class="form-control" data-column="role">
                                                        <option value="default" style="display:none;">
                                                        <?php
                                                            if($_SESSION["role"] == 'ergazomenos'){
                                                                echo "Εργαζόμενος";
                                                            }else{
                                                                echo 'Εργοδότης-Επιχείρηση';
                                                            }
                                                         ?></option>
                                                        <option value="ergazomenos">Εργαζόμενος</option>
                                                        <option value="ergodoths">Εργοδότης/Επιχείρηση</option>
                                                        <option value="anergos">Άνεργος</option>
                                                        <option value="el_epag">Ελεύθερος επαγγελματίας</option>
                                                        <option value="syntaxiouxos">Συνταξιούχος</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <br>
                                            <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή ονόματος χρήστη</h4>
                                            <br>

                                            <div class="form-group form-row">
                                                <label for="username" class="col-4 col-form-label">Όνομα χρήστη</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="username" name="username" placeholder=<?php echo $_SESSION["username"]; ?> data-rule="checkifFilled:4" data-msg="Το όνομα χρήστη πρέπει να περιέχει πάνω απο 4 χαρακτήρες" class="form-control" type="text">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή κωδικού πρόσβασης</h4>
                                            <br>
                                            <div class="form-group form-row">
                                                <label for="password_1" class="col-4 col-form-label">Νέος κωδικός</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="password_1" name="password_1"  data-rule="checkifFilled:4" data-msg="Ο κωδικός πρέπει να είναι μεγαλύτερος απο 4 χαρακτήρες" class="form-control" type="password">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>

                                            <div class="form-group form-row">
                                                <label for="password_2" class="col-4 col-form-label">Επαλήθευση νέου κωδικού</label> 
                                                <div class="form-group col-md-6">
                                                    <input id="password_2" name="password_2"  data-rule="checkifFilled:4" data-msg="Ο κωδικός πρέπει να είναι μεγαλύτερος απο 4 χαρακτήρες" class="form-control" type="password">
                                                    <div class="validate"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="mb-3">
                                                <div class="loading">Φόρτωση</div>
                                                <div class="error-message"></div>
                                                <div class="sent-message">Τα στοιχεία ανανεώθηκαν με επιτυχία</div>
                                            </div>
                                            <div class="text-center">
                                                <button value="submit" name="submit" type="submit">Αποθήκευση νέων στοιχείων</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            
                        </div>
                        <div>
                        
                        </div>
                        <div>
                            
                        </div>
                        <div>
                        
                        </div>
                        <div>
                        </div>
                    </div><!-- //tab-content -->
                </div><!-- //tab-wrapper -->
            </div>    
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

<script>
$('#aithsh').change(function(){
    $('form').hide();
    $('form#'+$(this).val()).show();
});
$('.date').datepicker({ language: "el"});
</script>

</body>

</html>