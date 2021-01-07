<?php

  include '../db_connection.php';
  // include '../assets/vendor/php-email-form/validate.js';

  // echo "About to start\n";
  session_start();
  OpenCon();
  // echo "Connected Successfully\n";

  $errors = array(); 

  // if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $name = $_POST['name'] = mysqli_real_escape_string($conn, $_POST['name']);
    $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
    $subject =  $_POST['subject'] = mysqli_real_escape_string($conn, $_POST['subject']);
    $message =  $_POST['message'] = mysqli_real_escape_string($conn, $_POST['message']);
  // }


  // Finally, register user if there are no errors in the form
   if (count($errors) == 0) {
      // $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO message (name,  email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

      if(mysqli_query($conn, $query)){
         
         $_SESSION['reg_user'] = true;
         $_SESSION['login_user'] = true;
         
         $_SESSION["name"] = $name;
         $_SESSION["email"] = $email;
         $_SESSION["subject"] = $subject;
         $_SESSION["message"] = $message;
        
        //  header('location:../profile/profile.php');
      }
      else{
         array_push($errors, "Αποτυχία εγγραφής");
      }
   }

   if (count($errors) == 0) {
    echo "OK";
  } 
  else {
    echo "NOT_OK";
  }

?>