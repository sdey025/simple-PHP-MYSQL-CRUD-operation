<?php 
    include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
<?php
        
                if(isset($_POST['submit']))
                {	 
                     $name = $_POST['name'];
                     $email = $_POST['email'];
                     $mobile = $_POST['mobile'];
                     $dob = $_POST['dob'];
                     $pin = $_POST['pin'];
                     $sql = "INSERT INTO details (name,email,mobile,dob,pin)
                     VALUES ('$name','$email','$mobile','$dob','$pin')";
                     if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                     } else {
                        echo "Error: " . $sql . "
                " . mysqli_error($conn);
                     }

                }
              
            ?>  
<br>
<center><h1>Personal details</h1><center><br>
<form action="index.php" method="post" name="myform" onsubmit="return validateemail();">
    <center><div class="firstdiv">
      <label for="name">Enter your name:</label> <input type="text" name="name" class="input" placeholder="Enter your name">
    </div></center>
    <br>
    <center><div class="firstdiv">
      <label for="email">Enter your Email:</label> <input type="text" name="email" class="input" placeholder="Enter your Email">
    </div></center>
    <br>
    <center><div class="firstdiv">
      <label for="mobile">Enter your Mobile:</label> <input type="text" name="mobile" class="input" placeholder="Enter your Mobile" maxlegth="10">
    </div></center>
    <br>
    <center><div class="firstdiv">
      <label for="dob">Enter your Date of birth:</label> <input type="date" name="dob" class="input" placeholder="Enter your Date of birth">
    </div></center>
    <br>
    <center><div class="firstdiv">
      <label for="pin">Enter your PIN code:</label> <input type="text" name="pin" class="input" placeholder="Enter your PIN code" maxlength="6">
    </div></center>
    <br>
    <center><button type="submit" class="button" name="submit">Submit</button></center>
</form>
<br>
<center><a href="read.php">See all record</a><a href="delete_&_update.php" style="margin-left: 10px;">Delete or Update Records</a></center>

<script>
 function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }  
} 

</script>
</body>
</html>