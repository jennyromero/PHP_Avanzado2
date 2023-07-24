<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Filtros PHP</h1>
    <?php
    echo "<br>";
    echo "<h1>Ejemplo 1</h1>";
    // Validar un entero dentro de un rango
    // El siguiente ejemplo usa la filter_var()función para verificar si una variable es de tipo INT y está entre 1 y 200:
        $int = 122;
        $min = 1;
        $max = 200;
        
        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
          echo("Variable value is not within the legal range");
        } else {
          echo("Variable value is within the legal range");
        }

        echo "<br>";
        echo "<h1>Ejemplo 2</h1>";
        // Validar dirección IPv6
        // El siguiente ejemplo usa la filter_var()función para verificar si la variable $ip es una dirección IPv6 válida:
            $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

            if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
              echo("$ip is a valid IPv6 address");
            } else {
              echo("$ip is not a valid IPv6 address");
            }

        echo "<br>";
        echo "<h1>Ejemplo 3</h1>";
        // Validar URL: debe contener QueryString
        // El siguiente ejemplo usa la filter_var()función para verificar si la variable $url es una URL con una cadena de consulta:
            $url = "https://www.w3schools.com";

            if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
              echo("$url is a valid URL with a query string");
            } else {
              echo("$url is not a valid URL with a query string");
            }

        echo "<br>";
        echo "<h1>Ejemplo 4</h1>";
        // 
    ?>
</body>
</html>