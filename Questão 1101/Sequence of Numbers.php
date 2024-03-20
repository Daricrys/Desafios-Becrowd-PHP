<?php

while (true) {
    
    $input = readline();
    list($m, $n) = explode(" ", $input);

    
    if ($m <= 0 || $n <= 0) {
        break;
    }
 
    if ($m > $n) {
        $temp = $m;
        $m = $n;
        $n = $temp;
    }

    $total = 0;
    $sequence = "";
    for ($i = $m; $i <= $n; $i++) {
        $total += $i;
        $sequence .= $i . " ";
    }
    echo rtrim($sequence) . "Sum=" . $total . "\n";
}

?>
