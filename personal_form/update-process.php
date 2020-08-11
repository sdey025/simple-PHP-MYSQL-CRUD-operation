<?php
include_once 'database.php';
if(isset($_POST["submit"])) {
mysqli_query($conn,"UPDATE details set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', mobile='" . $_POST['mobile'] . "' ,pin='" . $_POST['pin'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
if(isset($_GET["id"])){
    $result = mysqli_query($conn,"SELECT * FROM details WHERE id ='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);

?>
<html>
<head>
<style>
            body{
            font-family: sans-serif;
        }
        .firstdiv{
           align: center;
        }
        input{
            width:500px;
            height:30px;
            border: 2px solid #ccc;
            border-radius: 0%;
            margin-left:10px;
            transition: 0.4s;
            border-top:none;
            border-right:none;
            border-left:none;
        }
        input:hover{
            border: 2px solid #A9A9B0;
            border-top:none;
            border-right:none;
            border-left:none;
        }
        .button{
            width:200px;
            height:50px;
            font-size:25px;
            background-color: #FF69B4;
            box-shadow: none;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        .button:hover{
            background-color: #FFB6C1;
            border:none;
        }
</style>
<title>Update Details</title>
</head>
<body>
<form name="frmUser" method="post" action="update-process.php">
<div>
</div>
<center>
<div style="padding-bottom:5px;">
<a href="read.php">Users List</a>
</div>
<label for="id"> Id:</label> 
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br><br><br>
<label for="name"> Name: </label>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br><br><br>
<label for="mobile"> Mobile: </label>
<input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>">
<br><br><br>
<label for="email"> Email: </label>&nbsp;&nbsp;&nbsp;
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br><br><br>
<label for="pin"> PIN: </label>
<input type="text" name="pin" class="txtField" value="<?php echo $row['pin']; ?>">
<br><br><br>
<label for="dob"> Date of Birth: </label>
<input type="text" name="dob" class="txtField" value="<?php echo $row['dob'];  ?>">
<br><br><br>
<input type="submit" name="submit" value="Submit" class="button">
    <?php } ?>
    <?php if(isset($message)) { echo $message." <a href='read.php'>Go back</a>"; } ?>
</form></center>
</body>
</html>