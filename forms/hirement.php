<?php
    session_start();
    include '../db_connection.php';

    $errors = array(); 

    
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
                $employee_query = "INSERT INTO employee (afm) VALUES ('$afm')";
                mysqli_query($conn, $employee_query);
    
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
                echo 'OK:worker.php';
            }else {
                echo 'OK:business.php';
            }
            
        }
        else{
            array_push($errors, "Αποτυχία εγγραφής");
            echo mysqli_errno($conn) . ": " . mysqli_error($conn). "\n";
            echo 'Αποτυχία εγγραφής - 1<br />';
        }

    }else{
        echo 'Αποτυχία εγγραφής - 2<br />';
    }
?>