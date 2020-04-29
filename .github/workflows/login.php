
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form role="form" action="login_crud.php" method="post">
	<div class="modal-dialog text-center">
		<div class="col-sm-9 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="images/avatar1.png">
				</div>

				<div class="col-12 form-input">
					<form>
					
						<div class="form-group">
							<input type="text" name="idno"class="form-control" placeholder="Enter ID" required>
						</div>

						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
						</div>

						<button type="submit" class="btn btn-lg btn-success btn-block" value="Login" name="login">Login</button>
					</form>
					<h6><font color="#f0f0f0"><br><b>Note:</b> &nbsp; One voter can only vote and login one time!!</font></h6>
				</div>
				<br>
			</div>
		</div>
	</div>
</form>
</body>
</html>