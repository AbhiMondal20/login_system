<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log_out pages</title>
</head>
<body>
<?php  require "partilas/nav.php"  ?>
<?php
session_start();
session_unset();
session_destroy();
echo "<br> You Have Been log out";
header("location: login.php");

?>
    
</body>
</html>