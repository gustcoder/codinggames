<?php
/**
 * https://www.codingame.com/ide/puzzle/power-of-thor-episode-1
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

// $lightX: the X position of the light of power
// $lightY: the Y position of the light of power
// $initialTx: Thor's starting X position
// $initialTy: Thor's starting Y position
fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTx, $initialTy);

// game loop
while (TRUE)
{
    // $remainingTurns: The remaining amount of turns Thor can move. Do not remove this line.
    fscanf(STDIN, "%d", $remainingTurns);

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)

    if (($initialTx < $lightX) && ($initialTy < $lightY)) {
        $initialTx += 1; 
        $initialTy += 1; 
        echo("SE\n");
    }

    if ($initialTx < $lightX) {
        echo("E\n");    
    }

    if ($initialTx > $lightX) {
        echo("W\n");    
    }

    if (($initialTx > $lightX) && ($initialTy < $lightY)) {
        $initialTy += 1; 
        echo("SW\n");    
    }

    if ($initialTy > $lightY) {
        echo("N\n");    
    }
}
?>