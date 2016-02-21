<?php include "admin_header.php";?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="panel panel-default">
			<h4 align="center">
				Change system password <i class="glyphicon glyphicon-pencil pull-right"></i>
			</h4><legend></legend>
			<div class="panel-body">
				<form method = "POST" action = "change_pin.php">

					Enter Old password:
					<input type = "password" required name = "old_password" class = "form-control" required autofocus>
					<br/>
					Enter Password:
					<input type = "password" required name = "new_password" class = "form-control" required autofocus>
					<br/>
					Confirm Password:
					<input type = "Password" required name = "confirm_password" class = "form-control" required autofocus>
					<br/>
					<input type = "submit" class = "btn btn-info" value = "Change">

				</form>
			</div>
			<a href="activate.php" class="btn btn-mini pull-right">Login again</a>
		</div>
