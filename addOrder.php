<?php
include "MenuItem.php";

//get semua makanan dan minuman dari database
$list_menu = Makanan::get_all_from_db();
$list_minuman = Minuman::get_all_from_db();
foreach($list_minuman as $minuman_val){
    array_push($list_menu, $minuman_val);
}
//setcookie("listmenu", serialize($list_menu), time()+86400);
?>

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
				<div class="col-md-4">
                                    <form class="form-horizontal" method="post" action ="./reviewOrder.php?XDEBUG_SESSION_START=netbeans-xdebug"  >
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md-8">
                                                                <h2 class="fixedh2"> Input Order </h2> <br>
                                                        </div>
                                                        <div class="col-md-4">
                                                                <div class="pull-right"> <br>
                                                                        
                                                                                <div class="form-group"> 
                                                                                        <label class="control-label col-sm-9" for="tab">Table : </label>
                                                                                        <div class="col-sm-3">
                                                                                                <input type="text" class="form-control text-center" name="tab" placeholder="0">
                                                                                        </div>
                                                                                </div>
                                                                        
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <?php
                                        foreach ($list_menu as $value) {
                                            $name_for_id = $value->get_id();
                                            $name_for_display = $value->get_deskripsi();
                                            echo ("<div class=\"form-group\">".
							"<label class=\"control-label col-sm-9\" for=\"".$name_for_id."\"> ".$name_for_display." </label>".
							"<div class=\"col-sm-3\">".
								"<input type=\"text\" class=\"form-control text-center\" id=\"".$name_for_id."\" name=\"".$name_for_id."\" placeholder=\"0\">".
							"</div>".
						"</div><br>");
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label class="control-label" for="cat">Catatan : </label> <br>
                                            <textarea class="form-control" rows="6" id="cat" name="cat"></textarea>
					</div>
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success">Next</button>
                                            <button type="button" class="btn btn-success">Cancel</button>
					</div>
                                    </form>
                                </div>
                        </div>
                </div>
        </body>
</html>

