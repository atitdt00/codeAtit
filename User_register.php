<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/signup.css">
  <title>Signup page</title>
</head>
<body>
<p style="color: red;">
      <?php
        if(isset($error)){
          echo $error;
        }
   
      ?>
    </p>
    <p style="color: green;">
      <?php 
         if (isset($success)) {
          echo $success;
        }
      ?>
    </p>
  <div class="signup">
    
    <form action="" method="POST">
 
    <h3>Create Account?</h3>
      <input type="text" name="username" placeholder="username"><br><br>
      <input type="password" name="password" placeholder="password"><br><br>
      <input type="password" name="c_password" placeholder="confirm-password"><br><br>

      <input type="submit" name="signup_btn" value="signup">
    </form>
  </div>
  <?php
  include 'init.php';
  if (isset($_POST['signup_btn'])) { 
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $c_password = mysqli_real_escape_string($conn, $_POST['c_password']);

    if (empty($username)) {
     echo $error = "username field is required";
    } elseif(empty($password)) {
     echo $error ="password field is required";
    } elseif ($password != $c_password) {
     echo $error = "Confirm password does not match to password";
    } elseif (strlen($username) < 3 || strlen($username) > 30) {
     echo $error = "username must be between 3 character to 30 character";
    } elseif (strlen($password) < 6) {
      echo $error = "password must be 6 character";
    } else {
      $check_username = "SELECT *FROM user_tb WHERE username = '$username'";
      $data = mysqli_query($conn, $check_username);
      $result = mysqli_fetch_array($data);
      if ($result > 0) {
       echo $error = "username already exist";
      } else {
        $pass = md5($password);
        $insert = "INSERT INTO user_tb (username, password) values('$username', '$pass')";
        $query = mysqli_query($conn, $insert);
        if($query){
         echo $success= "Your account has been created successfully";
        }
      }
    }
  }

  ?>
</body>

</html>