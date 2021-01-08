<?php
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

    if ($password_1 != $password_2) {
        echo "Οι κωδικοί που εισάγατε δεν ταιριάζουν<br />";
        array_push($errors, "Οι κωδικοί που εισάγατε δεν ταιριάζουν");
    }

    $user_check_query = "SELECT * FROM genericuser WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
            echo  "Το όνομα χρήστη υπάρχει ήδη <br />";
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
            
            if($role === 'ergazomenos' ){
                echo 'OK:worker.php';
            }else {
                echo 'OK:business.php';
            }
            
        }
        else{
            array_push($errors, "Αποτυχία εγγραφής");
            echo 'Αποτυχία εγγραφής<br />';
        }

    }else{
        echo 'Αποτυχία εγγραφής<br />';
    }
?>