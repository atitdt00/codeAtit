<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="blood_bank_db";

    $conn= mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die ("connection failed". mysqli_connect_error());
    }

?>