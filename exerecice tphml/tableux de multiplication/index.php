<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableaux de multiplication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu-sites">

        <a href="http://localhost/mois/mois.php" class="box-link">
        Site mois
        </a>

        <a href="http://multiplication11/index.php" class="box-link">
        Site multiplication
        </a>

        <a href="http://leau/temperature.php" class="box-link">
        Site Température
        </a>

    </div>
<h1>Tableaux de multiplication</h1>

<?php
echo "<table><tr>";

for ($i = 0; $i <= 9; $i++) {

    echo "<td>";
    echo "<table class='table-multi'>";
    echo "<tr><th colspan='3'>Table de $i</th></tr>";

    for ($j = 0; $j <= 9; $j++) {
        echo "<tr>";
        echo "<td>$i x $j</td>";
        echo "<td>=</td>";
        echo "<td>" . ($i * $j) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</td>";
}

echo "</tr></table>";
?>

</body>
</html>