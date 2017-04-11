<?php
include 'CaptainOrder.php';

$combined_order = $_POST;
$food_co = new FoodCaptainOrder($combined_order["tab"]);
$drink_co = new DrinkCaptainOrder($combined_order["tab"]);
//buat captain order makanan dan minuman berdasarkan input dari pramusaji
$food_co->set_from_combined_order($combined_order);
$drink_co->set_from_combined_order($combined_order);


