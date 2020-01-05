<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// $n: the number of temperatures to analyse
fscanf(STDIN, "%d",
    $n // the number of temperatures to analyse
);
$inputs = fgets(STDIN);
$inputs = explode(" ",$inputs);
$value = array();
for ($i = 0; $i < $n; $i++)
{
    $value[$i] = intval($inputs[$i]); // a temperature expressed as an integer ranging from -273 to 5526
}
function returnSubValue(array $value): int {
    rsort($value);
    if(!empty($value)){
        for($i = 0; $i < count($value); $i++){
            if($value[$i] < 0){
                return $value[$i];
            }
        }
        return $value = $value[count($value)-1];
    }else
        return 0;
}
function returnSupValue(array $value): int {
    sort($value);
    if(!empty($value)){
        for($i = 0; $i < count($value); $i++){
            if($value[$i] > 0){
                return $value[$i];
            }
        }
        return $value = $value[0];
    }else
        return 0;
}
$sup = returnSupValue($value);
$sub = returnSubValue($value);
if(abs($sup) > abs($sub)){
    $result = $sub;
}elseif(abs($sup) < abs($sub)){
    $result = $sup;
}else{
    $result = $sup;
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));

echo($result);
?>

############
##---or---##
############

<?php
//Why making things complicated? This is an easy puzzle!

fgets(STDIN);
$list = explode(' ',fgets(STDIN));

for ($temp = 1; $temp <= 5526; $temp++)
{
    if (in_array($temp, $list)) exit ("$temp");
    if (in_array(-$temp, $list)) exit ("-$temp");
}
exit("0");
?>
