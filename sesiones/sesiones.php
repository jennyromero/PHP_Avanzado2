<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
   <h1>Sesiones</h1>
   <?php 
   //Cuando trabaja con una aplicación, la abre, hace algunos cambios y luego la cierra. Esto es muy parecido a una sesión. 
   //Las variables de sesión resuelven este problema al almacenar información del usuario para usarla en varias páginas (por ejemplo, nombre de usuario, color favorito, etc.). De forma predeterminada, las variables de sesión duran hasta que el usuario cierra el navegador.
   echo "<h1>Ejemplo 1</h1><br>";
   // Iniciar una sesión de PHP
   // Se inicia una sesión con la session_start()función.
   // Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

echo "<h1>Ejemplo 2</h1><br>";
   // Modificar una variable de sesión de PHP
   // Para cambiar una variable de sesión, simplemente sobrescríbala:
   session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);

echo "<h1>Ejemplo 3</h1><br>";
  // echo "<h1>Ejemplo 2</h1><br>";
  // Para eliminar todas las variables de sesión globales y destruir la sesión, use session_unset() y session_destroy():

   ?> 
</body>
</html>