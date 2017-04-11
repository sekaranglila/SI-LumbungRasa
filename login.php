<?php
    include 'DBConnector.php';
    /*
     * Kelas untuk mengendalikan / merepresentasikan user. 
     */
    class UserAccount{
        private $user_type_list = ["WAITER", "COOK", "PANTRY", "KASIR"];
        private $redirect_list = ["home_waiter.php", "cook.php", "pantry.php", "order_kasir.php"];
        private $usertype;
        private $id;
        private $username;
        private $conn;
        private $error_message = "";
        private $is_error;
        private $dir = "/SI-LumbungRasa/";

        public function __construct($username, $password, $option, $islogin) {
            $this->conn = DBConnector::connect($option, "");
            //cari id, password, dan opsi di tabel user
            $stmt = $this->conn->prepare("SELECT * FROM lumbungrasa.user WHERE nama = ? AND password = ? AND jabatan = ?");
            $stmt->bind_param("sss", $username, $password, $this->user_type_list[$option]);
            $stmt->execute();
            $result = $stmt->get_result();
            $num_rows_affected = $result->num_rows;
            if($islogin){
                if($num_rows_affected == 1){
                    $result_array = $result->fetch_assoc();
                    $this->id = $result_array['id'];
                    $this->username = $result_array['nama'];
                    $this->usertype = $option;
                }
                else{
                    $this->is_error = true;
                    $this->error_message = "id atau password atau divisi salah";
                }
            }
            else{
                if($num_rows_affected > 0){
                    $this->is_error = true;
                    $this->error_message = "sudah ada yang punya";
                }
                else{
                    //masukkin ke database
                }
            }

        }

        public function get_error(){
            return $this->is_error;
        }

        public function get_redirect_page(){
            return $_SERVER["HTTP_ORIGIN"].$this->dir.$this->redirect_list[$this->usertype];
        }
        
        public function get_error_message(){
            return $this->error_message;
        }
    }
    
    //get data from form
    $user_name = isset($_POST["user_name"])? htmlspecialchars($_POST["user_name"]) : "";
    $user_pass = isset($_POST["user_pass"])? htmlspecialchars($_POST["user_pass"]) : "";
    $user_division = isset($_POST["user_div"])?  htmlspecialchars($_POST["user_div"]) : "";
    $islogin = isset($_POST["submittype"])? $_POST["submittype"] : "";
    if($user_name !== "" && $user_pass !== "" && $user_division !=="" && $islogin !== "" ){
        $user_account = new UserAccount($user_name, $user_pass, $user_division, $islogin);
        if (!$user_account->get_error()) {
            $url =  $user_account->get_redirect_page();
            header("Location: " .$url);
        }
        else {
            echo("Error: ". $user_account->get_error_message());
        }
}
    else{
        //balik lagi
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
    