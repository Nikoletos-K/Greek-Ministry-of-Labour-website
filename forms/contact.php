<?php

  include '../db_connection.php';
  session_start();
  OpenCon();

  $errors = array(); 

  $name = $_POST['name'] = mysqli_real_escape_string($conn, $_POST['name']);
  $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
  $subject =  $_POST['subject'] = mysqli_real_escape_string($conn, $_POST['subject']);
  $message =  $_POST['message'] = mysqli_real_escape_string($conn, $_POST['message']);

   if (count($errors) == 0) {

      $query = "INSERT INTO message (name,  email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

      if(mysqli_query($conn, $query)){
         
         $_SESSION['reg_user'] = true;
         $_SESSION['login_user'] = true;
          
          $_SESSION["name"] = $name;
          $_SESSION["email"] = $email;
          $_SESSION["subject"] = $subject;
          $_SESSION["message"] = $message;
        
      }
      else{
         array_push($errors, "Αποτυχία εγγραφής");
      }
   }

  if (count($errors) == 0) {
    echo "OK";
  }   else {
    echo "NOT_OK";
  }

?>