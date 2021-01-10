<?php
    session_start();
    include '../db_connection.php';

    $errors = array(); 
    $changed_fields = 0;

    if(isset($_POST['username']) && $_POST['username'] !== '' && $_SESSION['login_user'] === true ) {
        
        $temp_username = $_POST['username'];
        $user_check_query = "SELECT * FROM genericuser WHERE username='$temp_username' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Το όνομα χρήστη υπάρχει ήδη");
                echo  "Το όνομα χρήστη υπάρχει ήδη <br />";
            }
        }else{
        
            $username = $_POST['username'] = mysqli_real_escape_string($conn, $_POST['username']);
            $changed_fields++;
        }

    } else {
        $username = $_SESSION['username'];
    }

    if(isset($_POST['firstname']) && $_POST['firstname'] !== '' && $_SESSION['login_user'] === true ) {
        $firstname = $_POST['firstname'] = mysqli_real_escape_string($conn, $_POST['firstname']);
        $changed_fields++;
    } else {
        $firstname = $_SESSION['firstname'];
    }

    if(isset($_POST['lastname']) && $_POST['lastname'] !== '' && $_SESSION['login_user'] === true ) {
        $lastname = $_POST['lastname'] = mysqli_real_escape_string($conn, $_POST['lastname']);
        $changed_fields++;
    } else {
        $lastname = $_SESSION['lastname'];
    }

    if(isset($_POST['email']) && $_POST['email'] !== '' && $_SESSION['login_user'] === true ) {
        $email = $_POST['email'] = mysqli_real_escape_string($conn, $_POST['email']);
        $changed_fields++;
    } else {
        $email = $_SESSION['email'];
    }

    if(isset($_POST['phone']) && $_POST['phone'] !== '' && $_SESSION['login_user'] === true ) {
        $phone = $_POST['phone'] = mysqli_real_escape_string($conn, $_POST['phone']);
        $changed_fields++;    
    } else {
        $phone = $_SESSION['phone'];
    }

    if(isset($_POST['afm'])  && $_POST['afm'] !== '' && $_SESSION['login_user'] === true ) {
        $afm = $_POST['afm'] = mysqli_real_escape_string($conn, $_POST['afm']);
        $changed_fields++;    
        
    } else {
        $afm = $_SESSION['afm'];
    }

    if(isset($_POST['role']) && $_POST['role'] !== 'default' && $_SESSION['login_user'] === true ) {
        $role = $_POST['role'] = mysqli_real_escape_string($conn, $_POST['role']);
        $changed_fields++;   
    } else {
        $role = $_SESSION['role'];
    }


    if(isset($_POST['password_1'])  && $_POST['password_1'] !== '' && $_SESSION['login_user'] === true ) {

        if(isset($_POST['password_2']) && $_POST['password_2'] !== '' && $_SESSION['login_user'] === true ) {
            
            if ( $_POST['password_1'] !== $_POST['password_2']) {
                echo "Οι κωδικοί που εισάγατε δεν ταιριάζουν<br />";
                array_push($errors, "Οι κωδικοί που εισάγατε δεν ταιριάζουν");
            }
            $password = md5($_POST['password_1']);
            $changed_fields++;    
        
        } else {
            echo "Πρέπει να συμπληρώσετε και τους δύο κωδικούς";
            array_push($errors,"Πρέπει να συμπληρώσετε και τους δύο κωδικούς");
        }
    }else {
        $password = $_SESSION['password'];
    } 

    if (count($errors) == 0 && $changed_fields > 0) {

        $user_delete_query = "DELETE FROM genericuser WHERE username='$username';";
        $result = mysqli_query($conn, $user_delete_query);

        $query = "INSERT INTO genericuser (username, firstname, lastname, password, email, phone, afm, role) 
                VALUES ('$username','$firstname','$lastname', '$password', '$email', '$phone', '$afm', '$role')";

        if(mysqli_query($conn, $query)){

            
            $_SESSION["username"] = $username;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["password"] = $password;
            $_SESSION["email"] = $email;
            $_SESSION["phone"] = $phone;
            $_SESSION["afm"] = $afm;
            $_SESSION["role"] = $role;      
                        
           echo 'OK';
        } else {
            array_push($errors, "Αποτυχία εγγραφής");
            echo 'Αποτυχία ενημέρωσης προφίλ <br />';
        }

    }else{

        if($changed_fields === 0){
            echo 'Κανένα ενημερώμενο πεδίο <br>';
        } else {
            echo 'Αποτυχία ενημέρωσης προφίλ <br />';
        }
    }
?>