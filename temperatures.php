<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $n; $i++)
{
    $t = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
}

error_log(var_export($inputs[0], true));

if (count($inputs) === 1 && !is_numeric($inputs[0])) {
    $result = 0;
} else {
    asort($inputs);
    $positives = [];
    $negatives = [];
    foreach ($inputs as $input) {
        if ($input > 0) {
            $positives[] = $input;
        } else {
            $negatives[] = $input;
        }
    }
    $result = $positives[0] > end($negatives) ? $positives[0] : end($negatives);
}

// Write an answer using echo(). DON'T FORGET THE TRAILING \n
// To debug: error_log(var_export($var, true)); (equivalent to var_dump)

echo("$result\n");
?>