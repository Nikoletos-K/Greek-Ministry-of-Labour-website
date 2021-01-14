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
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <?php
  if(isset($_POST['submit'])) {
    echo "<meta http-equiv='refresh' content='0'>";
  }
  ?>


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

        <div class="container-fluid col-md-12 " >
            
           
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="profile-wrapper">   
                    <div class="tab-wrapper">
                        <ul class="tab-menu " >
                            <li class="active">Εργαζόμενοι</li>
                            <li>Τα στοιχεία μου</li>
                            <li>Ένσημα</li>
                            <li>Έγγραφα</li>
                        </ul>
                        <div class="tab-content">
                            <div>
                                <h5>Οι εργαζόμενοι της επιχείρησης</h5><br>

                                <p class="text-justify" style="font-size:18px;">Για να κάνετε μια νέα δήλωση για έναν ή περισσότερους εργαζομένους, επιλέξτε αυτούς που επιθυμείτε
                                και πατήστε <e style="color: #8852ce ">δήλωση</e>. Αν θέλετε να δείτε περισσότερα στοιχεία για αυτούς ή να κάνετε άρση μιας δήλωσης 
                                πατήστε στο κελί του εργαζόμενου ή το συμβολάκι <i style="color: #5688e6 " class="icofont-info-circle" title="Περισσότερες πληροφορίες"></i>. </p>
                                <i>Μετά από κάθε ενέργεια ανανεώστε την σελίδα για να δείτε τις αλλαγές στον πίνακα πληροφοριών.</i>
                                
                                

                                <!-- <div class="container"> -->
                                <div class="table-responsive">
                                    <div class="table-wrapper">
                                        <?php echo 
                                        '<form method="post" action="forms/afms.php" id="checkBoxes_POST"> <div class="table-title">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h2>Διαχείρηση <b>Εργαζομένων</b></h2>    
                                                </div>
                                                <div class="col-sm-6">
                                                    <button style="font-size:16px;" type="submit" name="submit_1" value="submit_1" data-toggle="modal" data-target="#dhlwshEmployeeModal" class="btn btn-secondary" />
                                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>Νέα Δήλωση
                                                    </button>
                                                    </div>
                                            </div>
                                        </div>';

                                        $myafm = $_SESSION["afm"];
                                        $result = mysqli_query($conn,"SELECT * FROM employee WHERE workingFor=$myafm");
                                        echo '<table id="table" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </th>
                                                <th>Όνομα</th>
                                                <th>Επώνυμο</th>
                                                <th>Email</th>
                                                <th>ΑΦΜ</th>
                                                <th>Κατάσταση</th>
                                                <th>Ενέργειες</th>
                                            </tr>
                                        </thead> <tbody>  ';

                                        while($row = mysqli_fetch_array($result))
                                        {
                                            $workerAFM = $row['afm'];
                                            $worker_result = mysqli_query($conn,"SELECT * FROM genericuser WHERE afm=$workerAFM");
                                            $worker = mysqli_fetch_array($worker_result);
                                            $worker_benefits_q = mysqli_query($conn,"SELECT * FROM employee WHERE afm=$workerAFM");
                                            $worker_benefits = mysqli_fetch_array($worker_benefits_q);

                                            $checkedAFM = $worker['afm'];
                                            echo "<tr >
                                                <td >
                                                    <span class='custom-checkbox'>
                                                    
                                                        <input id='checkbox1'  type='checkbox' name='checkBoxes[]'  value='" . $worker['afm'] . "'>
                                                        <label for='checkbox1'></label>
                                                
                                                    </span>
                                                </td>";
                                            
                                            echo "<td style='cursor: pointer;' id='YOUR_BUTTON_ID' data-id= ". $worker['afm'] ." >" . $worker['firstname'] .  "</td>";
                                            echo "<td style='cursor: pointer;' id='YOUR_BUTTON_ID' data-id= ". $worker['afm'] ." >" . $worker['lastname'] . "</td>";
                                            echo "<td style='cursor: pointer;' id='YOUR_BUTTON_ID' data-id= ". $worker['afm'] ." >" . $worker['email'] . "</td>";
                                            echo "<td style='cursor: pointer;' id='YOUR_BUTTON_ID' data-id= ". $worker['afm'] ." >" . $worker['afm'] . "</td>";
                                            echo "<td style='cursor: pointer;' id='YOUR_BUTTON_ID' data-id= ". $worker['afm'] ." data-target='#infoEmployeeModal'>" ;
                                            if($worker_benefits["anastoli_id"]) {
                                                echo "<h8 class='badge badge-success' >ΑΝΑΣΤΟΛΗ</h8><br>";
                                            }
                                            if($worker_benefits["thlergasia_id"]) {
                                                echo "<h8 class='badge badge-success' >ΤΗΛΕΡΓΑΣΙΑ</h8><br>";
                                            }
                                            if($worker_benefits["adeia_id"]) {
                                                echo "<h8 class='badge badge-success' >ΑΔΕΙΑ</h8>";
                                            }                                            
                                            echo "</td>";

                                            echo ' <td>

                                            <a class="show-hide" href="#infoEmployeeModal" data-id="'.$worker['afm'] .'" class="info" data-toggle="modal"><i style="color: #5688e6 " class="icofont-info-circle" title="Περισσότερες πληροφορίες"></i></a>
                                            </td>
                                            </tr>';
                                        }
                                        echo " </tbody> </table> </form>";

                                        ?>
                                        <div class="clearfix">
                                            <!-- <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div> -->
                                            <ul class="pagination">
                                                <li class="page-item disabled"><a href="#">Προηγούμενο</a></li>
                                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">Επόμενο</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>        
                                <!-- </div> -->

                                <div id="infoEmployeeModal" class=" modal fade contact ">
                                    <div class="modal-dialog modal-lg row justify-content-center">
                                        <div class="modal-content ">        
                                            <form method="post" action="forms/changeEmployeeStatus.php" class= 'contact php-email-form'>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="modal-header">
                                                    <div class="modal-title col-md-9"><h4>
                                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>  Στοιχεία εργαζομένου</h4>
                                                    </div>
                                                    <hr> <br>
                                                </div>
                                                
                                                <div class="fetched-data">
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- dhlwsh Modal HTML -->
                                <div id="dhlwshEmployeeModal" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">        
                                            <form action="forms/dhlwsh.php" method="post" role="form"  class="php-email-form">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                                <div class=" section-title">						
                                                    <h3 style="font-weight: bold; ">Δήλωση εργαζομένου</h3><br><hr>
                                                    <h7>Αρχικά επιλέξτε την δήλωση που σας ενδιαφέρει και στην συνέχεια συμπληρώστε τα στοιχεία που ζητούνται. 
                                                    <br>Όλα τα πεδία είναι <b>υποχρεωτικά</b>.</h7><br><hr>
                                                </div>
                                                <div class="contact modal-body">					
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="dhlwsh">Είδος δήλωσης</label>
                                                            <select name="dhlwsh" id="dhlwsh" class="form-control" data-column="dhlwsh" data-msg="Παρακαλώ επιλέξτε την δήλωση που επιθυμείτε">
                                                                <option value="default" style="display:none;">Διαλέξτε</option>
                                                                <option value="anastoli" >Aναστολή σύμβασης εργασίας</option>
                                                                <option value="thlergasia" >Eξ αποστάσεως εργασία</option>
                                                                <option value="apozhmeiwsh-erg" >Aποζημείωση εργαζομένου</option>
                                                                <option value="apolysh" >Απόλυση</option>
                                                            </select>
                                                            <div class="validate"></div>
                                                        </div>
                                                        <div class="form-group col-md-6" id="date1" style="display:none;">
                                                            <label for="date1">Ημερομηνία Έναρξης</label>
                                                            <input  type="text" class="form-control" id="datepicker1" data-date-format="dd-mm-yyyy" name="date1" required data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε μια ημερομηνία έναρξης">
                                                            <div class="validate"></div>
                                                           
                                                        </div>
                                                        <div class="form-group col-md-6" id="date2" style="display:none;">
                                                            <label for="date2">Ημερομηνία Λήξης</label>
                                                            <input  type="text" class="form-control" id="datepicker2" data-date-format="dd-mm-yyyy" name="date2" required data-rule="minlen:4" data-msg="Παρακαλώ εισάγετε μια ημερομηνία λήξης">
                                                            <div class="validate"></div>
                                                        </div>
                                                    </div>					
                                                </div>
                                                <div class="mb-3">
                                                    <div class="loading">Φόρτωση</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Οι δηλώσεις έγιναν με επιτυχία</div>
                                                </div>
                                                <div class="text-center">
                                                    <button value="submit" name="submit" type="submit">Δήλωση</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>                                
                            </div>

                            <div>
                                <div class="container" >
                                    <div class="container z-depth-1" style="background-color: white;padding-bottom:30px;"  ><br><br>
                                        <div class="row ">
                                            <div class="col-md-9" style="padding-left:30px; padding-top:20px; "><h5><i class="fa fa-user-circle-o" aria-hidden="true"></i>  Τα στοιχεία μου</h5></div>
                                            <div class="col-md-3" ><a  href="#editProfileModal" data-toggle="modal"style="background-color: rgb(226, 226, 226); text-transform: none;"  type="button" class="btn">
                                            <i class="icofont-ui-edit"></i> Επεξεργασία </a></div> 
                                        </div><hr> <br>
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
                                                            if($_SESSION["role"] === 'ergodoths'){
                                                                echo 'Εργοδότης';
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
                                            <form action="forms/updateprofile.php" method="post" class="php-email-form">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <div class="modal-header">
                                                    <div class="modal-title col-md-9"><h4>
                                                        <i class="icofont-ui-edit" aria-hidden="true"></i><b>  Επεξεργασία των στοιχείων μου</b></h4>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="contact modal-body">
                                                    <div class="container  align-items-center">
                                                        <div class= "row">
                                                            <div class="col">
                                                                <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή προσωπικών στοιχείων</h4>				

                                                                <div class="col-md-8">
                                                                    <label for="firstname" class="col-4 col-form-label">Όνομα</label> 
                                                                    <div class="form-group ">
                                                                        <input id="firstname" name="firstname" placeholder=<?php echo $_SESSION["firstname"]; ?> data-rule="checkifFilled:2" data-msg="Μη έγκυρο όνομα" class="form-control" type="text">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="lastname" class="col-4 col-form-label">Επίθετο</label> 
                                                                    <div class="form-group ">
                                                                        <input id="lastname" name="lastname" placeholder=<?php echo $_SESSION["lastname"]; ?> data-rule="checkifFilled:2" data-msg="Μη έγκυρο επίθετο" class="form-control" type="text">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="email" class="col-4 col-form-label">Email</label> 
                                                                    <div class="form-group ">
                                                                        <input id="email" name="email" placeholder=<?php echo $_SESSION["email"]; ?> data-rule="ifemail" data-msg="Μη έγκυρο email" class="form-control" type="email">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <label for="phone" class="col-4 col-form-label">Τηλέφωνο</label> 
                                                                    <div class="form-group ">
                                                                        <input id="phone" name="phone" placeholder=<?php echo $_SESSION["phone"]; ?> data-rule="checkifFilled:10" data-msg="Μη έγκυρο ΑΦΜ" class="form-control" type="text">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col">
                                                                <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή ονόματος χρήστη</h4>
                                                                

                                                                <div class="col-md-8">
                                                                    <label for="username" class="col-8 col-form-label">Όνομα χρήστη</label> 
                                                                    <div class="form-group ">
                                                                        <input id="username" name="username" placeholder=<?php echo $_SESSION["username"]; ?> data-rule="checkifFilled:4" data-msg="Το όνομα χρήστη πρέπει να περιέχει πάνω απο 4 χαρακτήρες" class="form-control" type="text">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <hr><br>
                                                                <h4 style="color: #5688e6;font-weight: none; align: center;">Αλλαγή κωδικού πρόσβασης</h4>
                                                                <br>
                                                                <div class="col-md-8">
                                                                    <label for="password_1" class="col-8 col-form-label">Νέος κωδικός</label> 
                                                                    <div class="form-group ">
                                                                        <input id="password_1" name="password_1"  data-rule="checkifFilled:4" data-msg="Ο κωδικός πρέπει να είναι μεγαλύτερος απο 4 χαρακτήρες" class="form-control" type="password">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-8">
                                                                    <label for="password_2" class="col-8 col-form-label">Επαλήθευση νέου κωδικού</label> 
                                                                    <div class="form-group ">
                                                                        <input id="password_2" name="password_2"  data-rule="checkifFilled:4" data-msg="Ο κωδικός πρέπει να είναι μεγαλύτερος απο 4 χαρακτήρες" class="form-control" type="password">
                                                                        <div class="validate"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="container ">
                                                        <div class="">
                                                            <div class="alert alert-warning" role="alert">
                                                            <i class="fas fa-exclamation fa-xl"></i>
                                                                Για αλλαγή της <b>εργασιακής σας κατάστασης</b> ή του <b> ΑΦΜ</b>  σας θα πρέπει να έρθετε στο υπουργείο. <br>
                                                                Λόγω της πανδημίας του COVID-19 ενημερώθειτε για την διαδικασία που θα πρέπει να ακολουθήσετε μέσω της  <a href="covid19.php"> επίσημης σελίδας του υπουργείου  </a>.
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
                                                    </div>    
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                        
                            <div>
                                <h5>Τα έμσημά μου</h5>
                                    <br>
                            </div>
                            
                            <div>
                                <h5>Έγγραφα που έχω αποθηκεύσει</h5>
                                    <br>
                            </div>

                        </div><!-- //tab-content -->
                    </div><!-- //tab-wrapper -->
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
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css/locales/bootstrap-datepicker.el.min.js" charset="UTF-8" ></script>

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
<script src="assets/js/wrapper.js"></script>

<!-- <script>
$('#aithsh').change(function(){
    $('form').hide();
    $('form#'+$(this).val()).show();
});
</script> -->

<script>
  $('#dhlwsh').change(function(){
    selection = $(this).val();    
    switch(selection)
    { 
        case 'anastoli':
            $('#date1').show();
            $('#date2').show();
            break;
        case 'thlergasia':
            $('#date1').show();
            $('#date2').show();
            break;
        default:
            $('#date1').hide();
            $('#date2').hide();
            break;
    }
  });


</script>
<script type="text/javascript">
$(function(){

$('#selectAll').click(function(event) {   
    if(this.checked) {
    // Iterate each checkbox
    $(':checkbox').each(function() {
        this.checked = true;                        
    });
    }
    else {
    // Iterate each checkbox
    $(':checkbox').each(function() {
        this.checked = false;
    });
    }
});
$(document).ready(function() {
    
    var checkedArray = [];
    $.each($("input[name='afmID']:checked"), function(){
        checkedArray.push($(this).val());
    });                                        
});
})
</script>
<script>

    $("#datepicker1").datepicker({
        isRTL: false,
        autoclose:true,
        language: 'el',
        locale: 'el',
        todayHighlight: true,
    });

    $("#datepicker2").datepicker({
        isRTL: false,
        autoclose:true,
        language: 'el',
        locale: 'el',
        todayHighlight: true,
    });
   
</script>

<script type="text/javascript">

    $("#checkBoxes_POST").submit(function(e){
        e.preventDefault();
        $.ajax({
            type : 'POST',
            data: $("#checkBoxes_POST").serialize(),
            url : 'forms/afms.php',
            success : function(data){
                $("#dhlwshEmployeeModal").modal("show");
                data.preventDefault();
            }
        });
        return false;
    });
    
    $('#editEmployeeModal').on('show.bs.modal', function (e) {

        var rowid = $(e.relatedTarget).data('id');

        $.ajax({
            type : 'post',
            cache: false,
            url : 'forms/fetch_record.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){

                $('.fetched-data').html(data);//Show fetched data from database
                $('#editEmployeeModal').modal("show");
            }
        });
     });

     $('#YOUR_BUTTON_ID').on('click',function(e){
        var rowid = $(e.currentTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'forms/fetch_record.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
                alert("YOYHOY");
                $('.fetched-data').html(data);//Show fetched data from database
                $('#infoEmployeeModal').modal("show");
            }
        });         
     });

    // $('#infoEmployeeModal').on('show.bs.modal', function (e) {

    //     e.preventDefault();
    //     var rowid = $(e.relatedTarget).data('id');
    //     $.ajax({
    //         type : 'post',
    //         cache: false,
    //         url : 'forms/fetch_record.php', //Here you will fetch records 
    //         data :  'rowid='+ rowid, //Pass $id
    //         success : function(data){
    //             $('.fetched-data').html(data);//Show fetched data from database
    //             $('#infoEmployeeModal').modal("show");
    //         }
    //     });
    //  });
</script>

<script>

$(document).ready(function () {
    $('.modal').on('show.bs.modal', function () {
        if ($(document).height() > $(window).height()) {
            // no-scroll
            $('body').addClass("modal-open-noscroll");
        }
        else {
            $('body').removeClass("modal-open-noscroll");
        }
    });
    $('.modal').on('hide.bs.modal', function () {
        $('body').removeClass("modal-open-noscroll");
    });
})
</script>

<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css/locales/bootstrap-datepicker.el.min.js" ></script>
<script type="text/javascript" src="assets/js/jquery.ui.datepicker-el.js"></script>

</body>

</html>