<?php
$titulo = 'Inicio - Restaurante La Piazza';
include 'estructura/cabeza.php';
?>

<main class="main-tagliatella">
    <style>
        .main-tagliatella {
            width: min(920px, 94%);
            margin: 25px auto;
            padding: clamp(16px, 3.5vw, 32px);
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            box-sizing: border-box;
            overflow: hidden;
        }

        /* Hero Banner 100% Responsive */
        .hero-banner {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: clamp(25px, 4vw, 40px);
            background: linear-gradient(180deg, rgba(15, 4, 4, 0.5) 0%, rgba(101, 25, 25, 0.88) 100%),
                        url('img/hero.jpg') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: clamp(35px, 6vw, 65px) clamp(16px, 4vw, 35px);
            color: #ffffff;
            min-height: 320px;
            box-sizing: border-box;
            box-shadow: 0 6px 20px rgba(101, 25, 25, 0.25);
        }

        .badge-hero {
            display: inline-block;
            background: #d49a3d;
            color: #ffffff;
            font-size: clamp(0.75rem, 2vw, 0.85rem);
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 20px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            margin-bottom: 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .hero-banner h2 {
            margin: 0 0 12px;
            font-size: clamp(1.7rem, 4.5vw, 2.6rem);
            line-height: 1.2;
            color: #ffffff;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.6);
        }

        .hero-banner p {
            max-width: 650px;
            margin: 0 0 24px;
            font-size: clamp(0.95rem, 2.2vw, 1.1rem);
            line-height: 1.55;
            color: #f7eded;
            text-shadow: 0 1px 6px rgba(0, 0, 0, 0.7);
        }

        .hero-buttons {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
        }

        /* Botones generales */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 10px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            box-sizing: border-box;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .btn-primary {
            background: #8b2424;
            color: #ffffff;
            border: 2px solid #8b2424;
        }

        .btn-primary:hover {
            background: #651919;
            border-color: #651919;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(101, 25, 25, 0.3);
        }

        .btn-secondary {
            background: #ffffff;
            color: #8b2424;
            border: 2px solid #ffffff;
        }

        .btn-secondary:hover {
            background: #fff9f3;
            color: #651919;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-gold {
            background: #d49a3d;
            color: #ffffff;
            border: 2px solid #d49a3d;
        }

        .btn-gold:hover {
            background: #b5802a;
            border-color: #b5802a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(212, 154, 61, 0.4);
        }

        /* Secciones y Tipografía */
        .section-header {
            text-align: center;
            margin: clamp(25px, 4vw, 40px) 0 25px;
        }

        .section-titulo {
            margin: 0 0 8px;
            font-size: clamp(1.4rem, 3.2vw, 1.85rem);
            color: #8b2424;
        }

        .section-subtitulo {
            color: #666;
            margin: 0;
            font-size: clamp(0.9rem, 2vw, 1rem);
            line-height: 1.45;
        }

        /* Grid de Especialidades (Responsive Flex/Grid) */
        .grid-platos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 250px), 1fr));
            gap: clamp(16px, 2.5vw, 24px);
            margin-bottom: 35px;
        }

        .card-plato {
            border: 1px solid #ebd9c8;
            border-radius: 12px;
            overflow: hidden;
            background: #ffffff;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .card-plato:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 24px rgba(139, 36, 36, 0.15);
        }

        .card-img-wrapper {
            position: relative;
            width: 100%;
            height: 190px;
            overflow: hidden;
            background: #f2e9df;
        }

        .card-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .card-plato:hover .card-img-wrapper img {
            transform: scale(1.06);
        }

        .badge-card {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(139, 36, 36, 0.92);
            color: #ffffff;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 12px;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            padding: clamp(14px, 2.5vw, 20px);
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-body h4 {
            margin: 0 0 10px;
            color: #8b2424;
            font-size: 1.15rem;
        }

        .card-body p {
            margin: 0;
            color: #4f4f4f;
            font-size: 0.92rem;
            line-height: 1.5;
            flex: 1;
        }

        /* Grid de Valores / Ventajas */
        .grid-ventajas {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(100%, 220px), 1fr));
            gap: clamp(14px, 2vw, 20px);
            margin: 20px 0 35px;
        }

        .card-ventaja {
            background: #fff9f3;
            border: 1px dashed #d49a3d;
            border-radius: 10px;
            padding: clamp(16px, 2.5vw, 22px);
            text-align: center;
            transition: transform 0.2s ease;
        }

        .card-ventaja:hover {
            transform: translateY(-3px);
            background: #fff5ea;
        }

        .card-ventaja-icono {
            font-size: 2.2rem;
            margin-bottom: 10px;
            display: inline-block;
        }

        .card-ventaja h4 {
            margin: 0 0 8px;
            color: #8b2424;
            font-size: 1.05rem;
        }

        .card-ventaja p {
            margin: 0;
            font-size: 0.88rem;
            color: #555555;
            line-height: 1.45;
        }

        /* Banner CTA */
        .cta-box {
            background: linear-gradient(135deg, #8b2424 0%, #651919 100%);
            color: #ffffff;
            border-radius: 12px;
            padding: clamp(24px, 4vw, 36px) clamp(16px, 3vw, 28px);
            text-align: center;
            margin-top: 25px;
            box-shadow: 0 6px 20px rgba(101, 25, 25, 0.22);
            box-sizing: border-box;
        }

        .cta-box h3 {
            margin: 0 0 10px;
            font-size: clamp(1.25rem, 3vw, 1.55rem);
            color: #ffffff;
        }

        .cta-box p {
            max-width: 600px;
            margin: 0 auto 20px;
            font-size: clamp(0.9rem, 2vw, 1rem);
            line-height: 1.5;
            color: #f7eded;
        }

        /* Media queries para pantallas móviles y tablets */
        @media (max-width: 520px) {
            .hero-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            .hero-buttons .btn {
                width: 100%;
            }
            .card-img-wrapper {
                height: 180px;
            }
        }
    </style>

    <!-- Banner Hero Principal Responsive -->
    <div class="hero-banner" role="region" aria-label="Bienvenida a La Tagliatella">
        <span class="badge-hero">🍝 Auténtica Trattoria Italiana</span>
        <h2>Bienvenidos a La Piazza</h2>
        <p>El auténtico sabor del norte de Italia. Platos generosos, pastas artesanales y recetas tradicionales elaboradas para saborear y compartir alrededor de una buena mesa.</p>
        <div class="hero-buttons">
            <a href="carta.php" class="btn btn-secondary">Ver Nuestra Carta</a>
            <a href="reservas.php" class="btn btn-primary">Reservar Mesa</a>
        </div>
    </div>

    <!-- Sección Especialidades con Imágenes -->
    <div class="section-header">
        <h3 class="section-titulo">Nuestras Especialidades</h3>
        <p class="section-subtitulo">Preparadas al momento con ingredientes 100% italianos de primera calidad</p>
    </div>

    <div class="grid-platos">
        <article class="card-plato">
            <div class="card-img-wrapper">
                <img src="img/pasta.jpg" alt="Pastas artesanales tradicionales y rellenas" loading="lazy">
                <span class="badge-card">Pasta Fresca</span>
            </div>
            <div class="card-body">
                <h4>Pastas Artesanales</h4>
                <p>Combina tu pasta favorita tradicional o rellena con más de 20 salsas artesanales al momento, coronadas con Parmigiano Reggiano D.O.P.</p>
            </div>
        </article>

        <article class="card-plato">
            <div class="card-img-wrapper">
                <img src="img/pizza.jpg" alt="Pizzas italianas al horno de piedra" loading="lazy">
                <span class="badge-card">Al Horno</span>
            </div>
            <div class="card-body">
                <h4>Pizzas Tradicionales</h4>
                <p>Masa fina y crujiente, tomate San Marzano, mozzarella fior di latte fundida y horneada al estilo de las trattorias italianas.</p>
            </div>
        </article>

        <article class="card-plato">
            <div class="card-img-wrapper">
                <img src="img/postre.jpg" alt="Auténtico tiramisú artesano" loading="lazy">
                <span class="badge-card">Dolci</span>
            </div>
            <div class="card-body">
                <h4>Postres Caseros</h4>
                <p>Nuestra joya dulce: el emblemático Tiramisú con auténtico mascarpone, café espresso y cacao puro para poner el broche de oro.</p>
            </div>
        </article>
    </div>

    <!-- Valores y Experiencia Piazza -->
    <div class="section-header">
        <h3 class="section-titulo">La Experiencia Piazza</h3>
        <p class="section-subtitulo">Mucho más que una comida, un viaje a las regiones de Emilia Romagna, Liguria y Piemonte</p>
    </div>

    <div class="grid-ventajas">
        <div class="card-ventaja">
            <div class="card-ventaja-icono">🧀</div>
            <h4>Ingredientes D.O.P.</h4>
            <p>Aceite de oliva virgen extra, quesos curados y jamón de Parma traídos directamente de productores italianos.</p>
        </div>
        <div class="card-ventaja">
            <div class="card-ventaja-icono">👨‍👩‍👧‍👦</div>
            <h4>Platos para Compartir</h4>
            <p>Raciones generosas y abundantes concebidas bajo la filosofía italiana de disfrutar y compartir en buena compañía.</p>
        </div>
        <div class="card-ventaja">
            <div class="card-ventaja-icono">🍷</div>
            <h4>Ambiente Acogedor</h4>
            <p>Espacios decorados con madera noble, iluminación cálida y la elegancia característica de las trattorias del norte de Italia.</p>
        </div>
    </div>

    <!-- Llamada a la Acción Responsive -->
    <div class="cta-box">
        <h3>¿Listo para saborear la auténtica Italia?</h3>
        <p>Reserva tu mesa con antelación o echa un vistazo a nuestra selección completa de platos y vinos.</p>
        <div class="hero-buttons">
            <a href="carta.php" class="btn btn-secondary">Explorar la Carta</a>
            <a href="reservas.php" class="btn btn-gold">Hacer Reserva Online</a>
        </div>
    </div>
</main>

<?php include 'estructura/pie.php'; ?>
