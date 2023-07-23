<?php
   session_start();
   if(!isset( $_SESSION['username'])){
      header('location:login.php');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blood Bank and Management System</title>
</head>
<body>
   <div class="container">
      <div class="header">
         <a href="index.php"><img src="pxfuel(4).jpg" alt="logo">Blood Bank</a>
         <a href="user_login.php">Logout</a>
      </div>
      <div class="container">
         <div class="sidebar">   
            <ul>
               <li><a href="dashboard.php">Dashboard</a></li>
               <li><a href="Donor_List.php">Donor_list</a></li>
               <li><a href="Recipient.php">Recipient List</a></li>
               <li><a href="#">contact us</a></li>

            </ul>
         </div>
      </div>
   </div>
   
</body>
</html>