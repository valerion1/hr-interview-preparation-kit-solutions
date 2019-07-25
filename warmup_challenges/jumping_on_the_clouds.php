<?php

function jumpingOnClouds($c) {
    $jumpCounter = 0;

    for($i = 0; $i < count($c);) {
        if(isset($c[$i + 2]) && $c[$i + 2] === 0) {
            $i = $i + 2;
            $jumpCounter++;
        } else if(isset($c[$i + 1]) && $c[$i + 1] === 0) {
            $i = $i + 1;
            $jumpCounter++;
        } else {
            break;
        }
    }

    return $jumpCounter;
}