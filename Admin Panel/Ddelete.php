<?php
include "connection.php";

$id =$_GET['id'];
$delete= "DELETE FROM donor_record WHERE id='$id'";
$Data = mysqli_query($conn,$delete);

if($Data){
    ?>
    <script type="text/javascript">
            alert("Data Deleted Successfully");
     </script>
    <?php
}
    else{
        ?>
         <script type="text/javascript">
            alert("please tyr again");
    </script>
        <?php

    }

    header("Location: http://localhost/Blood%20Bank%20and%20Donor%20Management%20System/Admin%20Panel/Donor_List.php", "_self");
    mysqli_close($conn);
?>

