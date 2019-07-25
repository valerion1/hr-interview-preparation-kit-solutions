<?php

function sockMerchant($n, $ar) {
    $passedKeys = [];
    $pairCounter = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if($ar[$i] === $ar[$j] && !in_array($i, $passedKeys) && !in_array($j, $passedKeys)) {
                $pairCounter++;
                $passedKeys[] = $j;
                break;
            }
        }
        
        $passedKeys[] = $i;
    }

    return $pairCounter;
}

