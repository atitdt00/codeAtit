<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipient Form</title>
</head>
<body style="width: 30%;">
    <div>
        <fieldset>
            <label for=""> Blood Request form</label><br><br>
            <form action="" method="POST">
                <input type="text" name="first_name" placeholder="First_name" ><br><br>
                <input type="text" name="last_name" placeholder="Last_name" ><br><br>
                <select name="blood_types" id="blood_types">
                    <option  selected>--Blood_types--</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="A-">A-</option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="o-">o-</option>
                    <option value="o+">o+</option>
                </select><br><br>
                <input type="text" name="address" placeholder="Address"><br><br>
                <input type="number" name="mobile_no" placeholder="mobile_no"><br><br>
                <input type="number" name="age" placeholder="Age"><br><br>
                <input type="submit" name="Request_btn" value="Request">
                <button><a href="Recipient_list.php">Back</a></button>
                
            </form>
        </fieldset>
    </div>

    <?php
         include "connect.php";

        if(isset($_POST['Request_btn'])){
            $first_name= $_POST['first_name'];
            $last_name= $_POST['last_name'];
            $blood_types= $_POST['blood_types'];
            $address= $_POST['address'];
            $mobile_no= $_POST['mobile_no'];
            $age=$_POST['age'];

            $sql= "INSERT INTO blood_requests (first_name, last_name, blood_types, address, mobile_no, age ) Values('$first_name', '$last_name','$blood_types', '$address','$mobile_no', '$age')";
            
            $data= mysqli_query($conn, $sql);
            if($data){
                ?>
                <script type="text/javascript"> 
                alert("request sent successfully to the database"); 
                </script>
                <?php
            }else{
                echo "Please try again";
            }                            
                //close the database connection
            mysqli_close($conn);
        }
     ?>
</body>
</html>