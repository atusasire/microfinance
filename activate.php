<?php
	include("header.php");
?>
	<div class="row">
	    <div class="col-xs-1 col-sm-3 col-md-3"></div>
	    <div class="col-xs-10 col-sm-6 col-md-6" valign="middle">
	    	<div class="panel panel-default">
				<div class="panel-heading">
					<h3 align="center">Login as a Manager</h3>
				</div>
				<div class="panel-body">
					<form method = "POST" action = "login.php" class = "">
						Enter passkey
						<input type = "password" name = "password_track" class = "form-control" required autofocus>
						<br/>
						<input type = "submit" class = "btn btn-primary btn-block" value = "Activate System">
						<br/><p class = "alert-index alert-danger"> </p>
					</form>
				</div>
				<div class="panel-footer">
					Not a manager: <a href="client_sign_up.php">Go to login</a>
				</div>
			</div>

	    </div>
	    <div class="col-xs-1 col-sm-2 col-md-2"></div>
	</div>


<?php
	include("footer.php");
?>
