<?php

$temperature = 10;

if ($temperature < 0) {
    echo "glace";
} 
elseif ($temperature >= 0 && $temperature < 25) {
    echo "tiede";
} 
elseif ($temperature >= 25 && $temperature < 50) {
    echo "chaude";
} 
elseif ($temperature >= 50 && $temperature < 100) {
    echo "brulant";
} 
else {
    echo "vapeur";
}

?>