<?php
  session_start();
 
  include '../db_connection.php';
 
  $errors = array(); 

  $_SESSION['checkBoxes'] = $_POST['checkBoxes'];

  print_r($_SESSION['checkBoxes']);
  
?>