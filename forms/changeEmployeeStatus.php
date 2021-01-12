<?php
  session_start();
  include '../db_connection.php';

  $errors = array(); 

  if($_POST['rowid']){
    $_SESSION['fetched_user']['anastoli'] = NULL;
    echo "HERE";
  }
    
//   $_SESSION['fetched_user']['anastoli'] = NULL;


?>