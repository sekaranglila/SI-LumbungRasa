<?php

include 'MenuItem.php';

class CaptainOrder{
    protected $id;
    protected $nomor_meja;
    protected $tanggal;
    protected static $GET_LAST_CO_ID_QUERY = "SELECT GREATEST(ifnull((SELECT max(id) from captain_order),0),"
                                            . " ifnull((SELECT max(id) from co_incomplete),0)) as 'max'";
    
    protected $catatan;
    
    protected function __construct($nomor_meja, $addparam = false, $id = 0, $date = 0) {
        if(!$addparam){
            $conn = DBConnector::connect("root", "");
            $result = $conn->query(CaptainOrder::$GET_LAST_CO_ID_QUERY);
            $row = $result->fetch_assoc();
            if(!isset($row["max"])){
                $this->id = 0;
            }
            else{
                $this->id = $row["max"]+1;
            }
            $this->tanggal = date("Y-m-d H:i:s");
            $this->nomor_meja = $nomor_meja;
            $conn->close(); 
        }
        else{
            $this->id = $id;
            $this->tanggal = $date;
            $this->nomor_meja = $nomor_meja;
            $this->catatan = "";
        }
    }
    
    public function get_id(){
        return $this->id;
    }
    
    public function get_nomor_meja(){
        return $this->nomor_meja;
    }
    
    public function get_date(){
        return $this->tanggal;
    }
    
    public function get_catatan(){
        return $this->catatan;
    }
}

class FoodCaptainOrder extends CaptainOrder{
    private $id_special;
    private $list_food_order_quantity = [];
    private static $GET_LAST_FCO_ID_QUERY = "SELECT GREATEST(ifnull((SELECT max(id) from co_makanan),0), ifnull((SELECT max(id) from co_makanan_incomplete),0)) as 'max'";
    
    public function __construct($nomor_meja) {
        parent::__construct($nomor_meja);
    }
    
    public function get_id_special(){
        return $this->id_special;
    }
    
    private function set_attribute($nomeja, $listmakanan){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query(FoodCaptainOrder::$GET_LAST_FCO_ID_QUERY);
        $row = $result->fetch_assoc();
        if(!isset($row["max"])){
            $this->id_special = 0;
        }
        else{
            $this->id_special = $row["max"]+1;
        }
        //$this->list_food_order_quantity = $listmakanan;
        foreach($listmakanan as $key=>$value){
            if($value > 0){
                $new_item = Makanan::fetch_from_db($key);
                $qnew_item = new QMenuItem($new_item, $value);
                array_push($this->list_food_order_quantity, $qnew_item);
            }
 
        }
    }
    
    public function set_from_combined_order($jumbledOrder, $count = -1){
        $count_food = ($count === -1)? Makanan::count() : $count;
        $fooddrinkorder = $jumbledOrder;
        $foodorder = array_slice($fooddrinkorder, 1, $count_food, true);
        $this->set_attribute($jumbledOrder["tab"], $foodorder);
        $this->catatan = $jumbledOrder["cat"];
    }
    
    public function get_order_list(){
        return $this->list_food_order_quantity;
    }
    
    public function get_parent(){
        return new CaptainOrder($this->get_nomor_meja(), true, $this->get_id(), $this->get_date());
    }
}

class DrinkCaptainOrder extends CaptainOrder{
    private $id_special;
    private $list_drink_order_quantity = [];
    private static $GET_LAST_DCO_ID_QUERY = "SELECT GREATEST(ifnull((SELECT max(id) from co_minuman),0), ifnull((SELECT max(id) from co_minuman_incomplete),0)) as 'max'";
    
    public function __construct($nomor_meja) {
        parent::__construct($nomor_meja);
    }
    
    public function get_id_special(){
        return $this->id_special;
    }
    
    private function set_attribute($listminuman){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query(DrinkCaptainOrder::$GET_LAST_DCO_ID_QUERY);
        $row = $result->fetch_assoc();
        if(!isset($row["max"])){
            $this->id_special = 0;
        }
        else{
            $this->id_special = $row["max"]+1;
        }
        //$this->list_drink_order_quantity = $listminuman;
        foreach($listminuman as $key=>$value){
            if($value > 0){
                $new_item = Minuman::fetch_from_db($key);
                $qnew_item = new QMenuItem($new_item, $value);
                array_push($this->list_drink_order_quantity, $qnew_item);
            }
        }
    }
    
