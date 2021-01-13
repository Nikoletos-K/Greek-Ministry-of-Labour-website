<?php
  session_start();
  include '../db_connection.php';
  $errors = array(); 

  if($_POST['rowid']) {
    
    $afm = $_POST['rowid'];
    
    $_SESSION['user'] = $_POST['rowid'];

    $query_1 = "SELECT * FROM genericuser WHERE afm='$afm' ";
    $user_q = mysqli_query($conn, $query_1);
    $user = mysqli_fetch_assoc($user_q);
    $_SESSION['fetched_user']['data'] = $user;

    $query_2 = "SELECT * FROM employee WHERE afm='$afm' ";
    $user_q = mysqli_query($conn, $query_2);
    $user_benefits = mysqli_fetch_assoc($user_q);

    $anastoli_id = $user_benefits['anastoli_id'];
    if($anastoli_id){
        $query = "SELECT * FROM employee_action WHERE action_id='$anastoli_id' ";
        $result = mysqli_query($conn, $query);
        $anastoli = mysqli_fetch_assoc($result);
        if($anastoli){
            $_SESSION['fetched_user']['anastoli'] = $anastoli;
        }else{
            $_SESSION['fetched_user']['anastoli'] = NULL;
        }   
    }else{
        $_SESSION['fetched_user']['anastoli'] = NULL;
    }

    $thlergasia_id = $user_benefits['thlergasia_id'];
    if($thlergasia_id){
        $query = "SELECT * FROM employee_action WHERE action_id='$thlergasia_id' ";
        $result = mysqli_query($conn, $query);
        $thlergasia = mysqli_fetch_assoc($result);
        if($thlergasia){
            $_SESSION['fetched_user']['thlergasia'] = $thlergasia;
        }else{
            $_SESSION['fetched_user']['thlergasia'] = NULL;
        }   
    }else{
        $_SESSION['fetched_user']['thlergasia'] = NULL;
    }
    

    $adeia_id = $user_benefits['adeia_id'];
    if($adeia_id){
        $query = "SELECT * FROM employee_action WHERE action_id='$adeia_id' ";
        $result = mysqli_query($conn, $query);
        $adeia = mysqli_fetch_assoc($result);
        if($adeia){
            $_SESSION['fetched_user']['adeia'] = $adeia;
        }else{
            $_SESSION['fetched_user']['adeia'] = NULL;
        }   
    }else{
        $_SESSION['fetched_user']['adeia'] = NULL;
    }

    $_SESSION['fetched_user']['as_array'] = array();
    $_SESSION['fetched_user']['as_array']['adeia'] = $_SESSION['fetched_user']['adeia'];
    $_SESSION['fetched_user']['as_array']['thlergasia'] = $_SESSION['fetched_user']['thlergasia'];
    $_SESSION['fetched_user']['as_array']['anastoli'] = $_SESSION['fetched_user']['anastoli'];

  }

?>