<?php
define ('DIR', __DIR__.'/');

require DIR.'Grybas.php';
require DIR.'Krepsys.php';

$krepsys = new Krepsys;

while ($krepsys->svoris < 500) {
    $grybas = new Grybas();
    if(($grybas->getValgomas() == true) && ($grybas->getSukirmijes() == false)){
        $krepsys->prideti($grybas->getGryboSvoris());
    }
}

var_dump($grybas);

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