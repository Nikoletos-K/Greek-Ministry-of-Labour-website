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

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM simpleuser WHERE username='$username' OR email='$email' LIMIT 1";
  // $result = mysqli_query($conn, $user_check_query);
  // $user = mysqli_fetch_assoc($result);
  
  // if ($user) { // if user exists
  //   if ($user['username'] === $username) {
  //     array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
  //   }

  //   if ($user['email'] === $email) {
  //     array_push($errors, "Το email χρησιμοποιείται από άλλον χρήστη");
  //   }
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

  //  $php_email_form = 

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];


  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
  
  $bim = 1;
  if ($bim == 0) {
    echo "OK";
  } 
  else {
    echo "NOT_OK";
  }

?>