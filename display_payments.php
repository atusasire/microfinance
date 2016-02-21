<?php include "admin_header.php";?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	    <h4 class="page-header">
	    	List of client payments
	    	<i class="glyphicon glyphicon-list pull-right"></i>
	    </h4>
	    <div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>CLIENT ID</th>
						<th>AMOUNT PAID</th>
						<th>BALANCE</th>
						<th>DATE</th>
						<th>RATE</th>
					</tr>
					</thead>
					<tbody>
						<?php
						include("connection.php");
						$select = mysqli_query($con, "SELECT *FROM payments");
						if ($select) {
							while ($counter = mysqli_fetch_assoc($select)) {
								$c_id = $counter['CLIENT_ID'];
								$amount= $counter['AMOUNT_PAYED'];
								$bal = $counter['BALANCE'];
								$date = $counter['PAYING_DATE'];
								$arte = $counter['RATE'];
								echo "<tr><td>$c_id</td><td>$amount</td>
								<td>$bal</td><td>$date</td><td>$arte</td></tr>";
								# code...
							}
							# code...
						}

						?>
					</tbody>
</table>
