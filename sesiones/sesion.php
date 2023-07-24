<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sesiones</title>
</head>
<body>
<?php
echo "<h1>Ejemplo 2</h1><br>";
  // Obtener valores de variables de sesión de PHP
  // Desde esta página, accederemos a la información de la sesión que configuramos en la primera página
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?> 
</body>
</html>