<?php



$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = '';
$db = 'sdi1700038';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    
if($conn === false) {
    die("1. Connect failed: %s\n". mysqli_connect_error());
}

function OpenCon()
{
    define("DB_SERVER", "127.0.0.1:3307");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "sdi1700038");

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

    if($conn === false) {
        die("Connect failed: %s\n". mysqli_connect_error());
    }
    return $conn;
}
 
function CloseCon($conn)
 {
     $conn -> close();
 }

 function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}
?>