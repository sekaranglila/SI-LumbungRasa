<?php

include 'MenuItem.php';

class CaptainOrder{
    protected $id;
    protected $nomor_meja;
    protected $tanggal;
    protected static $GET_LAST_CO_ID_QUERY = "SELECT max(id) as max from lumbungrasa.captain_order";
    protected $catatan;
    
    protected function __construct($nomor_meja) {
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
    
    public static function getCaptainOrder($food_captain_order, $drink_captain_order){
        
    }
}

class FoodCaptainOrder extends CaptainOrder{
    private $id_special;
    private $list_food_order_quantity = [];
    private static $GET_LAST_FCO_ID_QUERY = "SELECT max(id) as max from lumbungrasa.co_makanan";
    
    public function __construct($nomor_meja) {
        parent::__construct($nomor_meja);
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
    
    public function set_from_combined_order($jumbledOrder){
        $count_food = Makanan::count();
        $fooddrinkorder = $jumbledOrder;
        $foodorder = array_slice($fooddrinkorder, 1, $count_food, true);
        $this->set_attribute($jumbledOrder["tab"], $foodorder);
        $this->catatan = $jumbledOrder["cat"];
    }
    
    public function get_order_list(){
        return $this->list_food_order_quantity;
    }
    
    public function save_to_db_as_incomplete(){
        
    }
    
    public function save_to_db_as_complete(){
        
    }
}

class DrinkCaptainOrder extends CaptainOrder{
    private $id_special;
    private $list_drink_order_quantity = [];
    private static $GET_LAST_DCO_ID_QUERY = "SELECT max(id) as max from lumbungrasa.co_minuman";
    
    public function __construct($nomor_meja) {
        parent::__construct($nomor_meja);
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
    
    public function set_from_combined_order($jumbledOrder){
        $count_drink = Minuman::count();
        $fooddrinkorder = $jumbledOrder;
        $drinkorder = array_slice($fooddrinkorder, -($count_drink+1), -1, true);
        $this->set_attribute($drinkorder);
        $this->catatan = $jumbledOrder["cat"];
    }
    
    public function get_order_list(){
        return $this->list_drink_order_quantity;
    }
    
    public function save_to_db_as_incomplete(){
        /*$conn = DBConnector::connect("", "");
        $result = $conn->query("SELECT max(id) as max FROM co_incomplete");
        $row = $result->fetch_assoc();
        $id_co = isset($row["max"])? $row["max"] : 0;
        $result = $conn->query("SELECT max(id) as max FROM co_makanan_incomplete");
        $row = $result->fetch_assoc();
        $id_co = isset($row["max"])? $row["max"] : 0;*/
        
        $query2 = "INSERT INTO co_makanan_incomplete(id, id_co_makanan)";
        $query3 = "INSERT INTO co_minuman_incomplete(id, id_co_minuman)";
                
    }
    
    public function save_to_db_as_complete(){
        
    }
    
}

class Bon{
    
}
$query1 = "INSERT INTO co_incomplete(comakanan_id, cominuman_id, id, nomormeja, tanggal)"
                . "VALUES(..,..,..,\"..\",..,);