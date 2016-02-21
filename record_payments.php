<?php include "admin_header.php";?>
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="panel panel-default">
			<h4 align="center">
				Record Payments <i class="glyphicon glyphicon-book"></i>
			</h4>
			<legend></legend>
			<div class="panel-body">
				<form method = "POST" action = "payment_track.php" class="form-horizontal" >
					<div class="form-group">
						<label for="t_id" class="col-sm-3 control-label">
							Transaction ID
						</label>
						<div class="col-sm-9">
							<input type="number" min = "1" class="form-control" name = "t_id"
						placeholder="TransactionID..." required>
						</div>
					</div>
					<div class="form-group">
						<label for="t_id" class="col-sm-3 control-label">
							Amount
						</label>
						<div class="col-sm-9">
							<input type="number" min = "500" class="form-control"
						placeholder="amount..." name = "amount" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							<button type="submit" class="btn btn-info">Submit payment</button>
						</div>
					</div>

				</form>
			</div>
	</div>
