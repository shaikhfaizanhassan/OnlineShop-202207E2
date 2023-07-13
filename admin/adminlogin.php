<?php 
	include("connection.php");
	session_start();

	if(isset($_SESSION["adminid"])!=null)
	{
		header("location:index.php");
	}
	else{

	

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Admin Login</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<form action="" method="post">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Admin Login</h4>
						<hr>
						<div class="form-group mb-3">
							<input type="text" name="txtuser" class="form-control"  placeholder="User Name">
						</div>
						<div class="form-group mb-4">
							<input type="password" name="txtupass" class="form-control"  placeholder="Password">
						</div>
						
						<input type="submit" class="btn btn-primary" name="btnlogin">
					</div>
					</form>

					<?php 
						if(isset($_POST["btnlogin"]))
						{
							$uname = $_POST["txtuser"];
							$upassword = $_POST["txtupass"];
	
							$login = mysqli_query($con,"select * from admin where username='$uname' AND password='$upassword'");
							$check = mysqli_num_rows($login);
							$a  = mysqli_fetch_array($login);
							if($check)
							{
								$_SESSION["adminid"] = $a[0];
								$_SESSION["adminname"] = $a[1];
								
								header("location:index.php");
							}
							else
							{
								echo "Login Failed";
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>

<script src="assets/js/pcoded.min.js"></script>



</body>

</html>
<?php } ?>
