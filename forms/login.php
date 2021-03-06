<?php
    session_start();
    include '../db_connection.php';

    $errors = array(); 

    $username = $_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'] = mysqli_real_escape_string($conn, $_POST['password']);


    $user_check_query = "SELECT * FROM genericuser WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists

        $password = md5($password);
        $user_check_query_with_psw = "SELECT * FROM genericuser WHERE username='$username' AND password='$password' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query_with_psw);
        $validated_user = mysqli_fetch_assoc($result);
        if ( ! $validated_user ) {
            echo 'Λάθος κωδικός πρόσβασης, προσπαθήστε ξανά<br>'; 
            array_push($errors, "Λάθος κωδικός πρόσβασης, προσπαθήστε ξανά<br>");
        }

    } else {
        echo "Το όνομα χρήστη " . $username . " δεν υπάρχει, προσπαθήστε ξανά<br>"; 
        array_push($errors, "Το όνομα χρήστη δεν υπάρχει");
    }


    // Finally, register user if there are no errors in the form
    if (count($errors) == 0 && $validated_user) {

            
        $_SESSION['submit'] = true;
        $_SESSION['login_user'] = true;
        
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["firstname"] = $validated_user['firstname'];
        $_SESSION["lastname"] = $validated_user['lastname'];
        $_SESSION["email"] = $validated_user['email'];
        $_SESSION["phone"] = $validated_user['phone'];
        $_SESSION["afm"] = $validated_user['afm'];
        $_SESSION["role"] = $validated_user['role'];      

        if($validated_user['role'] === 'ergazomenos'){

            $employee_afm = $validated_user['afm'];
            $employee_actions_q = "SELECT * FROM employee WHERE afm='$employee_afm' LIMIT 1";
            $result = mysqli_query($conn, $employee_actions_q);
            $actions = mysqli_fetch_assoc($result);
            $afmEmployer = $actions['workingFor'];
            $_SESSION["afmEmployer"] = $afmEmployer;      

            if($actions){
                $_SESSION["actions"] = $actions;    
            }

            $employer_query = "SELECT * FROM genericuser WHERE afm='$afmEmployer' LIMIT 1";
            $employer_res = mysqli_query($conn, $employer_query);
            $employer = mysqli_fetch_assoc($employer_res);

            if($employer){
                $_SESSION["employer"] = $employer;
            }
        }
        
        if($validated_user['role'] === 'ergazomenos' ){
            echo 'OK:worker.php';
        }else {
            echo 'OK:business.php';
        }
  
    }else{
        echo 'Αποτυχία σύνδεσης<br />';
    }
?>