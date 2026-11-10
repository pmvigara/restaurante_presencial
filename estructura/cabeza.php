<?php
$titulo = $titulo ?? 'Restaurante La Piazza';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="cabecera">
        <h1>Restaurante La Piazza</h1>
        <p>Sabores italianos para compartir</p>
        <nav aria-label="Navegación principal">
            <a href="index.php">Inicio</a>
            <a href="carta.php">Carta</a>
            <a href="contacto.php">Contacto</a>
            <a href="reservas.php">Reservas</a>
            <a href="nosotros.php">Nosotros</a>
        </nav>
    </header>
