<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipient_list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="width: 50%;">
    <h1>list of Recipient</h1><br>
    <a href="Recipient.php" class="button">Blood Request form</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>blood_types</th>
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
            $Select = "SELECT *FROM blood_requests";
            $resultall = mysqli_query($conn, $Select);
            if (!$resultall) {
                // Error handling code
                die("Query failed: " . mysqli_error($conn));
            }
            
            if(mysqli_num_rows($resultall)> 0) {
                //output data of each row
                while ($rows = mysqli_fetch_array($resultall)) {
                 echo "
                <tr>
                <td>$rows[id] </td>
                <td>$rows[first_name] </td>
                <td>$rows[last_name] </td>
                <td>$rows[blood_types] </td>
                <td>$rows[mobile_no]</td>
                <td>$rows[address]</td>
                <td>$rows[age]</td>
                
              
                <td> 
                    <a href='RUpdate.php? id=$rows[id]'>update</a>
                    <a href='RDelete.php? id=$rows[id]'>delete</a>
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
            ?>
        </tbody>
    </table>

</body>

</html>