<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>Excepciones de PHP</h1>
    <?php
    echo "<br>";
    echo "<h1>Ejemplo 1</h1>";
    // Una excepción es un objeto que describe un error o un comportamiento inesperado de un script PHP.
    // La throwinstrucción permite que una función o método definido por el usuario genere una excepción. Cuando se lanza una excepción, el código que le sigue no se ejecutará.
    // Si no se detecta una excepción, se producirá un error fatal con un mensaje de "Excepción no detectada".
    function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      echo divide(5, 0);

    echo "<br>";
    echo "<h1>Ejemplo 2</h1>";
    // Mostrar un mensaje cuando se lanza una excepción:
    function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo divide(5, 0);
      } catch(Exception $e) {
        echo "Unable to divide.";
      }

    
    echo "<br>";
    echo "<h1>Ejemplo 3</h1>";
    // Muestra un mensaje cuando se lanza una excepción y luego indica que el proceso ha finalizado:
    function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo divide(5, 0);
      } catch(Exception $e) {
        echo "Unable to divide. ";
      } finally {
        echo "Process complete.";
      }

    echo "<br>";
    echo "<h1>Ejemplo 4</h1>";
    // Muestra una cadena incluso si no se detectó una excepción:
    function divide($dividend, $divisor) {
        if($divisor == 0) {
          throw new Exception("Division by zero");
        }
        return $dividend / $divisor;
      }
      
      try {
        echo divide(5, 0);
      } finally {
        echo "Process complete.";
      }

    echo "<br>";
    echo "<h1>Ejemplo 5</h1>";
    // Información de salida sobre una excepción que se lanzó:
        function divide($dividend, $divisor) {
            if($divisor == 0) {
              throw new Exception("Division by zero", 1);
            }
            return $dividend / $divisor;
          }
          
          try {
            echo divide(5, 0);
          } catch(Exception $ex) {
            $code = $ex->getCode();
            $message = $ex->getMessage();
            $file = $ex->getFile();
            $line = $ex->getLine();
            echo "Exception thrown in $file on line $line: [Code $code]
            $message";
          }
    ?>
</body>
</html>