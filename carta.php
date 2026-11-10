<?php
$titulo = 'Carta - Restaurante La Piazza';
include 'estructura/cabeza.php';

$carta = [
    'pizzas' => [
        'titulo' => 'Pizzas',
        'platos' => [
            ['nombre' => 'Pizza Margarita', 'desc' => 'Tomate, mozzarella fresca y albahaca.', 'precio' => 10, 'img' => 'img/margarita.jpeg'],
            ['nombre' => 'Pizza Cuatro Quesos', 'desc' => 'Mozzarella, gorgonzola, parmesano y queso suave.', 'precio' => 12, 'img' => 'img/cuatro.jpeg'],
            ['nombre' => 'Pizza Napolitana', 'desc' => 'Tomate, anchoas, aceitunas, alcaparras y parmesano.', 'precio' => 12, 'img' => 'img/napolitana.jpeg'],
            ['nombre' => 'Pizza Barbacoa', 'desc' => 'Pollo, pimiento, mozzarella y salsa barbacoa.', 'precio' => 13, 'img' => 'img/barbacoa.jpeg'],
        ],
    ],
    'pastas' => [
        'titulo' => 'Pastas',
        'platos' => [
            ['nombre' => 'Pasta Carbonara', 'desc' => 'Espaguetis con panceta crujiente, huevo, queso y pimienta.', 'precio' => 11, 'img' => 'img/carbonara.jpeg'],
            ['nombre' => 'Tagliatelle a la Boloñesa', 'desc' => 'Pasta fresca con ragú de carne y parmesano.', 'precio' => 12, 'img' => 'img/bolonesa.jpeg'],
            ['nombre' => 'Tagliatelle al Pesto', 'desc' => 'Pasta con pesto de albahaca fresca.', 'precio' => 11, 'img' => 'img/pesto.jpeg'],
            ['nombre' => 'Ravioli al Pomodoro', 'desc' => 'Rellenos de ricotta y espinacas con salsa de tomate.', 'precio' => 12, 'img' => 'img/ravioli.jpeg'],
            ['nombre' => 'Espaguetis a la Marinera', 'desc' => 'Con gambas, mejillones, almejas y calamar en salsa de tomate.', 'precio' => 14, 'img' => 'img/marinera.jpeg'],
        ],
    ],
    'postres' => [
        'titulo' => 'Postres',
        'platos' => [
            ['nombre' => 'Tiramisú', 'desc' => 'Receta clásica con mascarpone, café y cacao.', 'precio' => 5, 'img' => 'img/tiramisu.jpeg'],
            ['nombre' => 'Panna Cotta', 'desc' => 'Con coulis de fresa y menta.', 'precio' => 5, 'img' => 'img/pannacotta.jpeg'],
            ['nombre' => 'Tarta de Queso', 'desc' => 'Cremosa, con frutos rojos.', 'precio' => 6, 'img' => 'img/queso.jpeg'],
            ['nombre' => 'Tarta de Chocolate', 'desc' => 'Capas de chocolate y crema con frambuesas.', 'precio' => 6, 'img' => 'img/chocolate.jpeg'],
            ['nombre' => 'Crepes con Fresas', 'desc' => 'Rellenos de fresas y bañados en chocolate.', 'precio' => 6, 'img' => 'img/creps.jpeg'],
        ],
    ],
];

// Categoría elegida en la URL (?cat=pastas). Si no es válida, se muestra todo.
$cat = $_GET['cat'] ?? 'todas';
if ($cat !== 'todas' && !isset($carta[$cat])) {
    $cat = 'todas';
}

$mostrar = ($cat === 'todas') ? $carta : [$cat => $carta[$cat]];
?>

<!-- Estilos integrados para la carta -->
<style>
.filtros {
    display: flex;
    gap: .75rem;
    flex-wrap: wrap;
    margin-bottom: 2rem;
}

.filtros a {
    padding: .5rem 1.2rem;
    border: 2px solid #b22222;
    border-radius: 999px;
    color: #b22222;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.2s ease;
}

.filtros a:hover,
.filtros a.activo {
    background: #b22222;
    color: #fff;
}

.carta section { 
    margin-bottom: 2.5rem; 
}

.carta h3 {
    font-size: 1.5rem;
    color: #222;
    margin-bottom: 1rem;
    border-bottom: 2px solid #f0f0f0;
    padding-bottom: 0.5rem;
}

.platos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 1.5rem;
}

.plato {
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0,0,0,0.02);
    transition: transform 0.2s ease;
}

.plato:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.08);
}

.plato img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
}

.plato-info { 
    padding: 1rem; 
}

.plato-info h4 { 
    margin: 0 0 .5rem; 
    font-size: 1.1rem;
    color: #222;
}

.plato-info p { 
    margin: 0 0 .75rem; 
    font-size: .9rem; 
    color: #555; 
}

.precio { 
    font-weight: bold; 
    color: #b22222; 
    font-size: 1.05rem;
}
</style>

<main class="carta">
    <h2>Nuestra carta</h2>

    <nav class="filtros">
        <a href="?cat=todas" class="<?= $cat === 'todas' ? 'activo' : '' ?>">Todo</a>
        <?php foreach ($carta as $clave => $seccion): ?>
            <a href="?cat=<?= $clave ?>" class="<?= $cat === $clave ? 'activo' : '' ?>">
                <?= htmlspecialchars($seccion['titulo']) ?>
            </a>
        <?php endforeach; ?>
    </nav>

    <?php foreach ($mostrar as $clave => $seccion): ?>
        <section id="<?= $clave ?>">
            <h3><?= htmlspecialchars($seccion['titulo']) ?></h3>
            <div class="platos">
                <?php foreach ($seccion['platos'] as $plato): ?>
                    <article class="plato">
                        <img src="<?= htmlspecialchars($plato['img']) ?>"
                             alt="<?= htmlspecialchars($plato['nombre']) ?>"
                             loading="lazy">
                        <div class="plato-info">
                            <h4><?= htmlspecialchars($plato['nombre']) ?></h4>
                            <p><?= htmlspecialchars($plato['desc']) ?></p>
                            <span class="precio"><?= number_format($plato['precio'], 0) ?> €</span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</main>

<?php include 'estructura/pie.php'; ?>