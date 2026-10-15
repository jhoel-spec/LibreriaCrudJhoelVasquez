<?php
class Database {
    private $host = "localhost";
    private $db_name = "Libreria";   // nombre de tu base de datos
    private $username = "root";      // usuario por defecto en XAMPP
    private $password = "";          // contraseña vacía por defecto
    public $conn;

    public function conectar() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                                   $this->username, 
                                   $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}