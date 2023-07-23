

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" href="admin_panel.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="file:///C:/Users/ATIT%20DANGAURA%20THARU/Downloads/bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <script src="file:///C:/Users/ATIT%20DANGAURA%20THARU/Downloads/bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="navbar">
        <header class="header">
            <h1 class="u-name">Admin <b>Panel</b></h1>
            <i class="fa fa-user" aria-hidden="true"></i>
        </header>
        <div class="body">
            <nav class="side-bar">
                <div class="user-p">
                    <img src="/image/logoblood.jpg" alt="blood" class="">
                </div>
                <ul>
                    <li>
                        <a href="dashboard.php" target="_self">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="Donor_List.php" target="_self">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span>Donor_list</span>
                        </a>
                    </li>
                    <li>
                        <a href="Recipient_list.php" target="_self">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <span>Recipient_list</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_self">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <span>All Records Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <span>logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <section class="section-1">
                <h1>Welcome</h1>
                <p>Administrator</p>
            </section>
        </div>
    </div>
    <!-- <?php
  // session_start();
   //if(!isset( $_SESSION['username'])){
     // header('location:login.php');
      //exit;
   
?> -->
</body>

</html>