<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=libreria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "✅ Conexión exitosa"; // opcional para probar
} catch(PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
    exit;
}
?>
