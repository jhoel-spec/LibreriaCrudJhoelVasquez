<?php
require_once "../../controlador/ProductoController.php";

$controller = new ProductoController();
$libros = $controller->listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Librería</title>
    <link rel="stylesheet" href="../../public/css/estilos.css">
</head>
<body>
    <h1>Lista de Libros</h1>
    <table border="1">
        <tr>
            <th>ID</th><th>Título</th><th>Género</th><th>Autor</th><th>Editorial</th><th>Portada</th>
        </tr>
        <?php foreach($libros as $libro): ?>
        <tr>
            <td><?= $libro['id_libro'] ?></td>
            <td><?= $libro['titulo'] ?></td>
            <td><?= $libro['genero'] ?></td>
            <td><?= $libro['autor'] ?></td>
            <td><?= $libro['editorial'] ?></td>
            <td><img src="../../public/img/<?= $libro['fotoportada'] ?>" width="50"></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
