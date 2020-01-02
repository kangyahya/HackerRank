<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$a = fgets($_fp);
$a = explode(' ',$a);
array_walk($a, 'intval');
sort($a); $min = 0; $max = 0;
for ($i = 0; $i < 4; $i++) $min += $a[$i];
for ($i = count($a)-1; $i > count($a)-5; $i--) $max += $a[$i];
echo $min." ".$max."\n";
?>
