<?php
include("connection.php");
if (isset($_SESSION['strong_pin'])) {
	$code = $_SESSION['strong_pin'];
	# code...
}

?>
<a href="logout.php">Log out</a>
		<div class="table-responsive">
			<table class="table table-striped table-responsive">
				<thead>
					<tr>
						<td>CLIENT ID</td><td>AMOUNT PAID</td><td>BALANCE</td><td>DATE</td><td>RATE</td>
					</tr>
				</thead>
				<tbody>
					<?php
					 $select = mysqli_query($con, "SELECT *FROM payments WHERE 	CLIENT_ID = '$code'");
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
		</div>
