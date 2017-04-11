<?php
include 'CaptainOrder.php';

$combined_order = $_POST;
$food_co = new FoodCaptainOrder($combined_order["tab"]);
$drink_co = new DrinkCaptainOrder($combined_order["tab"]);
//buat captain order makanan dan minuman berdasarkan input dari pramusaji
$food_co->set_from_combined_order($combined_order);
$drink_co->set_from_combined_order($combined_order);
$catatan = $_POST["cat"];
?>



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
				
				<div class="col-md-3"> </div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-3"> </div>
				<div class="col-md-6">
                                    <form class="form-horizontal" method="post" action="./processOrder.php?XDEBUG_SESSION_START=netbeans-xdebug">
                                           <!--div class="col-md-2">
                                                    <div class="pull-right">
                                                            <div class="form-group"> <br-->
                                                                    <label class="control-label col-sm-8" for="tab">Table : </label>
                                                                    <div class="col-sm-4">
                                                                            <input type="text" class="form-control text-center" id="tab" name="tab" value =<?php echo $combined_order["tab"];?>>                                                                                                                             
                                                                    </div>
                                                            <!--/div>                                                          
                                                    </div>
                                            </div-->  
                                            <?php
                                            $food_list = $food_co->get_order_list();
                                            $drink_list = $drink_co->get_order_list();
                                            foreach($food_list as $food_value){
                                                $name_for_id = $food_value->get_item()->get_id();
                                                $name_for_display = $food_value->get_item()->get_deskripsi();
                                                $qtt_for_display = $food_value->get_quantity();
                                                echo("<div class=\"form-group\">".
                                                        "<label class=\"control-label col-sm-4\" for=\"" .$name_for_id. "\">" .$name_for_display. "</label>".
                                                        "<div class=\"col-sm-5\"> </div>".
                                                        "<div class=\"col-sm-3\">".
                                                                "<input type=\"text\" class=\"form-control text-center\" id=\"" .
                                                                   $name_for_id. "\" name=\"" .$name_for_id. "\" value=\"".$qtt_for_display."\">".

                                                        "</div>".
                                                "</div>");
                                            }
                                            foreach ($drink_list as $drink_value){
                                                $name_for_id = $drink_value->get_item()->get_id();
                                                $name_for_display = $drink_value->get_item()->get_deskripsi();
                                                $qtt_for_display =$drink_value->get_quantity();
                                                echo("<div class=\"form-group\">".
                                                        "<label class=\"control-label col-sm-9\" for=\"".$name_for_id."\"> ".$name_for_display." </label>".
                                                        "<div class=\"col-sm-3\">".
                                                                "<input type=\"text\" class=\"form-control text-center\" id=\"".
                                                                    $name_for_id."\ name=\" ".$name_for_id." \" value=\"".$qtt_for_display."\">".
                                                        "</div>".
                                                "</div>" );
                                            }
                                        ?>
                                        <div class="form-group">
                                                <label class="control-label" for="cat">Catatan : </label> <br>
                                                <textarea class="form-control" rows="6" id="cat" name="cat"><?php
                                                        echo $catatan;
                                                    ?></textarea>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success btn-block">Save</button>
                                        </div>
                                    </form> <br>
					
				</div>
				<div class="col-md-3"> </div>
			</div> <br> <br>
		</div>
	</body>
</html>