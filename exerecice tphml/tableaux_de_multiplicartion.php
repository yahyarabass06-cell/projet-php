<?php
echo "<table border='1'>";

for ($i = 0; $i <= 9; $i++) {
    echo "<tr>";
    
    for ($j = 0; $j <= 9; $j++) {
        $result = $i * $j;
        echo "<td>$result</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>