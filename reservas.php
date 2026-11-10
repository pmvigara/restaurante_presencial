<?php
$titulo = 'Reservas - Restaurante La Piazza';
include 'estructura/cabeza.php';
?>

<main>
    <h2>Reservas</h2>
    <form action="procesar_reserva.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" required>

        <label for="personas">Número de personas:</label>
        <input type="number" id="personas" name="personas" min="1" required>

        <button type="submit">Reservar</button>
    </form>
</main>

<?php include 'estructura/pie.php'; ?>
