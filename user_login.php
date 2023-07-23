<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<?php
    include  'init.php'; 
       if(isset($_POST['login_btn'])){
             $username=$_POST['username'];
             $password=$_POST['password'];
             //echo $username,$password;

             $select= "SELECT *FROM user_tb WHERE username = '$username' && password= '$password'";
             $query= mysqli_query($conn, $select);
             $row = mysqli_num_rows($query);
             $fetch=mysqli_fetch_array($query);
             echo $row;
             if($row==1){
                    $username=$fetch['username'];
                    session_start();
                    $_SESSION['username']=$username;
                    header('location:main.php');

             }else{
                $invalid="invalid username and password";
             }
       }
      ?>

    <div class="signup">
        <form action="" method="POST">
            <p style="color: red;">
                <?php 
                if(isset($invalid)){
                    echo $invalid;    
                }  
                ?>
            </p>
            <h3>User Login</h3>
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" name="login_btn" value="Login">
        </form>
    </div>
        
   
</body>
</html>