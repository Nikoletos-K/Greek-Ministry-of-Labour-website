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
 
            <div class="col-lg-10 mt-4 mt-lg-0">
                <div class="profile-wrapper">   
                    <div class="tab-wrapper">
                        <ul class="tab-menu " >
                            <li class="active">Δηλώσεις</li>
                            <li>Κατάσταση Επιχείρησης </li>
                            <li>Εργαζόμενοι</li>
                            <li>Ένσημα</li>
                            <li>Έγγραφα</li>
                            <li>Επεξεργασία προφίλ</li>
                        </ul>
                        <div class="tab-content">
                            <div>
                                <h5>Επιλέξτε δήλωση</h5>
                                <br>
                                <div class="select-btn" style="padding-bottom:50px;">                    
                                    <select id="aithsh" class="form-control col-md-6" >
                                        <option value="default" style="display:none;">Διαλέξτε</option>
                                        <option value="anastoli" >Δήλωση αναστολής σύμβασης εργασίας</option>
                                        <option value="apostasi" >Δήλωση εξ αποστάσεως εργασία</option>
                                        <option value="apozhmeiwsh-erg" >Δήλωση αποζημείωσης εργαζομένων</option>
                                        <option value="apozhmeiwsh-eter" >Δήλωση αποζημείωσης εταιρείας</option>
                                        <option value="apolysh" >Δήλωση απόλυσης</option>
                                        <option value="proslhpsh" >Δήλωση πρόσληψης</option>
                                    </select>
                                </div>
                                <form style="display:none;" id="anastoli" action="forms/anastoli.php" method="post" role="form" class="contact">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="php-email-form col-md-9">
                                            <div class="form-row">
                                                <div class="section-title">
                                                    <br>
                                                    <h3 style="font-weight: bold; ">Δήλωση αναστολής σύμβασης εργασίας</h3><br><hr>
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

                                <form style="display:none;" id="apostasi" action="forms/apostasi.php" method="post" role="form" class="contact">
                                    <div class=" d-flex justify-content-center align-items-center">
                                        <div class="php-email-form col-md-9">
                                            <div class="form-row">
                                                <div class="section-title">
                                                    <br>
                                                    <h3 style="font-weight: bold; ">Δήλωση εξ αποστάσεως εργασία</h3><br><hr>
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
                                <h5>Κατάσταση της επιχείρησης</h5>
                                    <br>
                            </div>
                            <div>
                                <h5>Οι εργαζόμενοι της επιχείρησης</h5><br>

                                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                <script>
                                    $(document).ready(function(){
                                        // Activate tooltip
                                        $('[data-toggle="tooltip"]').tooltip();
                                        
                                        // Select/Deselect checkboxes
                                        var checkbox = $('table tbody input[type="checkbox"]');
                                        $("#selectAll").click(function(){
                                            if(this.checked){
                                                checkbox.each(function(){
                                                    this.checked = true;                        
                                                });
                                            } else{
                                                checkbox.each(function(){
                                                    this.checked = false;                        
                                                });
                                            } 
                                        });
                                        checkbox.click(function(){
                                            if(!this.checked){
                                                $("#selectAll").prop("checked", false);
                                            }
                                        });
                                    });
                                </script>

                                <!-- <div class="container"> -->
                                    <div class="table-responsive">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h2>Διαχείρηση <b>Εργαζομένων</b></h2>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="#dhlwshEmployeeModal" class="btn btn-secondary" data-toggle="modal"><i class="fa fa-file-text-o" aria-hidden="true"></i> Δήλωση</a>
                                                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> Προσθήκη</a>
                                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> Διαγραφή</a>						
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <span class="custom-checkbox">
                                                                <input type="checkbox" id="selectAll">
                                                                <label for="selectAll"></label>
                                                            </span>
                                                        </th>
                                                        <th>Ονοματεπώνυμο</th>
                                                        <th>Email</th>
                                                        <th>ΑΦΜ</th>
                                                        <th>Κατάσταση</th>
                                                        <th>Ενέργειες</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="custom-checkbox">
                                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                                <label for="checkbox1"></label>
                                                            </span>
                                                        </td>
                                                        <td>Thomas Hardy</td>
                                                        <td>thomashardy@mail.com</td>
                                                        <td>89 Chiaroscuro Rd, Portland, USA</td>
                                                        <td>(171) 555-2222</td>
                                                        <td>
                                                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Αλλαγή">&#xE254;</i></a>
                                                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Διαγραφή">&#xE872;</i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                <!-- Add Modal HTML -->
                                <div id="addEmployeeModal" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">
                                            <form class="php-email-form">
                                                <div class="modal-header">						
                                                    <h4 class="modal-title">Προσθήκη υπαλλήλου</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body" style="font-size:18px;">					
                                                    <div class="form-group">
                                                        <label>Ονοματεπώνυμο</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ΑΦΜ</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>					
                                                </div>
                                                <div class="text-center">
                                                    <input type="submit" class="btn btn-success" value="Δημιουργία">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Edit Modal HTML -->
                                <div id="editEmployeeModal" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">
                                            <form class="php-email-form">
                                                <div class="modal-header">						
                                                    <h4 class="modal-title">Προσθήκη υπαλλήλου</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body" style="font-size:18px;">					
                                                    <div class="form-group">
                                                        <label>Ονοματεπώνυμο</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>ΑΦΜ</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>					
                                                </div>
                                                <div class="text-center">
                                                    <input type="submit" class="btn btn-success" value="Δημιουργία">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- dhlwsh Modal HTML -->
                                <div id="dhlwshEmployeeModal" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">        
                                            <form class="php-email-form">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                                <div class=" section-title">						
                                                <h3 style="font-weight: bold; ">Δήλωση εργαζομένου</h3><br><hr>
                                                <h7>Αρχικά επιλέξτε την δήλωση που σας ενδιαφέρει και στην συνέχεια συμπληρώστε τα στοιχεία που ζητούνται. 
                                                    <br>Όλα τα πεδία είναι <b>υποχρεωτικά</b>.</h7><br><hr>
                                                </div>
                                                <div class="modal-body">					
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="dhlwsh">Είδος δήλωσης</label>
                                                            <select name="dhlwsh" id="dhlwsh" class="form-control" data-msg="Παρακαλώ επιλέξτε την δήλωση που επιθυμείτε">
                                                            <option value="default" style="display:none;">Διαλέξτε</option>
                                                            <option value="anastoli" >Δήλωση αναστολής σύμβασης εργασίας</option>
                                                            <option value="apostasi" >Δήλωση εξ αποστάσεως εργασία</option>
                                                            <option value="apozhmeiwsh-erg" >Δήλωση αποζημείωσης εργαζομένων</option>
                                                            <option value="apozhmeiwsh-eter" >Δήλωση αποζημείωσης εταιρείας</option>
                                                            <option value="apolysh" >Δήλωση απόλυσης</option>
                                                            <option value="proslhpsh" >Δήλωση πρόσληψης</option>
                                                            </select>
                                                            <div class="validate"></div>
                                                        </div>
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
                                                    </div>					
                                                </div>
                                                <div class="text-center">
                                                    <button value="submit" name="submit" type="submit">Αποστολή</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Delete Modal HTML -->
                                <div id="deleteEmployeeModal" class="modal fade contact">
                                    <div class="modal-dialog row justify-content-center">
                                        <div class="modal-content">
                                            <form class="php-email-form">
                                                <div class="modal-header">						
                                                    <h4 class="modal-title">Διαγραφή υπαλλήλου</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                </div>
                                                <div class="modal-body">					
                                                    <p style="font-size:18px;">Είστε βέβαιος/η ότι θέλετε να διαγράψετε αυτές τις εγγρφές; </p>
                                                    <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                                                </div>
                                                <div class="text-center">
                                                    <input style="font-size:18px;" type="submit" class="btn btn-danger" value="Διαγραφή">
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
                            <div>
                                <h5>Επεξεργασία των στοιχείων μου</h5>
                                    <br>
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
<script src="assets/js/wrapper.js"></script>

<script>
$('#aithsh').change(function(){
    $('form').hide();
    $('form#'+$(this).val()).show();
});
</script>


</body>

</html>