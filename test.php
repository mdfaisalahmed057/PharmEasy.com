<?php
$colors = array("red", "green", "blue", "yellow");
$i = 0;
foreach ($colors as $value) {

    if ($value == "blue") {
        unset($colors[$i]);
        $colors = array_values($colors);
        continue;
    }
    echo "$value <br>";
    $i++;
}
echo 1, 2;
