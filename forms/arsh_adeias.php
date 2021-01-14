<?php
  session_start();
 
  include '../db_connection.php';
 
  $errors = array(); 

  $afm = $_SESSION['afm'];

  $result = mysqli_query($conn,"SELECT * FROM employee WHERE afm=$afm");  
  $row = mysqli_fetch_array($result);
  $id = $row['adeia_id'];
  $query_delete = "DELETE FROM employee_action WHERE action_id='$id' ";
  $update_q = "UPDATE employee SET  adeia_id=NULL WHERE afm='$afm'";

  if(mysqli_query($conn, $update_q)){
    if(mysqli_query($conn, $query_delete)){
      echo "OK";
    }else {
      echo mysqli_errno($conn)."_--".mysqli_error($conn)."<br /> ";
      echo 'Η ενημέρωση απέτυχε<br>';
      $flag = false;
    }
  } else {
      echo mysqli_errno($conn)."_--".mysqli_error($conn)."<br /> ";
      echo 'Η ενημέρωση απέτυχε<br>';
      $flag = false;
  }

  ?>