<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nick = htmlspecialchars($_POST['nick']);
    $password = htmlspecialchars($_POST['password']);
    $gender = htmlspecialchars($_POST['gender']);

    // Simulación de validación (puedes agregar una base de datos aquí)
    if ($nick === "admin" && $password === "1234") {
        // Define el tema según el género
        if($gender === "male"){
            $themeClass = 'male-theme';
        } else {
            $themeClass = 'female-theme';
        }
        echo "
        <!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='styles.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css'>
    <title>Análisis Astral</title>
</head>
<body class='$themeClass'>
<div class='stars-container'>
    <!-- Mismo header que index.html -->
    <header class='header'>
        <div class='logo-container'>
            <a href='./index.html'>
                <img class='logo-img' src='public/logo.png' />
            </a>
        </div>
    </header>

    <div id = 'usuario-container'>
        <h1>¡Bienvenido, $nick!</h1>
        <p>Has iniciado sesión como " . ($gender === "female" ? "Mujer" : "Hombre") . ".</p>
    </div>
    <div id='separador'></div>
</div>


<!-- Mismo footer que index.html -->
<div id='footer' class='footer-container'>
    <footer>
        <div class='container'>
            <div class='wrapper'>
                <div class='footer-widget'>
                    <a href='#'>
                        <img
                                class='footer-logo'
                                src='public/logo-team.png'
                                alt='logo'
                                width='200'
                        />
                    </a>
                    <p class='desc'>
                        RIEAV es una empresa innovadora en el ámbito de la tecnología,
                        fundada por un equipo de visionarios: Rodrigo, Iván, Erika, Axel
                        y Valeria. Nuestro nombre refleja la unión de nuestras ideas y
                        esfuerzos, representados en las iniciales de cada fundador. En
                        RIEAV, nos especializamos en soluciones tecnológicas integrales,
                        combinando creatividad, precisión y pasión por transformar el
                        futuro digital. Nuestro logo simboliza nuestra misión de
                        conectar personas e ideas a través de la innovación.
                    </p>
                    <ul class='socials'>
                        <li>
                            <a href='#'> <i class='fa-brands fa-facebook'></i></a>
                        </li>
                        <li>
                            <a href='#'> <i class='fa-brands fa-instagram'></i></a>
                        </li>
                        <li>
                            <a href='#'> <i class='fa-brands fa-tiktok'></i></a>
                        </li>
                    </ul>
                </div>
                <div class='footer-widget'>
                    <h6>Enlaces Rápidos</h6>
                    <ul class='links'>
                        <li><a href='#'>inicio</a></li>
                        <li><a href='#'>acerca</a></li>
                        <li><a href='#'>servicio</a></li>
                        <li><a href='#'>testimonios</a></li>
                        <li><a href='#'>contacto</a></li>
                    </ul>
                </div>
                <div class='footer-widget'>
                    <h6>Servicios</h6>
                    <ul class='links'>
                        <li><a href='#'>diseño web</a></li>
                        <li><a href='#'>desarrollo web</a></li>
                        <li><a href='#'>optimización seo</a></li>
                        <li><a href='#'>blog</a></li>
                    </ul>
                </div>
                <div class='footer-widget'>
                    <h6>Ayuda &amp; Soporte</h6>
                    <ul class='links'>
                        <li><a href='#'>centro de soporte</a></li>
                        <li><a href='#'>chat en vivo</a></li>
                        <li><a href='#'>preguntas frecuentes</a></li>
                        <li><a href='#'>terminos &amp; condiciones</a></li>
                    </ul>
                </div>
            </div>
            <div class='copyright-wrapper'>
                <p>Derechos de autor &copy 2025 - 2030 RIEAV</p>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
        ";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
} else {
    echo "Método de acceso no permitido.";
}
?>