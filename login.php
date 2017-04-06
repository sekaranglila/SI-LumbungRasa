<!DOCTYPE html>
<html>
	<head>
		<title>Lumbung Rasa | Login</title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
	</head>

	<body>
		<div class="container">
			<br> <br>
			<img class="img-responsive" src="images/logo.png" alt="Logo">
			<br> <br>
		</div>

		<div class="container">
			<div class="jumbotron">
				<h2>SIGN IN</h2> <br>
				<form class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" id="ID" placeholder="Enter ID">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="password" class="form-control" id="password" placeholder="Enter Password">
						</div>
					</div> 
					<div class="form-group">
						<label class="control-label col-sm-4" for="division">Division (select one):</label>
						<div class="col-sm-8">
							<select class="form-control" id="sel1">
								<option>Waiter/Waitress</option>
								<option>Kitchen</option>
								<option>Pantry</option>
								<option>Cashier</option>
								<option>Accountant</option>
								<option>Manager</option>
							</select>
						</div>
					</div>
				</form> <br>
				<div class="pull-right">
					<button type="button" class="btn btn-success">Register</button>
					<button type="button" class="btn btn-success">Sign In</button>
				</div>
				<br>
			</div>
		</div>
	</body>
</html>