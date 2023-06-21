<?php

class Login {
    private $db;

    public function __construct() {
        // Inisialisasi koneksi database
        $this->db = new PDO("mysql:host=localhost;dbname=spk", "root", "");
    }

    public function checkLogin($tableName, $username, $password) {
        $query = $this->db->prepare("SELECT * FROM $tableName WHERE username = :username AND password = :password");
        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password);
        $query->execute();

        return $query->rowCount() > 0;
    }
}
?>
