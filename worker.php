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
                            <li>Νέα δήλωση </li>
                            <li>Ένσημα</li>
                            <li>Έγγραφα</li>
                        </ul>
                        <div class="tab-content">
                            <div>
                            <h5>Η εργασιακή μου κατάσταση</h5><br>
                            <p class="text-justify" style="font-size:18px;">
                            Σε αυτόν τον πίνακα βλέπετε την εργασιακή κατάσταση, που έχει προκύψει από δικές σας ενέργειες, αλλά και του εργοδότη σας. Η επιλογή άρσης κάποιας
                            δήλωσης γίνεται μόνο στην περίπτωση άδειας ειδικού σκοπού με το σύμβολο <i class="fa fa-trash" aria-hidden="true" style="color:red;" title="Άρση δήλωσης"> </i> . Στις υπόλοιπες περιπτώσεις το δικαίωμα αυτό το διαθέτει μόνο ο εργοδότης σας.
                            </p>
                            <!-- <i>Μετά από κάθε ενέργεια ανανεώστε την σελίδα για να δείτε τις αλλαγές στον πίνακα πληροφοριών.</i> -->
                                <div class="container">
                                    <div class="table-responsive">
                                        <div class="table-wrapper">

                                            <form method="post" action="forms/afms.php" id="checkBoxes_POST"> 
                                                <div class="table-title">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h2>Δηλώσεις </h2>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <button style="font-size:16px;" type="submit" name="submit" value="Δήλωση" data-toggle="modal"  data-target="#nea_dhlwsh" class="btn btn-success"></input>
                                                                <i class="fa fa-file-text-o" aria-hidden="true"></i>Νέα Δήλωση
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php  
                                                    $afm = $_SESSION["afm"];
                                                    $query_2 = "SELECT * FROM employee WHERE afm='$afm' ";
                                                    $user_q = mysqli_query($conn, $query_2);
                                                    $user_benefits = mysqli_fetch_assoc($user_q);
                                                    $anastoli_id = $user_benefits['anastoli_id'];

                                                    if($anastoli_id){
                                                        $query = "SELECT * FROM employee_action WHERE action_id='$anastoli_id' ";
                                                        $result = mysqli_query($conn, $query);
                                                        $anastoli = mysqli_fetch_assoc($result);
                                                        if($anastoli){
                                                            $_SESSION['fetched_user']['anastoli'] = $anastoli;
                                                        }else{
                                                            $_SESSION['fetched_user']['anastoli'] = NULL;
                                                        }   
                                                    }else{
                                                        $_SESSION['fetched_user']['anastoli'] = NULL;
                                                    }
                                                
                                                    $thlergasia_id = $user_benefits['thlergasia_id'];
                                                    if($thlergasia_id){
                                                        $query = "SELECT * FROM employee_action WHERE action_id='$thlergasia_id' ";
                                                        $result = mysqli_query($conn, $query);
                                                        $thlergasia = mysqli_fetch_assoc($result);
                                                        if($thlergasia){
                                                            $_SESSION['fetched_user']['thlergasia'] = $thlergasia;
                                                        }else{
                                                            $_SESSION['fetched_user']['thlergasia'] = NULL;
                                                        }   
                                                    }else{
                                                        $_SESSION['fetched_user']['thlergasia'] = NULL;
                                                    }
                                                    
                                                
                                                    $adeia_id = $user_benefits['adeia_id'];
                                                    if($adeia_id){
                                                        $query = "SELECT * FROM employee_action WHERE action_id='$adeia_id' ";
                                                        $result = mysqli_query($conn, $query);
                                                        $adeia = mysqli_fetch_assoc($result);
                                                        if($adeia){
                                                            $_SESSION['fetched_user']['adeia'] = $adeia;
                                                        }else{
                                                            $_SESSION['fetched_user']['adeia'] = NULL;
                                                        }   
                                                    }else{
                                                        $_SESSION['fetched_user']['adeia'] = NULL;
                                                    }
                                                
                                                    $_SESSION['fetched_user']['as_array'] = array();
                                                    $_SESSION['fetched_user']['as_array']['adeia'] = $_SESSION['fetched_user']['adeia'];
                                                    $_SESSION['fetched_user']['as_array']['thlergasia'] = $_SESSION['fetched_user']['thlergasia'];
                                                    $_SESSION['fetched_user']['as_array']['anastoli'] = $_SESSION['fetched_user']['anastoli'];
                                                
                                                ?> 
                                            
                                                <table id="table" class="table table-striped table-hover ">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th class="w-25">Δήλωση</th>
                                                            <th>Κατάσταση</th>
                                                            <th>Από</th>
                                                            <th>Εώς</th>
                                                            <th>Ενέργειες</th>
                                                        </tr>
                                                    </thead> 
                                                    <tbody class="text-center">

                                                        <?php  
                                                            $array = $_SESSION['fetched_user']['as_array'];
                                                            foreach($array as $key => $value) {

                                                                if($key === 'anastoli')   {
                                                                    $newtype = 'Αναστολή σύμβασης εργασίας';
                                                                } elseif ($key === 'adeia') {
                                                                    $newtype = 'Άδεια ειδικού σκοπού';
                                                                } else {
                                                                    $newtype = 'Τηλεργασία';
                                                                } 
                                                                if(!$value){
                                                                    $date1 = ' - ';
                                                                    $date2 = ' - ';
                                                                    $status = 'ΑΝΕΝΕΡΓΗ';

                                                                } else {
                                                                    $date1 = $value['starting_date'];
                                                                    $date2 =  $value['end_date'];
                                                                    $status = 'ΕΝΕΡΓΗ';
                                                                    
                                                                }
                                                                
                                                                echo "<tr>";
                                                                
                                                                echo "<td>" . $newtype .  "</td>";
                                                                echo "<td>" ;
                                                                    if($value) {
                                                                        echo "<h8 class='badge badge-success'>ΕΝΕΡΓΗ</h8><br>";
                                                                    }else{
                                                                        echo "<h8 class='badge badge-danger'>ΑΝΕΝΕΡΓΗ</h8><br>";
                                                                    }                            
                                                                echo "</td>";
                                                                echo "<td>" . $date1 . "</td>";
                                                                echo "<td>" . $date2 . "</td>";
                                                                $myafm = $_SESSION['afm'];
                                                                if($key === 'adeia'){ 
                                                                    echo ' <td>
                                                                    <a href="#deleteAdeiaModal" data-id="'.$myafm .'" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true" style="color:red;" title="Άρση δήλωσης"> </i> </a>
                                                                    </td>
                                                                    </tr>';
                                                                }else{
                                                                    echo " <td>
                                                                    -
                                                                    </td>
                                                                    </tr>";
                                                                }    
                                                            }
                                                        ?>
                                                    </tbody> 
                                                </table> 
                                            </form>

                                            
                                            <div class="clearfix">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a href="#">Προηγούμενο</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">Επόμενο</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="deleteAdeiaModal" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">        
                                            <form action="forms/arsh_adeias.php" method="post" role="form"  class="php-email-form">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                                <div class=" section-title">						
                                                    <h3 style="font-weight: bold; ">Άρση δήλωσης ειδικού σκοπού</h3><br><hr>
                                                    <h5>Είστε βέβαιος/η ότι θέλετε να ακυρώσετε την άδεια ειδικού σκοπού;</h5>
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <div class="loading">Φόρτωση</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">H άρση άδειας ειδικού σκοπού έγινε με επιτυχία</div>
                                                </div>
                                                <div class="text-center">
                                                    <button value="submit" name="submit" type="submit" class="btn btn-danger">Άρση</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>    

                                <!-- Nea dhlwsh Modal HTML -->
                                <div id="nea_dhlwsh" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">        
                                            <form action="forms/nea_dhlwsh.php" method="post" role="form"  class="php-email-form">
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
                                                                <option value="adeia" >Άδεια ειδικού σκοπού</option>
                                                                <option value="apwzhmeiwsh-eidikou-skopou" >Αίτηση απωζημείωσης ειδικού σκοπού</option>
                                                                <option value="anergia" >Επίδομα ανεργείας</option>
                                                                <option value="paraithsh" >Αίτηση παραίτησης</option>
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
                                                        <!-- <div class="form-group col-md-6" id="marriage" style="display:none;">
                                                            <label for="marriage">Οικογενειακή κατάσταση</label>
                                                            <select name="marriage" class="form-control" data-msg="Παρακαλώ εισάγετε την εργασιακή σας κατάσταση">
                                                                <option value="married">Έγγαμος</option>
                                                                <option value="non-married">Άγαμος</option>
                                                            </select>  
                                                            <div class="validate"></div>
                                                        </div> -->
                                                
                                                        <!-- <div class="form-group col-md-6" id="children"style="display:none;">
                                                            <label for="children">Αριθμός ανήλικων τέκνων</label>
                                                            <select name="children" class="form-control" data-msg="Παρακαλώ εισάγετε την εργασιακή σας κατάσταση">
                                                                <option value="default" style="display:none;">Διαλέξτε</option>
                                                                <option value="one">1</option>
                                                                <option value="two">2</option>
                                                                <option value="three">3</option>
                                                                <option value="more_three">Περισσότερα από 3</option>
                                                            </select>
                                                            <div class="validate"></div>
                                                        </div> -->
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

                                <div class="container" >
                                    <div class="container z-depth-1" style="background-color: white;padding-bottom:30px;"  ><br><br>
                                        <div class="row ">
                                            <div class="col-md-9" style="padding-left:30px; padding-top:20px; "><h5><i class="fa fa-user-circle-o" aria-hidden="true"></i> Στοιχεία εργοδότη </h5></div>
                                            <!-- <div class="col-md-3" ><a  href="#editProfileEmployerModal" data-toggle="modal"style="background-color: rgb(226, 226, 226); text-transform: none;"  type="button" class="btn">
                                            <i class="icofont-ui-edit"></i> Αλλαγή εργοδότη </a></div>  -->
                                        </div><hr> 
                                        <p style = "font-style:italic">Παρακάτω παρουσιάζονται όλα τα στοιχεία του εργοδότη για τον οποίο εργάζεστε και με τα οποία μπορείτε να έρθετε σε επαφή μαζί του.</p>
                                
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-md-4">
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">'Ονομα</label>
                                                    <div class="col-sm-8">
                                                    <?php echo $_SESSION["employer"]["firstname"]; ?>
                                                    </div>
                                                </div>
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-8">
                                                    <?php echo $_SESSION["employer"]["email"]; ?>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">Επίθετο</label>
                                                    <div class="col-sm-8">
                                                    <?php echo $_SESSION["employer"]["lastname"]; ?>
                                                    </div>
                                                </div>
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">Τηλέφωνο</label>
                                                    <div class="col-sm-8">
                                                    <?php echo $_SESSION["employer"]["phone"]; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div style="font-size:16px;" class="form-group">
                                                    <label style="font-weight:bold;" class="col-sm-2 control-label">ΑΦΜ</label>
                                                    <div class="col-sm-10">
                                                        <?php echo $_SESSION["employer"]["afm"]; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>      
                                </div>

                            </div>

                            <div></div>
                            
                            <div></div>
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
<script src="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css/locales/bootstrap-datepicker.el.min.js" ></script>
<script type="text/javascript" src="assets/js/jquery.ui.datepicker-el.js"></script>

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
        case 'adeia':
            $('#date1').show();
            $('#date2').show();
            $('#marriage').show();
            $('#children').show();
            break;
        default:
            $('#date1').hide();
            $('#date2').hide();
            $('#marriage').hide();
            $('#children').hide();
            break;
    }
  });
  
  $('tbody tr input:checkbox').click(function(e) {
    e.stopPropagation();
  });

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
            }
        });
     });

    $('#infoEmployeeModal').on('show.bs.modal', function (e) {

        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            cache: false,
            url : 'forms/fetch_record.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
                $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });
</script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css/locales/bootstrap-datepicker.el.min.js" ></script>

</body>

</html>