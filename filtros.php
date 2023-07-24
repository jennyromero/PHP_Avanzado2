<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
</head>
<body>
<h1>Filtros PHP</h1>
    <?php
    // Los filtros PHP se utilizan para validar y desinfectar la entrada externa.
    // La filter_list()función se puede usar para enumerar lo que ofrece la extensión de filtro PHP:
    echo "<br>";
    echo "<h1>Ejemplo 1</h1>";
    // Desinfectar una cuerda
    // El siguiente ejemplo usa la filter_var()función para eliminar todas las etiquetas HTML de una cadena:
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;

    echo "<h1>Ejemplo 2</h1>";
    // Validar un entero
    // El siguiente ejemplo usa la filter_var()función para verificar si la variable $int es un número entero. Si $int es un número entero, la salida del siguiente código será: "El número entero es válido". Si $int no es un número entero, la salida será: "El número entero no es válido":
        $int = 100;

        if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
          echo("Integer is valid");
        } else {
          echo("Integer is not valid");
        }

    echo "<h1>Ejemplo 3</h1>";
    // Validar una dirección IP
    // El siguiente ejemplo usa la filter_var()función para verificar si la variable $ip es una dirección IP válida:
        $ip = "127.0.0.1";
        
        if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
          echo("$ip is a valid IP address");
        } else {
          echo("$ip is not a valid IP address");
        }

    echo "<h1>Ejemplo 4</h1>";
    // Desinfectar y validar una dirección de correo electrónico
    // El siguiente ejemplo usa la filter_var()función para eliminar primero todos los caracteres ilegales de la variable $email, luego verifica si es una dirección de correo electrónico válida:
        $email = "john.doe@example.com";

        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          echo("$email is a valid email address");
        } else {
          echo("$email is not a valid email address");
        }

    echo "<h1>Ejemplo 5</h1>";
    // Desinfectar y validar una URL
    // El siguiente ejemplo usa la filter_var()función para eliminar primero todos los caracteres ilegales de una URL y luego verificar si $url es una URL válida:
        $url = "https://www.w3schools.com";

        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        // Validate url
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
          echo("$url is a valid URL");
        } else {
          echo("$url is not a valid URL");
        }
    ?>
</body>
</html>