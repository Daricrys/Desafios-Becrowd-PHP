<?php

$inputs = explode(" ", readline());
$a = min($inputs);
$b = max($inputs);


if ($a > $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

for ($i = $a + 1; $i < $b; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
>
