<?php
    session_start();
    include '../db_connection.php';

    $errors = array(); 

    $username = $_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
    $firstname = $_POST['firstname'] = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = $_POST['lastname'] = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
    $phone =  $_POST['phone'] = mysqli_real_escape_string($conn, $_POST['phone']);
    $afm =  $_POST['afm'] = mysqli_real_escape_string($conn, $_POST['afm']);
    $role =  $_POST['role'] = mysqli_real_escape_string($conn, $_POST['role']);
    $password_1 = $_POST['password_1'] = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = $_POST['password_2'] = mysqli_real_escape_string($conn, $_POST['password_2']);
    if($role === 'ergazomenos'){
        $afmEmployer =  $_POST['afmEmployer'] = mysqli_real_escape_string($conn, $_POST['afmEmployer']);
    }

    if ($password_1 != $password_2) {
        echo "Οι κωδικοί που εισάγατε δεν ταιριάζουν<br />";
        array_push($errors, "Οι κωδικοί που εισάγατε δεν ταιριάζουν");
    }

    $user_check_query = "SELECT * FROM genericuser WHERE (username='$username' OR afm='$afm' OR email='$email') LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
            echo  "Το όνομα χρήστη υπάρχει ήδη <br />";
        }

        if ($user['afm'] === $afm) {
            array_push($errors, "Το ΑΦΜ υπάρχει ήδη");
            echo  "Το ΑΦΜ υπάρχει ήδη <br />";
        }

        if ($user['email'] === $email) {
            array_push($errors, "Το email χρησιμοποιείται από άλλον χρήστη");
            echo "Το email χρησιμοποιείται από άλλον χρήστη<br />";
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);   //encrypt the password before saving in the database

        $query = "INSERT INTO genericuser (username, firstname, lastname, password, email, phone, afm, role)
                VALUES ('$username','$firstname','$lastname', '$password', '$email', '$phone', '$afm', '$role')";



        if(mysqli_query($conn, $query)){
            
            if($role === 'ergazomenos') {
                $employee_query = "INSERT INTO employee (afm,workingFor) VALUES ('$afm','$afmEmployer')";
                mysqli_query($conn, $employee_query);
                
    
                $employee_actions_q = "SELECT * FROM employee WHERE afm='$afmEmployer' LIMIT 1";
                $result = mysqli_query($conn, $employee_actions_q);
                $actions = mysqli_fetch_assoc($result);

                if($actions){
                    $_SESSION["actions"] = $actions;    
                }

                $employer_query = "SELECT * FROM genericuser WHERE afm='$afmEmployer' LIMIT 1";
                $employer_res = mysqli_query($conn, $employer_query);
                $employer = mysqli_fetch_assoc($employer_res);

                if($employer){
                    $_SESSION["employer"] = $employer;
                }
                
            } else {
                $employer_query = "INSERT INTO employer (afm) VALUES ('$afm')";
                mysqli_query($conn, $employer_query);
            }

            $_SESSION['submit'] = true;
            $_SESSION['login_user'] = true;
            
            $_SESSION["username"] = $username;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["password"] = $password;
            $_SESSION["email"] = $email;
            $_SESSION["phone"] = $phone;
            $_SESSION["afm"] = $afm;
            $_SESSION["role"] = $role;      
            
            $_POST = array();
            
            if($role === 'ergazomenos' ){
                $_SESSION["afmEmployer"] = $afmEmployer;
                echo 'OK:worker.php';
            }else {
                echo 'OK:business.php';
            }
            
        }
        else{
            array_push($errors, "Αποτυχία εγγραφής");
            echo mysqli_errno($conn) . ": " . mysqli_error($conn). "\n";
            echo 'Αποτυχία εγγραφής <br />';
        }

    }else{
        echo 'Αποτυχία εγγραφής<br />';
    }
?>