
<?php
	include("header.php");
	include("connection.php");
	if (isset($_SESSION['no'])) {
		echo $_SESSION['no'];
		# code...
	}

?>
	<div class="row">
	    <div class="col-xs-1 col-sm-3 col-md-3"></div>
	    <div class="col-xs-10 col-sm-6 col-md-6" valign="middle">
	    	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 align="center">Signup for an account</h3>
				</div>
				<div class="panel-body">
					<form method = "POST" action = "client.php" class = "alert alert-info">
						Enter Transaction id:
						<input type = "number" required name = "id" class = "form-control" required autofocus>
						<br/>
						Enter Password:
						<input type = "password" required name = "pin_one" class = "form-control" required autofocus>
						<br/>
						Confirm Password:
						<input type = "Password" required name = "comfirm_pin" class = "form-control" required autofocus>
						<br/>
						<input type = "submit" name="signup" class = "btn btn-primary btn-block" value = "OK">

					</form>
				</div>
				<div class="panel-footer">
					Already a member: <a href="index.php">Login</a>
				</div>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>
