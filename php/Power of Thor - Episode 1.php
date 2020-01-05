<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

// $lightX: the X position of the light of power
// $lightY: the Y position of the light of power
// $initialTx: Thor's starting X position
// $initialTy: Thor's starting Y position
fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTX, $initialTY);

// game loop
while (TRUE)
{
    // $remainingTurns: The remaining amount of turns Thor can move. Do not remove this line.
    fscanf(STDIN, "%d", $remainingTurns);

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    $goToY = '';
    $goToX = '';
    if($initialTX != $lightX){
        if($initialTX < $lightX){
            $initialTX++;
            $goToX = "E";
        }else{
            $initialTX--;
            $goToX = "W";
        }
    }
    if($initialTY != $lightY){
        if($initialTY < $lightY){
            $initialTY++;
            $goToY = "S";
        }else{
            $initialTY--;
            $goToY = "N";
        }
    }

    // A single line providing the move to be made: N NE E SE S SW W or NW
    echo("$goToY$goToX\n");
}
?>

############
##---or---##
############

<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

fscanf(STDIN, "%d %d %d %d",
    $lightX, // the X position of the light of power
    $lightY, // the Y position of the light of power
    $initialTX, // Thor's starting X position
    $initialTY // Thor's starting Y position
);

$dx = $lightX - $initialTX;
$dy = $lightY - $initialTY;

while (TRUE)
{
    $dir = '';
    if ($dy < 0) { $dy++; $dir .= "N"; }
    if ($dy > 0) { $dy--; $dir .= "S"; }
    if ($dx < 0) { $dx++; $dir .= "W"; }
    if ($dx > 0) { $dx--; $dir .= "E"; }
    echo($dir."\n");
}
?>

############
##---or---##
############

<?php
fscanf(STDIN, "%d %d %d %d",$lx,$ly,$tx,$ty);

while (TRUE){
    $remainingTurns = fgets(STDIN);
    if($ly>$ty){echo("S");$ty++;}
    if($ly<$ty){echo("N");$ty--;}
    if($lx>$tx){echo("E");$tx++;}
    if($lx<$tx){echo("W");$tx--;}
    echo("\n");}
    ?>
