<?php
define ('DIR', __DIR__.'/');

require DIR.'Stikline.php';


$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);
$stiklines = [$stikline1, $stikline2, $stikline3];

usort($stiklines, function ($a, $b) { return ($a <=> $b); });

$stiklines[2]->ipilti($stiklines[2]->getTuris());
$stiklines[1]->ipilti($stiklines[2]->ispilti());
$stiklines[0]->ipilti($stiklines[1]->ispilti());

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