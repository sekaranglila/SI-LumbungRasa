<?php

include 'DBConnector.php'; 
include 'MenuItem.php';

class CaptainOrder{
    protected $id;
    protected $nomor_meja;
    protected $tanggal;
    protected static $GET_LAST_CO_ID_QUERY = "SELECT max(id) from lumbungrasa.captain_order";
    protected $catatan;
    
    protected function __construct($nomor_meja) {
        $conn = DBConnector::connect("root", "");
        $result = $conn->query(CaptainOrder::$GET_LAST_CO_ID_QUERY);
        $this->id = $result->fetch_assoc()[0];
        $this->tanggal = date("Y-m-d H:i:s");
        $this->nomor_meja = $nomor_meja;
        $conn->close();
    }
    
    public static function getCaptainOrder($food_captain_order, $drink_captain_order){
        
    }
}

class FoodCaptainOrder extends CaptainOrder{
    private $id_special;
    private $list_food_order_quantity = [];
    private static $GET_LAST_FCO_ID_QUERY = "SELECT max(id) from lumbungrasa.co_makanan";
    
    public function __construct($nomor_meja) {
        parent::__construct($nomor_meja);
    }
    
    private function set_attribute($nomeja, $listmakanan){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query(CaptainOrder::$GET_LAST_FCO_ID_QUERY);
        $this->id_special = $result->fetch_assoc()[0];
        //$this->list_food_order_quantity = $listmakanan;
        foreach($listmakanan as $key=>$value){
            $new_item = Makanan::fetch_from_db($key);
            array_push($this->list_food_order_quantity, $new_item);
        }
    }
    
    public function set_from_combined_order($jumbledOrder){
        $count_food = Makanan::count();
        $foodorder = array_slice($jumbledOrder, 1, $count_food);
        $this->set_attribute($jumbledOrder["tab"], $foodorder);
        $this->catatan = $jumbledOrder["cat"];
    }
    
    public function get_order_list(){
        return $list_food_order_quantity;
    }
}

class DrinkCaptainOrder extends CaptainOrder{
    private $id_special;
    private $list_drink_order_quantity = [];
    private static $GET_LAST_DCO_ID_QUERY = "SELECT max(id) from lumbungrasa.co_minuman";
    
    public function __construct($nomor_meja) {
        parent::__construct($nomor_meja);
    }
    
    private function set_attribute($listminuman){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query(CaptainOrder::$GET_LAST_DCO_ID_QUERY);
        $this->id_special = $result->fetch_assoc()[0];
        //$this->list_drink_order_quantity = $listminuman;
        foreach($listminuman as $key=>$value){
            $new_item = Minuman::fetch_from_db($key);
            array_push($this->list_drink_order_quantity, $new_item);
        }
    }
    
    public function set_from_combined_order($jumbledOrder){
        $count_drink = Minuman::count();
        $drinkorder = array_slice($jumbledOrder, -1, $count_drink);
        $this->set_attribute($drinkorder);
        $this->catatan = $jumbledOrder["cat"];
    }
    
     public function get_order_list(){
        return $list_drink_order_quantity;
    }
}
