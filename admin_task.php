<?php include "admin_header.php";?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	    <h4 class="page-header" align="center">Add a borrower <i class="glyphicon glyphicon-plus pull-right"></i></h4>
		<?php
		include("connection.php");
		if (isset($_SESSION['save'])) {
			echo '<div class="alert alert-success">';
			echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo $_SESSION['save'];
			echo '</div>';

		}

		?>
		<form method = "POST" action = "admin_acts.php" class="form-horizontal">
			<div class="form-group">
				<label for="name_of_client" class="col-sm-3 control-label">
					Full Name
				</label>
				<div class="col-sm-9">
					<input type = "text"  class="form-control" name = "name_of_client"
				placeholder="Name..." required>
				</div>
			</div>
			<div class="form-group">
				<label for="name_of_client" class="col-sm-3 control-label">
					Age
				</label>
				<div class="col-sm-9">
					<input type = "number" min = '18' max = "65" name = "age_of_client" class="form-control"		placeholder="Age..." required>
				</div>
			</div>

			<div class="form-group">
				<label for="gender_of_client" class="col-sm-3 control-label">
					Gender
				</label>
				<div class="col-sm-7 col-sm-offset-1">
					 Male<input type = "radio" name = "ganger_of_client" value="male" style="margin-right: 30px;" checked>
					<input  type = "radio" name = "ganger_of_client" value="female">Female
				</div>
			</div>

			<div class="form-group">
				<label for="name_of_client" class="col-sm-3 control-label">
					Amount Borrowed
				</label>
				<div class="col-sm-9">
					<input type = "number" min = '10000' name = "amount_of_client" class="form-control"		placeholder="Amount..." required>
				</div>
			</div>

			<div class="form-group">
				<label for="name_of_client" class="col-sm-3 control-label">
					Date Borrowed
				</label>
				<div class="col-sm-9">
					<?php
						include("datepicker.html");
					?>
				</div>
			</div>

			<div class="form-group">
				<label for="nation_of_client" class="col-sm-3 control-label">
					Nationality
				</label>
				<div class="col-sm-9">
					<input type = "text"  class="form-control" name = "nation_of_client"
				placeholder="Nationality..." required>
				</div>
			</div>

			<div class="form-group">
				<label for="Collateal_of_client" class="col-sm-3 control-label">
					Callateral security
				</label>
				<div class="col-sm-9">
					<input type = "text"  class="form-control" name = "Collateal_of_client"
				placeholder="Callateral..." required>
				</div>
			</div>

			<div class="form-group">
				<label for="name_of_client" class="col-sm-3 control-label">
					Phone Number
				</label>
				<div class="col-sm-9">
					<input type = "text"  class="form-control" name = "phone_of_client"
				placeholder="Phone No..." required>
				</div>
			</div>

			<div class="form-group">
				<label for="email_of_client" class="col-sm-3 control-label">
					Email Address
				</label>
				<div class="col-sm-9">
					<input type = "email" name = "email_of_client"  class="form-control" placeholder="Email..." required>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
					<button type="submit" class="btn btn-info">Submit</button>
				</div>
			</div>

		</form>
	</div>
	<?php
		include("footer.php");
	?>
