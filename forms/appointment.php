<?php
  session_start();
  include '../db_connection.php';
 
  $errors = array(); 

  if(isset($_POST['firstname_surname'])) {
    $firstname_surname = $_POST['firstname_surname'] = mysqli_real_escape_string($conn, $_POST['firstname_surname']);
  }else {
    array_push($errors, 1);
  }
  if(isset($_POST['tmhma'])) {
    $tmhma = $_POST['tmhma'] = mysqli_real_escape_string($conn, $_POST['tmhma']);
  }else {
    array_push($errors, 2);
  }
  if(isset($_POST['appointmenthour'])) {
    $appointmenthour = $_POST['appointmenthour'] = mysqli_real_escape_string($conn, $_POST['appointmenthour']);
  }else {
    array_push($errors, 3);
  }
  if(isset( $_POST['email'])) {
    $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
  }else {
    array_push($errors, 4);
  }
  if(isset($_POST['date'])) {

    $date =  $_POST['date'] = mysqli_real_escape_string($conn, $_POST['date']);

  }else {
    array_push($errors, 5);
  }
  if(isset($_POST['message'])) {
    $message =  $_POST['message'] = mysqli_real_escape_string($conn, $_POST['message']);
  } else {
    array_push($errors, 6);
  }
   

  if (count($errors) == 0) {

    $query = "INSERT INTO appointment (firstname_surname,  email, appointmentfor, date, appointmenthour, message) 
          VALUES ('$firstname_surname', '$email', '$tmhma', '$date', '$appointmenthour', '$message')";

    if(mysqli_query($conn, $query)){
        echo "OK";
    } else {
        echo "FAIL";
    }

  } else {
    echo "NOT_OK";
  }  
?>