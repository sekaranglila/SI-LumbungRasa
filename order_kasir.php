<!DOCTYPE html>
<html>
	<head>
		<title>Lumbung Rasa | Order - Waiter/Waitress</title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/style2.css">
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
				<div class="col-md-1">
					<h2 class="fixedh2">Order </h2>
					<p class="menu"> DD/MM/YYYY HH:MM:SS </p> <br>
				</div>
				<div class="col-md-5">
					<form class="form-horizontal pull-right">
						<div class="form-group"> <br>
							<div class="col-sm-2">
								<input type="text" class="form-control text-center" id="id_order" placeholder="#ID" disabled>
							</div>
							<div class="col-sm-4"> </div>
							<label class="control-label col-sm-3" for="tab">Table : </label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="tab" placeholder="5" disabled>
							</div>
						</div>
					</form>
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
							<div class="col-sm-2"> </div>
							<div class="col-sm-2">
								<input type="text" class="form-control text-center" id="nasiputih" placeholder="2" disabled>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control text-center" placeholder="Rp10.000" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="nasigurih">Nasi Gurih</label>
							<div class="col-sm-2"> </div>
							<div class="col-sm-2">
								<input type="text" class="form-control text-center" id="nasigurih" placeholder="3" disabled>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control text-center" placeholder="Rp13.000" disabled>
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-6" for="ct11">Susu Jahe</label>
							<div class="col-sm-2">
								<input type="text" class="form-control text-center" id="ct11" placeholder="2" disabled>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control text-center" placeholder="Rp27.000" disabled>
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-6" for="ct12">Yoghurt Strawberry</label>
							<div class="col-sm-2">
								<input type="text" class="form-control text-center" id="ct12" placeholder="1" disabled>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control text-center" placeholder="Rp31.000" disabled>
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-6" for="ct13">Fruit Yoghurt</label>
							<div class="col-sm-2">
								<input type="text" class="form-control text-center" id="ct13" placeholder="2" disabled>
							</div>
							<div class="col-sm-4">
								<input type="text" class="form-control text-center" placeholder="Rp33.000" disabled>
							</div>
						</div> 
					</form> <br>

					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label" for="cat">Catatan : </label> <br>
							<textarea class="form-control" rows="6" id="cat" disabled></textarea>
						</div> 
					</form> <br>

					<form class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-5"> </div>
							<label class="control-label col-sm-3" for="ct13" id="total_label">TOTAL :</label>
							<div class="col-sm-4">
								<input type="text" class="form-control text-center" placeholder="Rp33.000" id="total" disabled>
							</div>
						</div> 
					</form> <br>
				</div>
				<div class="col-md-3"> </div>
			</div> <br> <br>
		</div>
	</body>
</html>