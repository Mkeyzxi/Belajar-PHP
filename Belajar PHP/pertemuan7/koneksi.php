<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $fun;

    public function __construct($host, $username, $password, $database){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    //mysqli_connect("local")

    private function connect(){
        $this->fun = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        //if ($this->conn->connect_error){
        //     die("connection failed: " . $this->conn->connect_error);
        // }

        if ($this->fun){
            echo "Berhasil Terhubung";
        }
        else {
            echo "Gagal";
        }
    }

    public function getConnection(){
        return $this->fun;
    }
}

//menggunakan kelas database
$db = new Database("localhost","root","","php");
$connection = $db->getConnection();


?>