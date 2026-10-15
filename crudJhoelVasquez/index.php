<?php
require_once "conexion.php";

// Si el usuario envió un término de búsqueda
$busqueda = isset($_GET['q']) ? $_GET['q'] : '';

if ($busqueda != '') {
    $sql = "SELECT * FROM libro 
            WHERE titulo LIKE :busqueda 
               OR genero LIKE :busqueda 
               OR autor LIKE :busqueda 
               OR editorial LIKE :busqueda";
    $stmt = $conexion->prepare($sql);
    $stmt->execute(['busqueda' => "%$busqueda%"]);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sql = "SELECT * FROM libro";
    $resultado = $conexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>

<form method="get">
    <input type="text" name="q" placeholder="Buscar libro..." value="<?= htmlspecialchars($busqueda) ?>">
    <button type="submit">Buscar</button>
</form>

<table border="1">
    <tr><th>ID</th><th>Título</th><th>Género</th><th>Autor</th><th>Editorial</th><th>Portada</th></tr>
    <?php foreach ($resultado as $fila): ?>
    <tr>
        <td><?= $fila['id_libro'] ?></td>
        <td><?= $fila['titulo'] ?></td>
        <td><?= $fila['genero'] ?></td>
        <td><?= $fila['autor'] ?></td>
        <td><?= $fila['editorial'] ?></td>
        <td><?= $fila['fotoportada'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
