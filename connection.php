<?php
$_SERVER = "localhost";
$username = "root";
$password = "";
$database = "login_system_1";


$conn = mysqli_connect($_SERVER,$username, $password, $database);
if(!$conn){
    echo "Connetion is not Successfull".mysqli_connection_error($conn);
}

?>