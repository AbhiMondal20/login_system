<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome <?php echo $_SESSION['username'] ;   ?></title>
</head>
<body>
<?php 
 require "partilas/nav.php";
    session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user'] !=true){
    header("location: login.php");
        exit;

    }
 
 ?>

    <h1 class="text-center my4">Wellcome to Wellcome</h1>
</body>
</html>