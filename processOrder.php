<?php
include 'CaptainOrder.php';

$combined_order = $_POST;
$food_co = new FoodCaptainOrder($combined_order["tab"]);
$drink_co = new DrinkCaptainOrder($combined_order["tab"]);
//buat captain order makanan dan minuman berdasarkan input dari pramusaji
$food_co->set_from_combined_order($combined_order);
$drink_co->set_from_combined_order($combined_order);
//simpan ke database co-incomplete, karena captain order belum jadi semua
$food_co->save_to_db_as_incomplete();
$drink_co->save_to_db_as_complete();
//redirect ke halaman waiter utama
$url = "localhost:90/home_waiter.php?XDEBUG_SESSION_START=netbeans-xdebug"; //ganti ini
header("Location: ".$url);
