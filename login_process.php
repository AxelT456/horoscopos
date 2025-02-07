<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $gender = htmlspecialchars($_POST['gender']);

    // Simulación de validación (puedes agregar una base de datos aquí)
    if ($username === "admin" && $password === "1234") {
        // Define el tema según el género
        $themeClass = $gender === "female" ? "female-theme" : "male-theme";
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Bienvenido</title>
            <link rel='stylesheet' href='styles.css'>
        </head>
        <body class='$themeClass'>
            <h1>¡Bienvenido, $username!</h1>
            <p>Has iniciado sesión como " . ($gender === "female" ? "Mujer" : "Hombre") . ".</p>
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