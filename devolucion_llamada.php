<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Funciones de devolución de llamada de PHP</h1>
    <?php
    echo "<br>";
    echo "<h1>Ejemplo 1</h1>";
    // Para usar una función como función de devolución de llamada, pase una cadena que contenga el nombre de la función como argumento de otra función:
    function my_callback($item) {
        return strlen($item);
      }
      
      $strings = ["apple", "orange", "banana", "coconut"];
      $lengths = array_map("my_callback", $strings);
      print_r($lengths);

    echo "<br>";
    echo "<h1>Ejemplo 2</h1>";
    // Use una función anónima como devolución de llamada para array_map()la función de PHP:
    $strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
     
    echo "<br>";
    echo "<h1>Ejemplo 3</h1>";
    // Devoluciones de llamada en funciones definidas por el usuario
    function exclaim($str) {
        return $str . "! ";
      }
      
      function ask($str) {
        return $str . "? ";
      }
      
      function printFormatted($str, $format) {
        // Calling the $format callback function
        echo $format($str);
      }
      
      // Pass "exclaim" and "ask" as callback functions to printFormatted()
      printFormatted("Hello world", "exclaim");
      printFormatted("Hello world", "ask");
    ?>
</body>
</html>