    public function set_from_combined_order($jumbledOrder, $count = -1){
        $count_drink = ($count === -1)? Minuman::count() : $count;
        $fooddrinkorder = $jumbledOrder;
        $offset = ($count === -1)? 1 : 3;
        $drinkorder = array_slice($fooddrinkorder, -($count_drink+$offset), -$offset, true);
        $this->set_attribute($drinkorder);
        $this->catatan = $jumbledOrder["cat"];
    }
    
    public function get_order_list(){
        return $this->list_drink_order_quantity;
    }
    
    public function get_parent(){
        return new CaptainOrder($this->get_nomor_meja(), true, $this->get_id(), $this->get_date());
    }
}

//Miscellacenious Captain Order Utilities
class MCaptainOrderUtils{
    public static function save_to_db_as_incomplete($captain_order, $food_co, $drink_co){
        $query1 = "INSERT INTO co_incomplete(id, cominuman_id, comakanan_id , nomormeja, tanggal)"
                . "VALUES(".$captain_order->get_id().","
                .$food_co->get_id_special().","
                .$drink_co->get_id_special().",\""
                .$captain_order->get_nomor_meja()."\",\""
                .$captain_order->get_date()."\")";
        $conn = DBConnector::connect("", "");
        $result1 = $conn->query($query1);
        $listqmakanan = $food_co->get_order_list();
        foreach($listqmakanan as $qmakanan){
            $query2 = "INSERT INTO co_makanan_incomplete(id, id_co, id_makanan, jumlah, status) "
                . "VALUES(".$food_co->get_id_special().",".$captain_order->get_id().","
                . $qmakanan->get_item()->get_id().",".$qmakanan->get_quantity().",\""
                . $qmakanan->get_item()->get_status()."\")";
            $result2 = $conn->query($query2);
        }
        $listqminuman = $drink_co->get_order_list();
        foreach($listqminuman as $qminuman){
            $query3 = "INSERT INTO co_minuman_incomplete(id, id_co, id_minuman, jumlah, status) "
                . "VALUES(".$drink_co->get_id_special().",".$captain_order->get_id().","
                . $qminuman->get_item()->get_id().",".$qminuman->get_quantity().",\""
                . $qminuman->get_item()->get_status()."\")";
            $result3 = $conn->query($query3);
        }
        $conn->close();
    }
    
    public static function save_to_db_as_complete($captain_order, $food_co, $drink_co){
         $query1 = "INSERT INTO captain_order(id, cominuman_id, comakanan_id , nomormeja, tanggal)"
                . "VALUES(".$captain_order->get_id().","
                .$food_co->get_id_special().","
                .$drink_co->get_id_special().",\""
                .$captain_order->get_nomor_meja()."\","
                .$captain_order->get_date().",)";
        $conn = DBConnector::connect("", "");
        $result1 = $conn->query($query1);
        $listqmakanan = $food_co->get_order_list();
        foreach($listqmakanan as $qmakanan){
            $query2 = "INSERT INTO co_makanan(id, id_co, id_makanan, jumlah, status) "
                . "VALUES(".$food_co->get_id_special().",".$captain_order->get_id().","
                . $qmakanan->get_item()->get_id().",".$qmakanan->get_quantity().",\""
                . $qmakanan->get_item()->get_status()."\")";
            $result2 = $conn->query($query2);
        }
        $listqminuman = $drink_co->get_order_list();
        foreach($listqminuman as $qminuman){
            $query3 = "INSERT INTO co_minuman(id, id_co, id_makanan, jumlah, status) "
                . "VALUES(".$drink_co->get_id_special().",".$captain_order->get_id().","
                . $qminuman->get_item()->get_id().",".$qminuman->get_quantity().",\""
                . $qminuman->get_item()->get_status()."\")";
            $result3 = $conn->query($query3);
        }
        $conn->close();
    }
    
    public static function remove_from_db_incomplete($captain_order, $food_co, $drink_co){
        $query1 = "DELETE FROM co_incomplete WHERE id = ".$captain_order->get_id();
        $query2 = "DELETE FROM co_makanan_incomplete WHERE id = ".$food_co->get_id_special();
        $query3 = "DELETE FROM co_minuman_incomplete WHERE id = ".$drink_co->get_id_special();
        $conn = DBConnector::connect("", "");
        $result1 = $conn->query($query1);
        $result2 = $conn->query($query2);
        $result3 = $conn->query($query3);
        $conn->close();
    }
}

class Bon{
    
}
