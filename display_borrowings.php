<?php include "admin_header.php";?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	    <div class="row">
	    	<div class="col-sm-6 col-md-6">
	    		<h4 class="page-header">
			    	List of client borrowings
			    	<i class="glyphicon glyphicon-list pull-right"></i>
			    </h4>
	    	</div>
	    	<div class="col-sm-6 col-md-6">
	    		<form role="form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search borrowers...">
					</div>
				</form>
	    	</div>
	    </div>


	    <div class="table-responsive">
			<table class="table table-striped table-responsive">
				<thead>
					<tr>
						<th>Transaction ID</th>
						<th>Name</th>
						<th>Age</th>
						<th>Amount</th>
						<th>Borrowing Date</th>
						<th>Nation</th>
						<th>Collateral</th>
						<th>Phone Number</th>
						<th>Email Address</th>

					</tr>
				</thead>
				<tbody>
				<?php
				 include("connection.php");
				 $sex  = "";
				 $select = mysqli_query($con, "SELECT * FROM TRANSACTIONS");
				 if ($select) {
				 	if (mysqli_num_rows($select) > 0) {
				 		while ($counter = mysqli_fetch_assoc($select)) {
				 			$trasaction_id = $counter['TRANSACTION_ID'];
				 			$name = $counter['CLIENT_NAME'];
				 			$age = $counter['AGE'];
				 			$gender = $counter['GENGA'];
				 			$amount_borrowed = $counter['AMOUNT_BORROWED'];
				 			$date_borrowed = $counter['BORROWING_DATE'];
				 			$nation = $counter['NATION'];
				 			$colat = $counter['COLLATERAL_SECURITY'];
				 			$phone = $counter['PHONE_NUMBER'];
				 			$email = $counter['EMAIL'];
				 			if ($gender == "female") {
				 				$sex = "Ms. ";
				 				# code...
				 			}
				 			else{
				 				$sex = "Mr. ";
				 			}
				 			# code...
				 			echo "<tr><td>$trasaction_id</td><td>$sex $name</td><td>$age</td><td>$amount_borrowed</td><td>$date_borrowed</td><td>$nation</td><td>$colat</td><td>$phone</td><td>$email</td></tr>";
				 		}
				 		# code...
				 	}
				 	else{
				 		echo "No transactions Yet.";
				 	}
				 	# code...
				 }
				?>
				</tbody>
			</table>
		</div>
	</div>
