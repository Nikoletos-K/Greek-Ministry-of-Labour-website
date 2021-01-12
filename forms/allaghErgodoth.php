<?php
    session_start();
    include '../db_connection.php';

    $errors = array(); 
    $changed_fields = 0;

    $afm =  $_SESSION["afm"];

    if(isset($_POST['afmEmployer']) && $_POST['afmEmployer'] !== '' && $_SESSION['login_user'] === true ) {
        $afmEmployer = $_POST['afmEmployer'] = mysqli_real_escape_string($conn, $_POST['afmEmployer']);
        $changed_fields++;   
    } else {
        $afmEmployer = $_SESSION['afmEmployer'];
    }

    if (count($errors) == 0 && $changed_fields > 0) {

        if($afmEmployer !== $_SESSION['afmEmployer']){
    
            $query = "UPDATE employee 
                    SET workingFor = '$afmEmployer'
                    WHERE afm = '$afm'";

            mysqli_query($conn, $query);

            $_SESSION["afmEmployer"] = $afmEmployer;
        }
                    
        echo 'OK';

    }else{

        if($changed_fields === 0){
            echo 'Το πεδίο δεν ενημερώθηκε σωστά <br>';
        } else {
            echo 'Αποτυχία ενημέρωσης προφίλ <br />';
        }
    }
?>