<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<?php
    include  'init.php'; 
       if(isset($_POST['admin_btn'])){
             $username=$_POST['username'];
             $password=$_POST['password'];
             //echo $username,$password;

             $Select= "SELECT *FROM admin_user  WHERE username = '$username' && password= '$password'";
             $query= mysqli_query($conn, $Select);
             $row = mysqli_num_rows($query);
             $fetch=mysqli_fetch_array($query);
             if($row==1){
                 $username=$fetch['username'];
                    session_start();
                    $_SESSION['username']=$username;
                    header('location:Admin Panel/admin_panel.php');

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
            <h3>admin Login</h3>
            <input type="text" name="username" placeholder="username"><br><br>
            <input type="password" name="password" placeholder="password"><br><br>
            <input type="submit" name="admin_btn" value="administer">
        </form>
    </div>
        
    

</body>
</html>