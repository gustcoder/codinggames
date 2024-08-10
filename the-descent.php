<?php
/**
 * https://www.codingame.com/ide/puzzle/the-descent
 * The while loop represents the game.
 * Each iteration represents a turn of the game
 * where you are given inputs (the heights of the mountains)
 * and where you have to print an output (the index of the mountain to fire on)
 * The inputs you are given are automatically updated according to your last actions.
 **/

// game loop
while (TRUE)
{
    $mountains = [];
    for ($i = 0; $i < 8; $i++)
    {
        // $mountainH: represents the height of one mountain.
        fscanf(STDIN, "%d", $mountainH);
        if ($mountainH > 0) {
            $mountains[$i] = $mountainH;
        }
    }

    arsort($mountains);
    $mountainLen = count($mountains);
    $key = array_key_first($mountains);

    // error_log(var_export($mountainHeights, true));

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    //echo("0\n"); // The index of the mountain to fire on.

    echo("$key\n");
}
?>