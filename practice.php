<?php
$i = 1;
while ($i <=30) {
    if  (($i % 2) == 0) {
        echo $i . "<br>";
    }
    $i++;
}

echo "<br>";

$sum = 0;
$i = 1;
$j = 1;
do {
    $sum = $sum + $i / $j++;
    $i += 3;
    var_dump($sum);
} while ($sum < 10);
--$j;
echo "Quantity of numbers: $j";
