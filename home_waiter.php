<!DOCTYPE html>
<html>
	<head>
		<title>Lumbung Rasa | Home - Waiter/Waitress</title>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
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
			<table style="width:70%; margin-top: 10px; margin-left:2%">
				<td style="width:30%;"><img src="images/file-icon.png" width="auto" height="50%" /></td>
				<td style="width:40%;">
					<div style="color: #808080"> Order ID <br><br> </div>
					<b>Table XX</b>
				</td>
				<td class="pull-right">
					<span style="color: #808080"> DD/MM/YYYY </span> <span style="color: #808080"> HH:MM:SS</span><br>
					<br>
					<div class="pull-right">
						<form  style="display:inline-block" action="" method="post">
							<button type="submit" style="width:40%; height: 100%; border:none; background-color:white; color:#0099ff;" id = "editButton" name="editButtom"><b>Edit<b></button>
						</form>
						<form style="display:inline-block" action="" method="post">
							<button type="submit" style="width:40%; height: 100%; border:none; background-color:white; color:#009933" name="doneButtom"><b>Done<b></button>
						</form>
					</div>
				</td>
			</table>
			<br>
			<button type="button" class="btn btn-success" id="fixedbutton">Add Order</button>
		</div>
	</body>
</html>
<script type="text/javascript">
    document.getElementById("fixedbutton").addEventListener('click', goAddOrder);
    document.getElementById("editButton").addEventListener('click', goEditOrder);
    
    function goEditOrder(){
        window.location = "http://localhost:90/SI-LumbungRasa/editOrder.php";
    }
    
    function goAddOrder(){
        window.location = "http://localhost:90/SI-LumbungRasa/addOrder.php";
    }
</script>    