<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<center><a href="index.php">Go to main page</a><a href="delete_&_update.php" style="margin-left: 10px;">Delete or Update Records</a></center>
<br>
    <center><h3>Here is all the details</h3></center>
    <br>
    <table style="width:100%;">
        <tr>
            <th><center>Name</center></th>
            <th><center>Email</center></th>
            <th><center>Mobile</center></th>
            <th><center>Date of Birth</center></th>
            <th><center>PIN code</center></th>
        </tr>
        <?php
        $result = mysqli_query($conn,"SELECT * FROM details");

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                   ?>
        <tr >
        
            
            <td style="margin-bottom: 40px;"><center><?php echo $row["name"]; ?></center></td>
            <td style="margin-bottom: 40px;"><center><?php echo $row["email"]; ?></center></td>
            <td style="margin-bottom: 40px;"><center><?php echo $row["mobile"]; ?></center></td>
            <td style="margin-bottom: 40px;"><center><?php echo $row["dob"]; ?></center></td>
            <td style="margin-bottom: 40px;"><center><?php echo $row["pin"]; ?></center></td>
            
        </tr>
        <?php
        }
    }
   ?>
    </table>
</body>
</html>