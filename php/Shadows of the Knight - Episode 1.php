<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $W: width of the building.
// $H: height of the building.
fscanf(STDIN, "%d %d", $W, $H);
// $N: maximum number of turns before game over.
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d %d", $X0, $Y0);

$left = 0;
$up    = 0;
$right = $W - 1;
$down  = $H - 1;



// game loop
while (TRUE)
{
    // $bombDir: the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)
    fscanf(STDIN, "%s", $bombDir);
    //var_dump(strpos($bombDir, "U")!==false);

    if(strpos($bombDir, "U")!==false) {
        $down = $Y0 - 1;
    }else if (strpos($bombDir, "D")!==false) {
        $up = $Y0 + 1;
    }

    if(strpos($bombDir, "L")!==false) {
        $right = $X0 - 1;
    } else if (strpos($bombDir, "R")!==false) {
        $left = $X0 + 1;
    }

    $X0 = $left + ceil(($right  - $left)/2);
    $Y0 = $up + ceil(($down  - $up)/2);
    # the location of the next window Batman should jump to.


    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));


    // the location of the next window Batman should jump to.
    echo("$X0 $Y0\n");
}
?>


############
##---or---##
############

<?php
fscanf(STDIN, "%d %d", $W, $H);
fgets(STDIN);
fscanf(STDIN, "%d %d", $x, $y);

$left  = 0;
$right = $W - 1;
$up    = 0;
$down  = $H - 1;

while ("Ponies")
{
    $dir = fgets(STDIN);

    if (strstr($dir, 'U') !== false) $down  = $y - 1;
    if (strstr($dir, 'D') !== false) $up    = $y + 1;
    if (strstr($dir, 'L') !== false) $right = $x - 1;
    if (strstr($dir, 'R') !== false) $left  = $x + 1;

    $x = ($left + $right) >> 1;
    $y = ($up   + $down ) >> 1;

    echo "$x $y\n";
}
?>
