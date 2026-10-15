<?php
try {
    $conexion = new PDO("mysql:host=localhost;dbname=Libreria", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión exitosa a la base de datos";
} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
