<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up pages</title>
</head>
<body>
<?php  require "partilas/nav.php"  ?>
<div class="container my-4">
    <h2 class="text-center">Signup to our Website</h2>

     <form action="/login_system/signup.php" method="POST">
        <div class="mb-3" >
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
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