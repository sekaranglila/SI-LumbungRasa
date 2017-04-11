<?php
include 'CaptainOrder.php';

$combined_order = $_POST;
$food_co = new FoodCaptainOrder($combined_order["tab"]);
$drink_co = new DrinkCaptainOrder($combined_order["tab"]);
//buat captain order makanan dan minuman berdasarkan input dari pramusaji
$food_co->set_from_combined_order($combined_order, $_POST["countfood"]);
$drink_co->set_from_combined_order($combined_order, $_POST["countdrink"]);
//simpan ke database co-incomplete, karena captain order belum jadi semua
$co = $food_co->get_parent();
MCaptainOrderUtils::save_to_db_as_incomplete($co, $food_co, $drink_co);
//redirect ke halaman waiter utama
$url = "http://localhost:90/SI-LumbungRasa/home_waiter.php?XDEBUG_SESSION_START=netbeans-xdebug"; //ganti ini
header("Location: ".$url);
