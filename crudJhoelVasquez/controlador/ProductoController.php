<?php
require_once "modelo/ProductoDao.php";

class ProductoController {
    private $dao;

    public function __construct() {
        $this->dao = new ProductoDao();
    }

    public function listar() {
        return $this->dao->obtenerLibros();
    }

    public function guardar($titulo, $genero, $autor, $editorial, $fotoportada) {
        return $this->dao->insertarLibro($titulo, $genero, $autor, $editorial, $fotoportada);
    }
}
?>
