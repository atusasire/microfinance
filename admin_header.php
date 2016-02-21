<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kiwuwa Fund</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>

  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kiwuwa Foundation Fund</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><i class="fa fa-user fa-lg"></i></a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'admin_task.php') echo 'class="active"' ?>>
            	<a href="admin_task.php">
            		Add Borrowers <i class="glyphicon glyphicon-plus pull-right"></i>
            	</a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'record_payments.php') echo 'class="active"' ?>>
            	<a href="record_payments.php">Record Payments <i class="glyphicon glyphicon-book pull-right"></i></a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'display_borrowings.php') echo 'class="active"' ?>>
            	<a href="display_borrowings.php">List Borrowers <i class="glyphicon glyphicon-list pull-right"></i></a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'display_payments.php') echo 'class="active"' ?>>
            	<a href="display_payments.php">Show Payments <i class="glyphicon glyphicon-list pull-right"></i></a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'change.php') echo 'class="active"' ?>>
            	<a href="change.php">Change system password <i class="glyphicon glyphicon-pencil pull-right"></i></a>
            </li>
          </ul>
        </div>

