<?php
// https://www.codingame.com/ide/puzzle/horse-racing-duals
fscanf(STDIN, "%d", $N);

$strenghts = [];

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $pi);
    $strenghts[$i] = $pi;
}

sort($strenghts);

$len = count($strenghts);
$closestStren = 100;

for ($i = 0; $i <= $len; $i++) {
    $diff = $strenghts[$i+1] - $strenghts[$i];
    if ($diff < $closestStren && $diff > 0) {
        $closestStren = $diff;
    }   
}

echo("$closestStren\n");
?>