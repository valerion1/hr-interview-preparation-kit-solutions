<?php

/**
 * UDDDUDUU
 * 
 * 0
 * U - +1 = 1
 * D - -1 = 0,	 newResult < prevResult and newResult === initParam ~ MOUNTAIN
 * D - -1 = -1
 * D - -1 = -2
 * U - +1 = -1
 * D - -1 = -2
 * U - +1 = -1
 * U - +1 = 0,	 newResult > prevResult and newResult === initParam ~ VALLEY
 * 
**/

function countingValleys($n, $s) {
     $currentLevel = 0;
     $valleyCounter = 0;

    for($i = 0; $i < $n; $i++) {
        if($s[$i] === 'U') {
            $currentLevel++;
            
            if($currentLevel === 0) {
                $valleyCounter++;
            }

        } else if($s[$i] === 'D') {
            $currentLevel--;
        }
    }

    return $valleyCounter;
}
