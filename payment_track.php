<?php
	include("connection.php");

    $Today = date('y:m:d');
    $new = date('d F, Y', strtotime($Today));
    $new_date =  date_create($new);

	$make_table = mysqli_query($con, "CREATE TABLE payments(ID
		INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID),
		CLIENT_ID INT(11) NOT NULL REFERENCES
		transactions(TRANSACTION_ID), AMOUNT_PAYED DOUBLE(65,2) NOT NULL,
		BALANCE DOUBLE(65,2), PAYING_DATE TEXT(100) NOT NULL,RATE TEXT(3))");
	if (!empty($_POST['t_id'])) {
		if (!empty($_POST['amount'])) {
			$the_id = mysqli_real_escape_string($con, $_POST['t_id']);
			$amount = mysqli_real_escape_string($con, $_POST['amount']);
			// check if client exists
			 $select = mysqli_query($con, "SELECT *FROM transactions WHERE
			 	TRANSACTION_ID = '$the_id'");
 if ($select) {
 	if (mysqli_num_rows($select) == 1) {//if exists

 		// check if he has ever paid
 		$select_payments = mysqli_query($con, "SELECT *FROM payments WHERE
			 	CLIENT_ID = '$the_id'");
 		if ($select_payments) {
 			if (mysqli_num_rows($select_payments) > 0) {
 				/**************      HAS EVER PAID       *******************/

 				// check tym difference btn today and last paid.
 				//if less that a month, 0% increament
 				$select_days = mysqli_query($con, "SELECT PAYING_DATE FROM
 					payments WHERE CLIENT_ID = '$the_id'");
 				if ($select_days) {
 					while ($date_counter = mysqli_fetch_assoc($select_days)) {
 						$date_last_paid = $date_counter['PAYING_DATE'];
 						 						# code...
 					}//get last date
 					$date_last_paid = date_create($date_last_paid);
 					$time_btn = date_diff($date_last_paid,$new_date,TRUE);
					$time_btn = $time_btn->format("%R%a");
					// echo "$time_btn";

 if ($time_btn <= 30) {//just get letest balance and update
  $rate = "0%";
 	$get_balance_select = mysqli_query($con, "SELECT BALANCE FROM
 		payments WHERE CLIENT_ID = '$the_id'");
 	if ($get_balance_select) {
 		while ($balance_counter = mysqli_fetch_assoc($get_balance_select)) {
 			$bal = $balance_counter['BALANCE'];
 		}
 			// get diff balance
 			$newBalace = $bal - $amount;
 			if ($newBalace >= 0) {
 				# code...
 				$insert = mysqli_query($con, "INSERT INTO payments(CLIENT_ID,
 					AMOUNT_PAYED,BALANCE,PAYING_DATE,RATE)VALUES('$the_id','$amount',
 					'$newBalace','$new','$rate')");
 			}
 			else{
 				$newBalace = $amount - $bal;
 				$_SESSION['no'] = "Extra payment of $newBalace, please Try again.";
 			}

 			# code...
 		}
 		# code...


}

elseif ($time_btn > 30 && $time_btn <= 60) {
	$rate = "1%";
	$Rate = 1/100;//1%

	get_balance_flow($Rate, $amount,$rate);
	# code...
}
elseif ($time_btn > 60 && $time_btn <= 90) {
	$rate = "2%";
	$Rate = 2/100;//2%

	get_balance_flow($Rate, $amount,$rate);
	# code...
}
elseif ($time_btn > 90 && $time_btn <= 120) {
	$rate = "3%";
	$Rate = 3/100;//3%

get_balance_flow($Rate, $amount,$rate);
	# code...
}

elseif ($time_btn > 120 && $time_btn <= 150) {
	$rate = "4%";
	$Rate = 4/100;//4%

	get_balance_flow($Rate, $amount,$rate);
	# code...
}
elseif ($time_btn > 150 && $time_btn <= 180) {
	$rate = "5%";
	$Rate = 5/100;//5%

	get_balance_flow($Rate, $amount,$rate);
	# code...
}
elseif ($time_btn > 180 && $time_btn <= 210) {
	$rate = "6%";
	$Rate = 6/100;//6%

	get_balance_flow($Rate, $amount,$rate);
	# code...
}
elseif ($time_btn > 210 && $time_btn <= 240) {
	$rate = "7%";
	$Rate = 7/100;//7%

	get_balance_flow($Rate,$amount,$rate);
	# code...
}
elseif ($time_btn > 240 && $time_btn <= 270) {
	$rate = "8%";
	$Rate = 8/100;//8%

	 get_balance_flow($Rate,$amount,$rate);
	# code...
}
elseif ($time_btn > 270 && $time_btn <= 300) {
	$rate = "9%";
	$Rate = 9/100;//10%

get_balance_flow($Rate,$amount,$rate);
	# code...
}
elseif ($time_btn > 300 && $time_btn <= 330) {
	$rate = "10%";
	$Rate = 10/100;//10%

	get_balance_flow($Rate,$amount,$rate);
	# code...
}
else{
	$_SESSION['no']  = "The days have gone beyond 10 months.";
}





 					// get diiference

 					# code...
 				}


 			}
 			else{/*********has never payed, then insert for first tym*************/

 				// check number of days after borrowing, increamnent each new 30 by 1%(rate)
  $select_date = mysqli_query($con, "SELECT BORROWING_DATE,AMOUNT_BORROWED FROM transactions WHERE
			 	TRANSACTION_ID = '$the_id'");
 if ($select_date) {
 	while ($date = mysqli_fetch_assoc($select_date)) {
 		$borrow_date = $date['BORROWING_DATE'];
 		$amount_boowed = $date['AMOUNT_BORROWED'];
 		// echo "$amount_boowed ";
 		$new_borrowing_date = date_create($borrow_date);
 		$time_btn = date_diff($new_date,$new_borrowing_date);
		$time_btn = $time_btn->format("%R%a");


if ($time_btn <= 30) {
	# code...
	$rate = "1%";
	$Rate = 1/100;//1%

	 get_balance($Rate,$amount_boowed,$amount,$rate);

}
elseif ($time_btn > 30 && $time_btn <= 60) {
	$rate = "2%";
	$Rate = 2/100;//2%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 60 && $time_btn <= 90) {
	$rate = "3%";
	$Rate = 3/100;//3%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 90 && $time_btn <= 120) {
	$rate = "4%";
	$Rate = 4/100;//4%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}

elseif ($time_btn > 120 && $time_btn <= 150) {
	$rate = "5%";
	$Rate = 5/100;//5%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 150 && $time_btn <= 180) {
	$rate = "6%";
	$Rate = 6/100;//6%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 180 && $time_btn <= 210) {
	$rate = "7%";
	$Rate = 7/100;//7%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 210 && $time_btn <= 240) {
	$rate = "8%";
	$Rate = 8/100;//8%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 240 && $time_btn <= 270) {
	$rate = "9%";
	$Rate = 9/100;//9%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
elseif ($time_btn > 270 && $time_btn <= 300) {
	$rate = "10%";
	$Rate = 10/100;//10%

	 get_balance($Rate,$amount_boowed,$amount,$rate);
	# code...
}
else{
	$_SESSION['no']  = "The days have gone beyond 10 months.";
}

 		# code...
 	}
 }
 			}
 			# code...
 		}
 		}
 		else{
 			$_SESSION['no'] = "Transaction ID $the_id Not found in the system.";
 		}
 	}
 }

		}
		# code...

		function get_balance($Rate,$amount_borrowed,$ammount_paid_now,$rate){
$con = mysqli_connect("localhost","root","","microfinance");
			$the_id = mysqli_real_escape_string($con, $_POST['t_id']);
			 $Today = date('y:m:d');
    $new = date('d F, Y', strtotime($Today));
   $new_date =   ($new);


			$extra_to_pay = $amount_borrowed*$Rate;
			$all_to_pay =$amount_borrowed + $extra_to_pay;
			$new_balance = $all_to_pay - $ammount_paid_now;

			if ($new_balance < 0) {
				$new_balance = $ammount_paid_now - $all_to_pay;
				$_SESSION['no'] = "An extra payment of $new_balance, please try again.";

				# code...
			}
			else{
				$save = mysqli_query($con, "INSERT INTO payments(CLIENT_ID,AMOUNT_PAYED,
					BALANCE,PAYING_DATE,RATE)VALUES('$the_id','$ammount_paid_now',
					'$new_balance','$new_date','$rate')");
				if ($save) {
					$_SESSION['no'] = "saved successifully!!!";
					# code...
				}
				else{
					echo mysqli_error($con);
				}
				// save it
			}


		}

	function get_balance_flow($Rate,$amount,$rate){
		$Today = date('y:m:d');
    $new_date = date('d F, Y', strtotime($Today));

		$con = mysqli_connect("localhost","root","","microfinance");

			$the_id = mysqli_real_escape_string($con, $_POST['t_id']);
		$get_balance_select = mysqli_query($con, "SELECT BALANCE FROM
 		payments WHERE CLIENT_ID = '$the_id'");

 	if ($get_balance_select) {
 		while ($balance_counter = mysqli_fetch_assoc($get_balance_select)) {
 			$bal = $balance_counter['BALANCE'];
 		}
 		// increament by rate
 		$increament = $bal*$Rate;
 		$new_figure = $bal + $increament;
 		$new_balance = $new_figure - $amount;

 		$save = mysqli_query($con, "INSERT INTO payments(CLIENT_ID,AMOUNT_PAYED,
					BALANCE,PAYING_DATE,RATE)VALUES('$the_id','$amount',
					'$new_balance','$new_date','$rate')");
 		if ($save) {
 			$_SESSION['no'] = "saved successifully!!!";
 			# code...
 		}
 	}



		 }
		 //header("location:record_payments.php");

?>
