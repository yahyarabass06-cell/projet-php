<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Température de l'eau</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="menu-sites">

<a href="http://multiplication11/" class="box-link">
Site Multiplication
</a>

<a href="http://tableaux-de-multiplication/" class="box-link">
Site Tableaux de multiplication
</a>

<a href="http://localhost/mois/mois.php" class="box-link">
Site Mois
</a>

</div>

<h1>Etat de l'eau selon la température</h1>

<?php

$temperature = 10;

if ($temperature < 0) {
    echo "<p class='result glace'>glace</p>";
}
elseif ($temperature >= 0 && $temperature < 25) {
    echo "<p class='result tiede'>tiède</p>";
}
elseif ($temperature >= 25 && $temperature < 50) {
    echo "<p class='result chaude'>chaude</p>";
}
elseif ($temperature >= 50 && $temperature < 100) {
    echo "<p class='result brulante'>brûlante</p>";
}
else {
    echo "<p class='result vapeur'>vapeur</p>";
}

?>

</body>
</html>