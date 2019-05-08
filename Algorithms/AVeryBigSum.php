<?php

// input
fscanf(STDIN, "%d\n", $ar_count);
fscanf(STDIN, "%[^\n]", $ar_temp);
$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

// solution
function aVeryBigSum($ar) {
    return array_sum($ar);
}

// output
$result = aVeryBigSum($ar);
fwrite(STDOUT, $result . PHP_EOL);