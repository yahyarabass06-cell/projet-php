<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Table de multiplication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>
    <div class="menu-sites">

        <a href="http://localhost/mois/mois.php" class="box-link">
        Site mois
        </a>

        <a href="http://tableaux-de-multiplication/index.php" class="box-link">
        Site Tableaux de multiplication
        </a>

        <a href="http://leau/temperature.php" class="box-link">
        Site Température
        </a>

    </div>

<h1>Table de multiplication de 4</h1>

<div class="table-box">

<?php
$n = 4;

for($i = 0; $i < 11; $i++){
    $produit = $i * $n;
    echo "<p>$i x $n = $produit</p>";
}
?>

</div>

</body>
</html>