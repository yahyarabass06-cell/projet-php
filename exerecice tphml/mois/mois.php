<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre de jours du mois</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="menu-sites">

        <a href="http://tableaux-de-multiplication/index.php" class="box-link">
        Site Tableaux de multiplication
        </a>
        <a href="http://multiplication11/index.php" class="box-link">
        Site multiplication
        </a>

        <a href="http://leau/temperature.php" class="box-link">
        Site Température
        </a>

    </div>

    <h1>Nombre de jours du mois</h1>

    <div class="box-result">

        <?php
        $mois = 12;
        $annee = 2000;

        echo "<p><strong>Mois :</strong> $mois</p>";
        echo "<p><strong>Année :</strong> $annee</p>";

        switch ($mois) {
            case 4:
            case 6:
            case 9:
            case 11:
                echo "<div class='result bleu'>Ce mois contient 30 jours</div>";
                break;

            case 2:
                if ($annee % 4 == 0) {
                    echo "<div class='result vert'>Ce mois contient 29 jours</div>";
                } else {
                    echo "<div class='result orange'>Ce mois contient 28 jours</div>";
                }
                break;

            default:
                echo "<div class='result rouge'>Ce mois contient 31 jours</div>";
        }
        ?>

    </div>

</body>
</html>