<?php
$nilai = isset($GET['nilai']) ? ($_GET['nilai']) : 10;

$nilai = max(1, min($nilai, 10));

for ($i = 1; $i <= $nilai; $i++){
    for ($j = 1; $j <= $nilai - $i + 1; $j++){
        echo $j. ' ';
    }
    echo"<br>";
}
?>