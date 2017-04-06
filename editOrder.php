<!DOCTYPE html>
<html>
	<head>
		<title>Lumbung Rasa | Add Order</title>
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
		</div> 

		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<h2 class="fixedh2">Edit Order </h2>
					<p class="menu"> DD/MM/YYYY HH:MM:SS </p> <br>
				</div>
				<div class="col-md-10">
					<form class="form-horizontal">
						<div class="form-group"> <br>
							<div class="col-sm-1">
								<input type="text" class="form-control text-center" id="id_order" placeholder="#ID" disabled>
							</div>
							<div class="col-sm-9"> </div>
							<label class="control-label col-sm-1" for="tab">Table : </label>
							<div class="col-sm-1">
								<input type="text" class="form-control text-center" id="tab" placeholder="5">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<p class="fixedh2"> Aneka Nasi </p>
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
					</form> <br>

					<p class="fixedh2">Paket Nasi Gurih </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-7" for="png1">Paket Timbel Ayam</label>
							<div class="col-sm-2"></div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="png1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="png2">Paket Timbel Ayam Komplit</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="png2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-7" for="png3">Paket Timbel Gepuk</label>
							<div class="col-sm-2"> </div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="png3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="png4">Paket Timbel Gepuk Komplit</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="png4" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Paket Special Lumbung </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-7" for="psl1">Nasi Sop Iga</label>
							<div class="col-sm-2"></div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="psl1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="psl2">Nasi Sop Buntut</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="psl2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-7" for="psl3">Nasi Iga Bakar Coet</label>
							<div class="col-sm-2"> </div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="psl3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="psl4">Paket Ayam Bakar Coet</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="psl4" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Paket Gledek Juara </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-7" for="pgj1">Paket Ayam Gledek</label>
							<div class="col-sm-2"></div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="pgj1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="pgj2">Pahe Ayam Gledek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="pgj2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-7" for="pgj3">Pahe Lele Gledek</label>
							<div class="col-sm-2"> </div>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="pgj3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="pgj4">TA Paket Ayam Gledek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="pgj4" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="pgj5">TA Pahe Ayam Gledek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="pgj5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="pgj6">TA Pahe Lele Gledek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="pgj6" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Aneka Nasi Goreng </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="ang1">Nasi Goreng Kampung</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ang1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ang2">Nasgor Kampung Spesial</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ang2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ang3">Nasi Goreng Kambing</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ang3" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Mie Jawa </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj1">Mie Goreng</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj2">Mie Nyemek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj3">Mie Godog</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj4">Tahu Goreng</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj5">Tempe Goreng</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj6">Karedog</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj6" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj7">Lotek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj7" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="mj8">Pencok Kacang Panjang</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="mj8" placeholder="0">
							</div>
						</div>  
					</form> <br>

					<p class="fixedh2">Aneka Tumisan </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="at1">Tumis Kangkung</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="at1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="at2">Tumis Kiciwis</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="at2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="at3">Tumis Toge Tahu</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="at3" placeholder="0">
							</div>
						</div> 
					</form> <br>
 
					</form> <br>
				</div>

				<div class="col-md-4">
					<p class="fixedh2">Aneka Cemilan </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac1">Mendoan Isi 4</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac2">Pisang Bakar</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac3">Roti Bakar</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac4">Pisang Goreng Kremes</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac5">Tahu Brintik</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac6">Tahu Berontak</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac6" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac7">Tahu Aci Isi 4</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac7" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac8">Tutut</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac8" placeholder="0">
							</div>
						</div> <br>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac9">Ice Cream Scoop</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac9" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ac10">Bubur Pulut</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ac10" placeholder="0">
							</div>
						</div>   
					</form> <br>

					<p class="fixedh2">Aneka Gurame </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="ag1">Sop Gurame</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ag1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ag2">Gurame Goreng</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="at2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ag3">Gurame Bakar</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ag3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ag4">Gurame Cobek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ag4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ag5">Gurame Gledek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ag5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ag6">Gurame Bumbu Rujak</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ag6" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Aneka Daging </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="ad1">Ayam Goreng / Bakar</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ad1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ad2">Ayam Pejantan Gr / Bkr</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ad2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ad3">Fillet Ayam Bakar Rahasia</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ad3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ad4">Ayam Gledek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ad4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ad5">Gepuk</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ad5" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Aneka Minuman </p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="am1">Es Goyobod / Cincau</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="am2">Es Kelapa Muda</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="am3">Es Teler</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="am4">Es Buah</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="am5">Es Jeruk</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="am6">Es Campur</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am6" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="am7">Es Lumbung</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am7" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="am8">Es Jeruk Kelapa</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am8" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="am9">Es Teh Manis</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="am9" placeholder="0">
							</div>
						</div> 
					</form> <br>
				</div> <br>

				<div class="col-md-4">
					<p class="fixedh2">Aneka Jus</p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="aj1">Alpukat</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="aj1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="aj2">Sirsak</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="aj2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="aj3">Blackberry</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="aj3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="aj4">Jeruk</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="aj4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="aj5">Strawberry</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="aj5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="aj6">Mangga</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="aj6" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Aneka Milkshake</p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="milk">Vanilla, Coklat, Stroberi</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="milk" placeholder="0">
							</div>
						</div>
					</form> <br>

					<p class="fixedh2">Squash</p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="s1">Lemon, Orange</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="s1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="s2">Leci, Mangga</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="s2" placeholder="0">
							</div>
						</div>  
					</form> <br>

					<p class="fixedh2">Smoothies</p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="smooth1">Mangga, Strawberry</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="smooth1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="smooth2">Sirsak, Blackberry</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="smooth2" placeholder="0">
							</div>
						</div> 
					</form> <br>

					<p class="fixedh2">Coffee / Tea</p>
					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct1">Kopi Tubruk</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct1" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct2">Kopi Jahe</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct2" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct3">Kopi Susu</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct3" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct4">Hot/Ice Cappucino</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct4" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct5">Hot/Ice Teh Tawar</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct5" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct6">Teh Manis Panas</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct6" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct7">Hot/Ice Ginger Tea</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct7" placeholder="0">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct8">Hot/Ice Lemon Tea</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct8" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct9">Hot/Ice Chocolate</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct9" placeholder="0">
							</div>
						</div> 
						<div class="form-group">
							<label class="control-label col-sm-9" for="ct10">Bajigur / Bandrek</label>
							<div class="col-sm-3">
								<input type="text" class="form-control text-center" id="ct10" placeholder="0">
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
					</form> <br> <br> <br>

					<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label" for="cat">Catatan : </label> <br>
							<textarea class="form-control" rows="6" id="cat"></textarea>
						</div> 
					</form> <br> <br>

					<div class="pull-right">
						<button type="button" class="btn btn-success">Next</button>
						<button type="button" class="btn btn-success">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>