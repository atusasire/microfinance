<?php
$charles_pin  =  "";
	include("connection.php");

	if (isset($_SESSION['strong_pin'])) {
	header("location:admin_task.php");
	exit();
	# code...
}


	if (!empty($_POST['password_track'])) {
		$pin = $_POST['password_track'];
		$strong_pin = hash("ripemd128", $pin);





		// check current pin
		$select = mysqli_query($con, "SELECT PIN FROM SECURITY");
		if ($select) {
			while ($counter = mysqli_fetch_assoc($select)) {
				$pin = $counter['PIN'];
				if ($strong_pin == $pin) {
					# code...
					$_SESSION['strong_pin'] = $strong_pin;
					header("location:admin_task.php");
					exit();

				}
				else{
					$charles_pin = "Access Denied.";
				}
				# code...
			}
			# code...
		}

		# code...
	}
	header("location:activate.php");

?>
