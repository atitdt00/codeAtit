<?php
include "connect.php";

$id = isset($_GET['id']) ? $_GET['id'] : '';
$selects = "SELECT *FROM donor_record WHERE id = '$id'";
$results = mysqli_query($conn, $selects);
$row = mysqli_fetch_array($results);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form</title>
</head>

<body>
    <div>
        <fieldset for="label">
            <label for="">Donor update page</label><br><br>
            <form action="" method="POST">
                <input type="text" name="fname" placeholder="fname" value="<?php echo $row['fname']; ?>">
                <br><br>
                <input type="text" name="email" placeholder="email" value="<?php echo $row['email'] ?>">
                <br><br>
                <input type="text" name="address" placeholder="Address" value="<?php echo $row['address'] ?>">
                <br><br>
                <input type="number" name="mobile_no" placeholder="mobile_no" value="<?php echo $row['mobile_no'] ?>">
                <br><br>
                <input type="number" name="age" placeholder="Age" value="<?php echo $row['age'] ?>">
                <br><br>
                <input type="submit" name="update_btn" value="update">
                <button> <a href="Donor_List.php">Back</a></button>

</form>
        </fieldset>
    </div>
    <?php
       

        if(isset($_POST['update_btn'])){
            $fname = $_POST['fname'];
            $email= $_POST['email'];
            $address= $_POST['address'];
            $mobile_no= $_POST['mobile_no'];
            $age=$_POST['age'];

            $update= "UPDATE donor_record SET fname='$fname', email='$email', address= '$address', mobile_no= '$mobile_no', age= '$age' WHERE id = '$id' ";
            
            $data= mysqli_query($conn, $update);
            if($data){
                ?>
                <script type="text/javascript">
                 alert("update data successfully"); 
                 </script>
                <?php
            }

            header("Location: Donor_List.php");
            exit();
        
        }
     ?>

</body>

</html>