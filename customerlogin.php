<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<form action="" method="post">
		<center>
		<h1>Customer Login</h1>
		<table class="table">
		<tr>
			<td>name</td>
			<td><input type="text" name="Name" class="form-control"> </td>
		</tr>
		<tr>
			<td>email</td>
			<td><input type="text" name="Email" class="form-control"> </td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="Password" class="form-control"> </td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="create" class="btn btn-danger"> </td>
		</tr>
		
		
		</table>
		</center>
		
	</form>

	<?php 
            if(isset($_POST["create"]))
            {
                $cname = $_POST["Name"];
				$cemail = $_POST["Email"];
				$cpass = $_POST["Password"];
				
                $sql = mysqli_query($con,"INSERT INTO `customertb`(`cname`, `cemail`, `cpassword`) 
				VALUES ('$cname','$cemail','$cpass')");

                if($sql)
                {
                    header("location:index.php");
                }
                else
                {
                    echo "Data Not Save";
                }
            }
        ?>
	</div>
	
</body>
</html>