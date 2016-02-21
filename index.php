
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
					<h3 align="center">Login as an account holder</h3>
				</div>
				<div class="panel-body">
					<form method = "POST" action = "loginClient.php" class = "alert alert-info">
						Enter Transaction ID:
						<input type = "password" name = "id_track" class = "form-control" required autofocus>
						<br/>
						Enter password:
						<input type = "password" name = "password_track" class = "form-control" required>
						<br/>
						<input type = "submit" class = "btn btn-primary btn-block" value = "Login">
						<br/><p class = "alert-index alert-danger"> </p>
					</form>
				</div>
				<div class="panel-footer">
					Your First Time: <a href="client_sign_up.php">Sign up for an account</a>
				</div>
			</div>
		</div>
	</div>
