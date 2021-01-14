<?php
  session_start();
  include '../db_connection.php';

  $errors = array(); 

  $counter = 0;
  $array = $_SESSION['fetched_user']['as_array'];
  foreach($array as $key => $value){
    if($value){
      $counter++;
    }
  }

  if($counter !==0 && empty($_POST['checkBoxes2'])){
    echo 'Δεν έχετε διαλέξει καμία κατάσταση για αλλαγή<br>';
    $flag = false;
  }elseif($counter===0 && empty($_POST['checkBoxes2'])) {
    echo 'Κανένας εργαζόμενος σε ενεργή κατάσταση για να την αλλάξετε<br>';
    $flag = false;
  }else {
    $afm = $_SESSION['user'];
    $flag = true;
    foreach($_POST['checkBoxes2'] as $key => $value){

      if($value === 'anastoli'){
        $id = $_SESSION['fetched_user']['as_array']['anastoli']['action_id'];
        $query_delete = "DELETE FROM employee_action WHERE action_id='$id' ";
        $update_q = "UPDATE employee SET  anastoli_id=NULL WHERE afm='$afm'";
      }elseif($value === 'adeia'){
        $id = $_SESSION['fetched_user']['as_array']['adeia']['action_id'];
        $query_delete = "DELETE FROM employee_action WHERE action_id='$id' ";
        $update_q = "UPDATE employee SET  adeia_id=NULL WHERE afm='$afm'";
      }elseif($value === 'thlergasia'){
        $id = $_SESSION['fetched_user']['as_array']['thlergasia']['action_id'];
        $query_delete = "DELETE FROM employee_action WHERE action_id='$id' ";
        $update_q = "UPDATE employee SET  thlergasia_id=NULL WHERE afm='$afm'";
      }else {
        echo "Κάτι πήγε στραβά";
      }

      if(mysqli_query($conn, $update_q)){
        if(mysqli_query($conn, $query_delete)){
          $flag = true;
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
    }
    
  }

  if($flag == true){
    echo "OK";
  }

?>