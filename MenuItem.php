<?php
include 'DBConnector.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MenuItem{
    protected $nama;
    protected $harga;
    protected $status_int;
    protected static $status_keyword = ["BELUM JADI", "HABIS", "DIBUAT", "JADI"];
    protected $tipe;
    protected $deskripsi;
    //abstract protected function get_type();
    
    public function get_nama(){
        return $this->nama;
    }
    
    public function get_harga(){
        return $this->harga;
    }
    
   public function get_status(){
       return MenuItem::status_keyword[$this->status_int];
   }
   
   public function get_deskripsi(){
       return $this->deskripsi;
   }


   public function update_to_habis(){
       $this->status_int = 1;
   }
   
   public function update_to_dibuat(){
       $this->status_int = 2;
   }
   
   public function update_to_jadi() {
       $this->status_int = 3;
   }
}

class Makanan extends MenuItem{
    private $id_db;
    
    public function __construct($id_db, $name, $price, $deskripsi) {
        $this->id_db = $id_db;
        $this->nama = $name;
        $this->harga = $price;
        $this->status_int = 0;
        $this->deskripsi = $deskripsi;
        $this->tipe = "Makanan";
    }
    
    public static function get_all_from_db(){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT * FROM makanan");
        //pindahin result ke sebuah array
        $array_ret = [];
        while ($row = $result->fetch_assoc()){
            $new_makanan = new Makanan($row["id"], $row["nama"], $row["harga"], $row["deskripsi"]);
            array_push($array_ret, $new_makanan);
        }
        $conn->close();
        return $array_ret;
    }
    
    public function get_id(){
        return $this->id_db;
    }
    
    public static function fetch_price($id){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT harga FROM makanan WHERE nama = ".$id);
        $price = 0;
        if ($row = $result->fetch_assoc()){
            $price = $row[0];
        }
        $conn->close();
        return $price;
    }
    
    public static function count(){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT count(id) as cnt FROM makanan");
        $row = $result->fetch_assoc();
        $count = $row["cnt"];
        $conn->close();
        return $count;
    }
    
    public static function fetch_from_db($id){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT * FROM makanan WHERE id = ".$id);
        $row = $result->fetch_assoc();
        $new_makanan = new Makanan($row["id"], $row["nama"], $row["harga"], $row["deskripsi"]);
        $conn->close();
        return $new_makanan;        
    }
}

class Minuman extends MenuItem{
    private $id_db;
    
    public function __construct($id_db, $name, $price, $deskripsi) {
        $this->id_db = $id_db;
        $this->nama = $name;
        $this->harga = $price;
        $this->status_int = 0;
        $this->deskripsi = $deskripsi;
        $this->tipe = "Minuman";
    }
    
    public function get_id(){
        return $this->id_db;
    }
    
    public static function get_all_from_db(){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT * FROM minuman");
        //pindahin result ke sebuah array
        $array_ret = [];
        while ($row = $result->fetch_assoc()){
            $new_minuman = new Minuman($row["id"], $row["nama"], $row["harga"], $row["deskripsi"]);
            array_push($array_ret, $new_minuman);
        }
        $conn->close();
        return $array_ret;
    }
    
    public static function fetch_price($id){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT harga FROM minuman WHERE id = ".$id);
        $price = 0;
        if ($row = $result->fetch_assoc()){
            $price = $row[0];
        }
        $conn->close();
        return $price;
    }
    
    public static function count(){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT count(id) as cnt FROM minuman");
        $row = $result->fetch_assoc();
        $count = $row["cnt"];
        $conn->close();
        return $count;
    }
    
    public static function fetch_from_db($id){
        $conn = DBConnector::connect("root", "");
        $result = $conn->query("SELECT * FROM minuman WHERE id = ".$id);
        $row = $result->fetch_assoc();
        $new_minuman = new Minuman($row["id"], $row["nama"], $row["harga"], $row["deskripsi"]);
        $conn->close();
        return $new_minuman;        
    }
}

//Quantified Menu Item
class QMenuItem{
    private $menuitem;
    private $quantity;
    
    public function __construct($menuitem, $quantity) {
        $this->menuitem = $menuitem;
        $this->quantity = $quantity;
    }
    
    public function get_item(){
        return $this->menuitem;
    }
    
    public function get_quantity(){
        return $this->quantity;
    }
}