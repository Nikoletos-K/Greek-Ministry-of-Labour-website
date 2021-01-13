<?php
    session_start();
    include 'db_connection.php';
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
  <!-- <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css"> -->

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


        <div class="container-fluid col-md-12 " >
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="profile-wrapper">   
                    <div class="tab-wrapper">
                        <ul class="tab-menu">
                            <li class="active">Εργασιακή κατάσταση</li>
                            <li>Τα στοιχεία μου</li>
                            <li>Στοιχεία εργοδότη </li>
                            <li>Ένσημα</li>
                            <li>Έγγραφα</li>
                        </ul>

                        <!-- =========== > TAB CONTENT -->
                        <div class="tab-content">
                            <!-- =========== > ΕΡΓΑΣΙΑΚΗ ΚΑΤΑΣΤΑΣΗ -->
                            <div>
                            </div>
                            <!-- < ============= ΕΡΓΑΣΙΑΚΗ ΚΑΤΑΣΤΑΣΗ -->

                            <!-- =========== > ΤΑ ΣΤΟΙΧΕΙΑ ΜΟΥ -->
                            <div>
                                <div class="container" >
                                    <div class="container z-depth-1" style="background-color: white;padding-bottom:30px;"  ><br><br>
                                        <div class="row ">
                                            <div class="col-md-9" style="padding-left:30px; padding-top:20px; "><h5><i class="fa fa-user-circle-o" aria-hidden="true"></i>  Τα στοιχεία μου</h5></div>
                                            <div class="col-md-3" ><a  href="#editProfileModal" data-toggle="modal" style="background-color: rgb(226, 226, 226); text-transform: none;"  type="button" class="btn">
                                            <i class="icofont-ui-edit"></i> Επεξεργασία </a></div> 
                                        </div><hr><br>
                                        <div class="row justify-content-center">
                                            <div class="col-md-4">
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">'Ονομα</label>
                                                    <div class="col-sm-8">
                                                        <?php echo $_SESSION["firstname"]; ?>
                                                    </div>
                                                </div>
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-8">
                                                        <?php echo $_SESSION["email"]; ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">Επίθετο</label>
                                                    <div class="col-sm-8">
                                                        <?php echo $_SESSION["lastname"]; ?>
                                                    </div>
                                                </div>
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">Τηλέφωνο</label>
                                                    <div class="col-sm-8">
                                                        <?php echo $_SESSION["phone"]; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">ΑΦΜ</label>
                                                    <div class="col-sm-10">
                                                        <?php echo $_SESSION["afm"]; ?>
                                                    </div>
                                                </div>
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-10 control-label">Εργασιακή κατάσταση</label>
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

                                <div id="editProfileModal" class="modal fade contact">
                                    <div class="modal-dialog modal-dialog-center  modal-lg row justify-content-center">
                                        <div class="modal-content">
                                            <form action="forms/updateprofile.php" method="post" class="php-email-form" id="updateprofile">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="modal-header">
                                                    <div class="modal-title col-md-9"><h4>
                                                        <i class="icofont-ui-edit" aria-hidden="true"></i><b>  Επεξεργασία των στοιχείων μου</b></h4>
                                                    </div>
                                                    <hr> <br>
                                                </div>
                                                <div class="contact modal-body">
                                                    <div class="col">
                                                        <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή προσωπικών στοιχείων</h4>				
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="firstname" class="col-4 col-form-label">Όνομα</label> 
                                                                <input id="firstname" name="firstname" placeholder=<?php echo $_SESSION["firstname"]; ?> data-rule="checkifFilled:2" data-msg="Μη έγκυρο όνομα" class="form-control" type="text">
                                                                <div class="validate"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="loading">Φόρτωση</div>
                                                    <div class="error-message text-center"></div>
                                                    <div class="sent-message">Η ενημέρωση έγινε με επιτυχία</div>
                                                </div>
                                                <div class="text-center">
                                                    <button value="submit" name="submit" type="submit">Ενημέρωση</button>
                                                </div>                                        
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <!-- < ============= ΤΑ ΣΤΟΙΧΕΙΑ ΜΟΥ -->
                        </div>
                        <!-- < ============= TAB CONTENT -->
                    </div>
                </div>                        
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
<!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script> -->
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<!-- <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script> -->
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>



<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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