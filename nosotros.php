<?php
$titulo = 'Nosotros - Restaurante La Piazza';
include 'estructura/cabeza.php';
?>

<main>
    <!-- Encabezado de la sección -->
    <header class="nosotros-cabecera">
        <h2>Sobre nosotros</h2>
        <p class="nosotros-subtitulo">La historia de una pasión familiar que se sirve en cada plato desde 1984.</p>
    </header>

    <!-- Sección de Historia + Imagen -->
    <section class="nosotros-historia">
        <div class="texto-historia">
            <h3>Nuestra Historia</h3>
            <p><strong>Restaurante La Piazza</strong> nació del sueño de la familia Moretti de traer un pedacito de la auténtica Italia a nuestra ciudad. Todo comenzó en 1984, cuando Giuseppe y Maria decidieron abrir las puertas de un pequeño local en una acogedora plaza, con apenas un puñado de mesas, un viejo horno de leña y las recetas tradicionales de su natal Toscana.</p>
            <p>Con el paso de los años, lo que empezó como una pequeña casa de comidas familiar se ha convertido en un referente gastronómico sin perder su esencia: respeto absoluto por el producto, pasta fresca artesanal y un trato cercano que te hace sentir en familia.</p>
        </div>
        
        <figure class="imagen-collage">
            <img src="img/historia-la-piazza.jpg" width="90%" alt="Historia y equipo de Restaurante La Piazza" class="imagen-destacada">
        </figure>
    </section>

    <!-- Sección de Filosofía / El Local (Dos columnas) -->
    <section class="nosotros-valores">
        <article class="valor-card">
            <h3>El Local Hoy</h3>
            <p>Hoy, La Piazza combina la calidez de las trattorias tradicionales con un ambiente renovado y acogedor. Nuestras mesas con manteles de cuadros, la iluminación tenue y el aroma a pan recién horneado y albahaca fresca te transportarán directamente al corazón de Italia.</p>
        </article>
        
        <article class="valor-card">
            <h3>Nuestra Cocina</h3>
            <p>Seguimos amasando la pasta fresca a diario y seleccionando minuciosamente los mejores ingredientes locales e importados. El horno de leña sigue siendo el alma de nuestra cocina, de donde salen nuestras famosas pizzas de masa fina y crujiente.</p>
        </article>
    </section>

    <!-- Sección del Equipo (Tres columnas) -->
    <section class="nosotros-equipo">
        <h3>El Equipo Detrás de la Magia</h3>
        <p class="intro-equipo">Un gran plato no es nada sin las manos y el corazón de quienes lo preparan. Hoy, la segunda generación de la familia Moretti, junto a un equipo de profesionales apasionados, mantiene vivo el legado.</p>
        
        <div class="grid-equipo">
            <article class="miembro-equipo">
                <h4>La Familia Moretti</h4>
                <span class="puesto">Fundadores y Alma</span>
                <p>Giuseppe y Maria siguen supervisando cada detalle para mantener el estándar de hospitalidad que nos vio nacer, mientras sus hijos coordinan la gestión diaria.</p>
            </article>

            <article class="miembro-equipo">
                <h4>Chef Francesco y Equipo</h4>
                <span class="puesto">Cocina y Tradición</span>
                <p>Francesco lidera nuestra cocina asegurándose de que cada plato de pasta y cada pizza al horno de leña salgan con el sabor auténtico y la calidad de siempre.</p>
            </article>

            <article class="miembro-equipo">
                <h4>Equipo de Sala</h4>
                <span class="puesto">Hospitalidad y Servicio</span>
                <p>Nuestros camareros y personal de atención son quienes hacen que te sientas como en casa desde el primer momento, ofreciendo un trato cercano y atento.</p>
            </article>
        </div>
    </section>
</main>

<?php include 'estructura/pie.php'; ?>