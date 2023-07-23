<?php
include "connect.php";

$id = isset($_GET['id']) ? $_GET['id'] : '';
$select = "SELECT *FROM blood_requests WHERE id = '$id'";
$result = mysqli_query($conn, $select);
$row = mysqli_fetch_array($result);

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
            <label for="">Donor Registration form</label><br><br>
            <form action="" method="POST">
                <input type="text" name="first_name" placeholder="first_name" value="<?php echo $row['first_name']; ?>">
                <br><br>
                <input type="text" name="last_name" placeholder="last_name" value="<?php echo $row['last_name'] ?>">
                <br><br>
                <select name="blood_types" id="blood_types">
                    <option value="" selected>Blood_types</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="O+">O+</option>
                </select><br><br>
                <br><br>
                <input type="text" name="address" placeholder="Address" value="<?php echo $row['address'] ?>">
                <br><br>
                <input type="number" name="mobile_no" placeholder="mobile_no" value="<?php echo $row['mobile_no'] ?>">
                <br><br>
                <input type="number" name="age" placeholder="Age" value="<?php echo $row['age'] ?>">
                <br><br>
                <input type="submit" name="update_btn" value="Update">
                <button> <a href="Donor_List.php">Back</a></button>

            </form>
        </fieldset>
    </div>
    <?php
       

        if(isset($_POST['update_btn'])){
            $fname = $_POST['first_name'];
            $last_name= $_POST['last_name'];
            $blood_type=$_POST['blood_type'];
            $address= $_POST['address'];
            $mobile_no= $_POST['mobile_no'];
            $age=$_POST['age'];

            $update= "UPDATE blood_requests SET fname='$fname', last_name='$last_name', blood_type='$blood_type', address= '$address', mobile_no= '$mobile_no', age= '$age' WHERE id = '$id' ";
            
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