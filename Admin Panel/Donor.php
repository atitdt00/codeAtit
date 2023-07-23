<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Form</title>
</head>

<body style="width: 30%;">
    <div>
        <fieldset>
            <label for="">Donor Registration form</label><br><br>
            <form action="" method="POST">
                <input type="text" name="fname" placeholder="Name"><br><br>
                <input type="email" name="email" placeholder="email"><br><br>
                <input type="text" name="address" placeholder="Address"><br><br>
                <input type="number" name="mobile_no" placeholder="mobile_no"><br><br>
                <input type="number" name="age" placeholder="Age"><br><br>
                <input type="submit" name="save_btn" value="save">
                <button><a href="Donor_List.php" >Back</a></button>

            </form>
        </fieldset>
    </div>

    <?php
    include "connect.php";

    if (isset($_POST['save_btn'])) {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mobile_no = $_POST['mobile_no'];
        $age = $_POST['age'];

        $Insert = "INSERT INTO donor_record (fname, email, address, mobile_no, age ) Values('$fname', '$email', '$address','$mobile_no', '$age')";

        $data = mysqli_query($conn, $Insert);
        if ($data) {
    ?>
            <script type="text/javascript">
                alert("Data Stored Successfully");
                
            </script>
    <?php
        } else {
            echo "Please try again";
        }
    }
    ?>
</body>

</html>