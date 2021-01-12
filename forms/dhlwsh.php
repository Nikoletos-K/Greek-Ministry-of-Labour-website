<?php
  session_start();
 
  include '../db_connection.php';
 
  $errors = array(); 

  // echo "DHLVSH";
  // print_r($_SESSION['checkBoxes']);

  if(empty($_SESSION['checkBoxes'])) {
    echo "Δεν έχετε επιλέξει κανέναν εργαζόμενο για κάποια ενέργεια<br>";
    $_SESSION['checkBoxes'] = array();
  } else {

    $employeeAFMs = $_SESSION['checkBoxes'];

    $date1 = $_POST['date1'] = mysqli_real_escape_string($conn, $_POST['date1']);
    $date2 =  $_POST['date2'] = mysqli_real_escape_string($conn, $_POST['date2']);    
    $dhlwsh= $_POST['dhlwsh'] = mysqli_real_escape_string($conn, $_POST['dhlwsh']);

    foreach($employeeAFMs as $afm) {
      
      $insert_action = "INSERT INTO employee_action (type,starting_date,end_date) 
                        VALUES  ('$dhlwsh','$date1','$date2')";

      if(!mysqli_query($conn, $insert_action)){
        echo mysqli_errno($conn)."_--".mysqli_error($conn)."<br /> ";
      }


      $increment_index = mysqli_insert_id($conn);


      switch($dhlwsh) {
        case "anastoli":
          $insert_to_employee = "UPDATE employee 
                                  SET  anastoli_id='$increment_index'
                                    WHERE afm='$afm'";
          break;

        case "apostasi":
          $insert_to_employee =  "UPDATE employee 
            SET  thlergasia_id ='$increment_index'
            WHERE afm='$afm'";
          break;

        case "adeia_eidikou_skopou":
          $insert_to_employee =  "UPDATE employee 
            SET  adeia_id ='$increment_index'
            WHERE afm='$afm'";
          break;
      }

      if(!mysqli_query($conn, $insert_to_employee)){
        echo mysqli_errno($conn)."_--".mysqli_error($conn)."<br /> ";
      }

    }

    echo "OK";
    $_SESSION['checkBoxes'] = array();
  } 

   
?>