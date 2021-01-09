<?php
  session_start();
  include '../db_connection.php';
 
  $errors = array(); 

  if(isset($_POST['name'])) {
    $name = $_POST['name'] = mysqli_real_escape_string($conn, $_POST['name']);
  }
  if(isset( $_POST['email'])) {
    $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
  }
  if(isset($_POST['subject'])) {
    $subject =  $_POST['subject'] = mysqli_real_escape_string($conn, $_POST['subject']);
  }
  if(isset($_POST['message'])) {
    $message =  $_POST['message'] = mysqli_real_escape_string($conn, $_POST['message']);
  }
   

  if (count($errors) == 0) {

    $query = "INSERT INTO message (name,  email, subject, message) 
          VALUES ('$name', '$email', '$subject', '$message')";

    if(mysqli_query($conn, $query)){
      echo "OK";
    } else {
      echo "FAIL";
    }
    
  } else {
    echo "FAIL";
  }  
?>