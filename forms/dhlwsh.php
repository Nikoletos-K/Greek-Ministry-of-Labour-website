<?php
  session_start();
 
  include '../db_connection.php';
 
  $errors = array(); 

  print_r($_SESSION['checkBoxes']);

  if(isset($_POST['dhlwsh'])) {
    $dhlwsh= $_POST['dhlwsh'] = mysqli_real_escape_string($conn, $_POST['dhlwsh']);
  }
  if(isset( $_POST['date1'])) {
    $date1 = $_POST['date1'] = mysqli_real_escape_string($conn, $_POST['date1']);
  }
  if(isset($_POST['date2'])) {
    $date2 =  $_POST['date2'] = mysqli_real_escape_string($conn, $_POST['date2']);
  }
//   if(isset($_POST['checkBoxes'][])) {
//     $checkBoxes=  $_POST['checkBoxes'] = mysqli_real_escape_string($conn, $_POST['checkBoxes']);
//     echo $checkBoxes;
    if(!empty($_POST['checkBoxes'])) {
        echo 'hhhhhhhhhh';
        foreach($_POST['checkBoxes'] as $check) {
                echo $check; //echoes the value set in the HTML form for each checked checkbox.
                             //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
                             //in your case, it would echo whatever $row['Report ID'] is equivalent to.
        }
    }
//   }

//   if (count($errors) == 0) {

   

//     $query = "INSERT INTO employee_action(name,  email, subject, message) 
//           VALUES ('$name', '$email', '$subject', '$message')";

//     if(mysqli_query($conn, $query)){
//       echo "OK";
//     } else {
//       echo "FAIL";
//     }
    
//   } else {
//     echo "FAIL";
//   }  
?>