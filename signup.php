<?php
$alert = false;
$error = false;


?>

<?php


if($_SERVER["REQUEST_METHOD"] == 'POST'){
  
    require  "connection.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $exits = false;
  if(($password == $cpassword) && $exits == false ){ 

    $sql = "INSERT INTO `user` ( `username`, `password`, `d&t`) VALUES ( '$username', '$password', current_timestamp())";


    $resullt = mysqli_query($conn, $sql);
    if($resullt){
        $alert = true;    

             }
             

       }else{
         $error = true;
       }
   
    
    




}





?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up pages</title>
</head>
<body>
<?php
  require "partilas/nav.php" ;
  if($alert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Successfull!</strong> You can login if you can want.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  if($error){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Wrong!</strong> Your password could not match.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

 
?>

<div class="container my-4">
    <h2 class="text-center">Signup to our Website</h2>

     <form action="/login_system/signup.php" method="POST">
        <div class="mb-3" >
            <label for="username" class="form-label">User Name</label>
            <input type="text" required name="username" class="form-control" id="username" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" required name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password</label>
            <input type="password" name="cpassword" class="form-control" id="cpassword">
            <div id="emailHelp" class="form-text">Make sure to type the same password</div>
        </div>
        <button type="submit" class="btn btn-primary">SignUp</button>
    </form>
</div>
    
</body>
</html>