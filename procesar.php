<?php
// Sanitizar los datos del formulario
function sanitize($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Resultado del Análisis</title>
</head>
<body>
<div class="stars-container">
    <!-- Mismo header que index.html -->
    <header class="header">
        <div class="logo-container">
            <a href="/">
                <img class="logo-img" src="public/logo.png" />
            </a>
        </div>
        <nav>
            <ul class="nav-list">
                <li><a class="nav-list-item" href="#horoscopos">Horóscopos</a></li>
                <li><a class="nav-list-item" href="#sobre-nosotros">Sobre nosotros</a></li>
                <li><a class="nav-list-item" href="#footer">Contáctanos</a></li>
            </ul>
        </nav>
    </header>

    <section class="section">
        <h2 class="title-section">Resultado de tu Análisis Astral</h2>

        <div class="resultado-container">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo '<div class="resultado-item">';
                echo '<h3 class="subtitle-form">📅 Tus Datos</h3>';
                echo '<p>Fecha de nacimiento: ' . sanitize($_POST['fecha_nacimiento']) . '</p>';
                echo '<p>Hora de nacimiento: ' . sanitize($_POST['hora_nacimiento']) . '</p>';

                if (!empty($_POST['fecha_pareja'])) {
                    echo '<h3 class="subtitle-form">💑 Datos de tu Pareja</h3>';
                    echo '<p>Fecha nacimiento pareja: ' . sanitize($_POST['fecha_pareja']) . '</p>';
                    echo '<p>Hora nacimiento pareja: ' . sanitize($_POST['hora_pareja']) . '</p>';
                }

                echo '<h3 class="subtitle-form">🏥 Salud</h3>';
                echo '<p>' . nl2br(sanitize($_POST['enfermedades'])) . '</p>';

                echo '<h3 class="subtitle-form">💵 Situación Económica</h3>';
                echo '<p>' . ucfirst(sanitize($_POST['finanzas'])) . '</p>';

                echo '<h3 class="subtitle-form">💼 Situación Laboral</h3>';
                echo '<p>' . ucfirst(sanitize($_POST['laboral'])) . '</p>';
                echo '</div>';
            }
            ?>
        </div>

        <a href="formulario.html" class="btn-astral">Nuevo Análisis</a>

        <!-- Botón para regresar al menú principal -->
        <div class="regresar-container">
            <a href="index.html" class="btn-regresar">
                <i class="fas fa-arrow-left"></i> Regresar a menú principal
            </a>
        </div>
    </section>
</div>

<!-- Mismo footer que index.html -->
<div id="footer" class="footer-container">
    <footer>
        <div class="container">
            <div class="wrapper">
                <div class="footer-widget">
                    <a href="#">
                        <img
                            class="footer-logo"
                            src="public/logo-team.png"
                            alt="logo"
                            width="200"
                        />
                    </a>
                    <p class="desc">
                        RIEAV es una empresa innovadora en el ámbito de la tecnología,
                        fundada por un equipo de visionarios: Rodrigo, Iván, Erika, Axel
                        y Valeria. Nuestro nombre refleja la unión de nuestras ideas y
                        esfuerzos, representados en las iniciales de cada fundador. En
                        RIEAV, nos especializamos en soluciones tecnológicas integrales,
                        combinando creatividad, precisión y pasión por transformar el
                        futuro digital. Nuestro logo simboliza nuestra misión de
                        conectar personas e ideas a través de la innovación.
                    </p>
                    <ul class="socials">
                        <li>
                            <a href="#"> <i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"> <i class="fa-brands fa-tiktok"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h6>Enlaces Rápidos</h6>
                    <ul class="links">
                        <li><a href="#">inicio</a></li>
                        <li><a href="#">acerca</a></li>
                        <li><a href="#">servicio</a></li>
                        <li><a href="#">testimonios</a></li>
                        <li><a href="#">contacto</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h6>Servicios</h6>
                    <ul class="links">
                        <li><a href="#">diseño web</a></li>
                        <li><a href="#">desarrollo web</a></li>
                        <li><a href="#">optimización seo</a></li>
                        <li><a href="#">blog</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h6>Ayuda &amp; Soporte</h6>
                    <ul class="links">
                        <li><a href="#">centro de soporte</a></li>
                        <li><a href="#">chat en vivo</a></li>
                        <li><a href="#">preguntas frecuentes</a></li>
                        <li><a href="#">terminos &amp; condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright-wrapper">
                <p>Derechos de autor &copy 2025 - 2030 RIEAV</p>
            </div>
        </div>
    </footer>
</div>
</body>
</html>