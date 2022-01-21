
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pages</title>
</head>
<body>
    <?php 

include "partilas/nav.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $arr = true;
    require 'connection.php';
  
          $username = $_POST['username'];
          $password = $_POST['password'];
          $exists = false;
          
          ///insert data in user
          
          
          $sql = "SELECT * FROM `user` where username= '$username' AND password='$password' ";
          $result = mysqli_query($conn , $sql);
          $num = mysqli_num_rows($result);
          
          if($num == 1){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> Your are login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            session_start();
            $_SESSION['user'] = true;
            $_SESSION['username'] = $username;
            header("location: welcome.php");
            // header("location: \CRUD\CRUD.php");
          }
          else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid</strong> Credentials.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        
        
      }
  
  
?>


<div class="container my-4">
    <h3 class="text-center">Loing to our website</h3>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">UserName</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
    
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>


</body>
</html>