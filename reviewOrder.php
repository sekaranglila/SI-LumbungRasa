<!DOCTYPE html>
<html>
	<head>
		<title>Lumbung Rasa | Review Order</title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>

	<body>
		<div class="navbar navbar-default">
			<div class="container-fluid">
			    <div class="navbar-header">
			        <a class="navbar-brand" href="#"> <img src="images/logo-transparent.png"/></a>
			    </div>
			</div>
		</div> <br>

		<div class="container">
			<div class="row">
				<div class="col-md-3"> </div>
				<div class="col-md-4">
					<h2 class="fixedh2"> Review Order </h2> <br>
				</div>
				<div class="col-md-2">
					<div class="pull-right">
						<form class="form-horizontal">
							<div class="form-group"> <br>
								<label class="control-label col-sm-8" for="tab">Table : </label>
								<div class="col-sm-4">
									<input type="text" class="form-control text-center" id="tab" placeholder="5">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-3"> </div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-3"> </div>
				<div class="col-md-6">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-4" for="nasiputih">Nasi Putih</label>
							<div class="col-sm-5"> </div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="nasiputih" placeholder="2">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="nasigurih">Nasi Gurih</label>
							<div class="col-sm-5"> </div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="nasigurih" placeholder="3">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct11">Susu Jahe</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct11" placeholder="2">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct12">Yoghurt Strawberry</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct12" placeholder="1">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct13">Fruit Yoghurt</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct13" placeholder="2">
							</div>
						</div> 
					</form> <br>

					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label" for="cat">Catatan : </label> <br>
							<textarea class="form-control" rows="6" id="cat"></textarea>
						</div> 
					</form> <br> <br>

					<div>
						<button type="button" class="btn btn-success btn-block">Save</button>
					</div>
				</div>
				<div class="col-md-3"> </div>
			</div> <br> <br>
		</div>
	</body>
</html>