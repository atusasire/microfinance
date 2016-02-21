<?php
include("connection.php");
if (isset($_SESSION['no'])) {
	echo $_SESSION['no'];
	# code...
}
if (!empty($_POST['password_track'])) {
		$pin = $_POST['password_track'];
		$strong_pin = hash("ripemd128", $pin);

		if (!empty($_POST['id_track'])) {

			$id = $_POST['id_track'];
		// check current pin
		$select = mysqli_query($con, "SELECT PASSWORD FROM  client_security WHERE
			T_ID = '$id'");
		if ($select) {
			while ($counter = mysqli_fetch_assoc($select)) {
				$pin = $counter['PASSWORD'];
				if ($strong_pin == $pin) {
					# code...
					$_SESSION['strong_pin'] = $id;
					header("location:client_task.php");
					exit();

				}
				else{
					$_SESSION['no'] = "Access Denied.";
				}
				# code...
			}
			# code...
		}

			# code...
		}
}

header("location:index.php");
?>
