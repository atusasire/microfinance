<?php
	include("connection.php");
	$make_table = mysqli_query($con, "CREATE TABLE
	CLIENT_SECURITY(ID INT(11) NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID), T_ID INT(11) NOT NULL UNIQUE
		REFERENCES transactions(TRANSACTION_ID), PASSWORD
		TEXT(32) NOT NULL, CLIENT_TAG INT(1) DEFAULT 1)");
		$t_id = $_POST['id'];
		$pin_one = $_POST['pin_one'];
		$pin_two = $_POST['comfirm_pin'];
		if(!$t_id || !$pin_one || $pin_two ){
		$select = mysqli_query($con, "SELECT *FROM transactions WHERE
			TRANSACTION_ID = '$t_id'");
		if ($select) {
		 	if (mysqli_num_rows($select) == 1) {
		 		if ($pin_one == $pin_two) {
		 			$saved_pin = hash("ripemd128", $pin_one);
		 			$save = mysqli_query($con, "INSERT INTO CLIENT_SECURITY
		 				(T_ID,PASSWORD)VALUES('$t_id','$saved_pin')");
		 			if ($save) {
		 				$_SESSION['no'] = "Signed up successifully";
		 				# code...
		 			}
		 			else{
		 				$_SESSION['no'] = "Transaction ID $t_id is already signed up.";
		 			}

		 			# code...
		 		}
		 		else{
		 		$_SESSION['no'] = "Passwords did not match";
		 		}
	 		}
		 	else{
		 		$_SESSION['no'] = "Transaction $t_id Does Not exist.";
		 	}
		}

	//header("location:client_sign_up.php");

?>
