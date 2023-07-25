<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PHP y JSON</h1>
    <?php
    echo "<br>";
    echo "<h1>Ejemplo 1</h1>";
    // JSON significa Notación de objetos de JavaScript y es una sintaxis para almacenar e intercambiar datos.
    // La función json_encode() se usa para codificar un valor en formato JSON.
    // Este ejemplo muestra cómo codificar un array asociativa en un objeto JSON:
        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        echo json_encode($age);

    echo "<br>";
    echo "<h1>Ejemplo 2</h1>";
    // Este ejemplo muestra cómo codificar un array indexada en un array JSON:
        $cars = array("Volvo", "BMW", "Toyota");
        echo json_encode($cars);

    echo "<br>";
    echo "<h1>Ejemplo 3</h1>";
    // La función json_decode() se usa para decodificar un objeto JSON en un objeto PHP o un array asociativa.
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    var_dump(json_decode($jsonobj));

    echo "<br>";
    echo "<h1>Ejemplo 4</h1>";
    // La función json_decode() devuelve un objeto de forma predeterminada. La función json_decode() tiene un segundo parámetro y, cuando se establece en verdadero, los objetos JSON se decodifican en matrices asociativas.
    // Este ejemplo decodifica datos JSON en una matriz asociativa de PHP:
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        var_dump(json_decode($jsonobj, true));

    echo "<br>";
    echo "<h1>Ejemplo 5</h1>";
    // PHP - Acceso a los valores decodificados
    // Este ejemplo muestra cómo acceder a los valores de un objeto PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;

    echo "<br>";
    echo "<h1>Ejemplo 6</h1>";
    // Este ejemplo muestra cómo acceder a los valores de una matriz asociativa de PHP:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];

    echo "<br>";
    echo "<h1>Ejemplo 7</h1>";
    // Bucle a través de los valores
    // Este ejemplo muestra cómo recorrer los valores de un objeto PHP
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
     
    echo "<br>";
    echo "<h1>Ejemplo 8</h1>";
    // $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
    ?>
</body>
</html>