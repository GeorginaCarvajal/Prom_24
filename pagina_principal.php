<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal del Colegio</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #4946fa,#f52222, #239114);
            color: #333;
        }
        header {
            background-color: #000000;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 1rem;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            background: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/hero.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 5rem 1rem;
        }
        .btn {
            background-color: #000000;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
        }
        section {
            padding: 2rem 1rem;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Colegio San José de Guanentá</div>
        <nav>
            <ul>
                <li><a href="#grado11">Grupos de Grado 11</a></li>
                <li><a href="#especialidades">Especialidades</a></li>
                <li><a href="#destacados">Estudiantes Destacados</a></li>
                <li><a href="#bicentenario">Bicentenario</a></li>
                <li>
                <a href="index.php">Ir a la Página de Contacto</a>
            </ul>
        </nav>
    </header>
    <section class="hero">
        <h1>Bienvenidos al Colegio San José de Guanentá</h1>
        <img src="img/colegio.png" alt="Imagen principal del colegio" style="width:35%; height:auto;">
        <p>Celebrando el futuro y la tradición.</p>
        <a href="#grado11" class="btn">Explorar</a>
    </section>
    <section id="grado11">
        <h2>Grupos de Grado 11</h2>
        <p>Información sobre los grupos de grado 11.</p>
        <div class="grupos">
            <a href="once_uno.php">11-1</a>
            <a href="#112">11-2</a>
            <a href="#113">11-3</a>
            <a href="#114">11-4</a>
            <a href="#115">11-5</a>
        </div>
    </section>
    <section id="especialidades">
        <h2>Especialidades</h2>
        <p>Conoce nuestras especialidades.</p>
        <div class="especialidades">
            <div>Sistemas</div>
            <div>Dibujo Técnico</div>
            <div>Diseño Industrial</div>
            <div>Electricidad</div>
            <div>Electrónica</div>
            <div>Metalistería</div>
            <div>Mecánica</div>
        </div>
    </section>
    <section id="destacados">
        <h2>Estudiantes Destacados</h2>
        <div class="destacados">
            <div class="estudiante">Estudiante 1</div>
            <div class="estudiante">Estudiante 2</div>
          
        </div>
    </section>
    <section id="bicentenario">
        <h2>Celebración del Bicentenario</h2>
        <p>Detalles sobre nuestra celebración.</p
