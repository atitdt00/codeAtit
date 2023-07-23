<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONOR_LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="width: 50%;">
    <h1>list of Donors</h1><br>
    <a href="Donor.php">Donate form</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>mobile_no</th>
                <th>address</th>
                <th>age</th>
                <th>action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include "connect.php";
            //read all row from daabase table
            $sql = "SELECT *FROM donor_record";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                //output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                 echo "
                <tr>
                <td>$row[id] </td>
                <td>$row[fname] </td>
                <td>$row[email] </td>
                <td>$row[mobile_no]</td>
                <td>$row[address]</td>
                <td>$row[age]</td>
              
                <td> 
                    <a href='DUpdate.php? id=$row[id]'>update</a>
                    <a href='Ddelete.php? id=$row[id]'>delete</a>
                </td>
            </tr>
             ";
                }
            }else{
                ?> 
                <tr>
                    <td>NO Record Found</td>
                </tr>
                <?php
    
            }

             
              mysqli_close($conn);  

            ?>
        </tbody>
    </table>

</body>

</html>