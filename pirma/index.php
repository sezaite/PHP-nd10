<?php
define ('DIR', __DIR__.'/');

require DIR.'Pinigine.php';

$pinigine = new Pinigine();
$pinigine->ideti(444);
$pinigine->skaiciuoti();

//ketvirta uzduotis:
$pinigine -> getPopieriniai();
$pinigine -> getGeleziniai();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pirma uzduotis</title>
</head>
<body>
    
</body>
</html>