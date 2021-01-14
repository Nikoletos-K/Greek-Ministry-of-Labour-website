<?php
  session_start();
 
  include '../db_connection.php';
 
  $errors = array(); 

  $fromdate = strtotime($_POST['date1']);
  $todate = strtotime($_POST['date2']);
  $afm = $_SESSION['afm'];


    if($todate < $fromdate){
        echo "Η ημερομηνία λήξης είναι νωρίτερα της έναρξης<br>";
    }else{

        $date1 = $_POST['date1'] = mysqli_real_escape_string($conn, $_POST['date1']);
        $date2 =  $_POST['date2'] = mysqli_real_escape_string($conn, $_POST['date2']);    
        $dhlwsh= $_POST['dhlwsh'] = mysqli_real_escape_string($conn, $_POST['dhlwsh']);

        
        $insert_action = "INSERT INTO employee_action (type,starting_date,end_date) 
                        VALUES  ('$dhlwsh','$date1','$date2')";

        if(!mysqli_query($conn, $insert_action)){
            echo mysqli_errno($conn)."_--".mysqli_error($conn)."<br /> ";
        }


        $increment_index = mysqli_insert_id($conn);


        switch($dhlwsh) {
        
        case "adeia":
            $insert_to_employee = "UPDATE employee 
                                    SET  adeia_id='$increment_index'
                                    WHERE afm='$afm'";
            break;
        }

        if(!mysqli_query($conn, $insert_to_employee)){
        echo mysqli_errno($conn)."_--".mysqli_error($conn)."<br /> ";
        }else{
            echo "OK";
    
        } 
    }
   
?>