<?php
include("connection.php");
$table = mysqli_query($con, "CREATE TABLE TRANSACTIONS(TRANSACTION_ID INT(11)
	NOT NULL AUTO_INCREMENT, PRIMARY KEY(TRANSACTION_ID), CLIENT_NAME TEXT(255),
	AGE INT(2) NOT NULL, GENGA TEXT(7) NOT NULL, AMOUNT_BORROWED DOUBLE(65,2),
	BORROWING_DATE TEXT(100) NOT NULL, NATION TEXT(255) NOT NULL, COLLATERAL_SECURITY
	TEXT(255) NOT NULL, PHONE_NUMBER TEXT(30) NOT NULL, EMAIL TEXT(255) NOT NULL)");


// if (!empty($_POST['name_of_client'])) {
// 	if (!empty($_POST['age_of_client'])) {
// 	# code...
// 		if (!empty($_POST['ganger_of_client'])) {
// 			if (!empty($_POST['amount_of_client'])) {
					if (!empty($_POST['borrrowing_date_of_client'])) {
// 							if (!empty($_POST['nation_of_client'])) {
// 								if (!empty($_POST['Collateal_of_client'])) {
// 									if (!empty($_POST['phone_of_client'])) {
// 										if (!empty($_POST['email_of_client'])) {
$client_name = mysqli_real_escape_string($con, $_POST['name_of_client']);
$client_age = mysqli_real_escape_string($con, $_POST['age_of_client']);
$client_genger = mysqli_real_escape_string($con, $_POST['ganger_of_client']);
$client_amount_borrowed = mysqli_real_escape_string($con, $_POST['amount_of_client']);
$client_borowing_date = mysqli_real_escape_string($con, $_POST['borrrowing_date_of_client']);
$client_nation_of_client = mysqli_real_escape_string($con, $_POST['nation_of_client']);
$client_Collateal_of_client = mysqli_real_escape_string($con, $_POST['Collateal_of_client']);
$client_phone_of_client = mysqli_real_escape_string($con, $_POST['phone_of_client']);
$client_email_of_client = mysqli_real_escape_string($con, $_POST['email_of_client']);

$save = mysqli_query($con, "INSERT INTO TRANSACTIONS(CLIENT_NAME,AGE,GENGA,
	AMOUNT_BORROWED,BORROWING_DATE,NATION,COLLATERAL_SECURITY,PHONE_NUMBER,EMAIL
	)VALUES('$client_name','$client_age','$client_genger',
	'$client_amount_borrowed','$client_borowing_date','$client_nation_of_client',
	'$client_Collateal_of_client','$client_phone_of_client','$client_email_of_client')");
if ($save) {
$_SESSION['save'] = "saved successifully";
	# code...
}
else{
	echo mysqli_error($con);
}

	// # code...
    						     }
	// # code...
 //    						  }
	// # code...
 //    						}
	// # code...
 //    						}
	// # code...
 //   						 }
	// # code...
 //   					 }
	// # code...
 //  				}
 // 			}
	// # code...
	// 	}
	header("Location:admin_task.php");
?>
