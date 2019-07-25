<?php

function hourglassSum($arr) {
	$hourglassesSum = [];

	for($i = 1; $i < count($arr) - 1; $i++) {
		for($j = 1; $j < count($arr[0]) - 1; $j++) {
			$hourglassesSum[] = $arr[$i][$j] + 
				$arr[$i - 1][$j - 1] + $arr[$i - 1][$j] + $arr[$i - 1][$j + 1] +
				$arr[$i + 1][$j - 1] + $arr[$i + 1][$j] + $arr[$i + 1][$j + 1];
		}
	}

	return arrayMax($hourglassesSum);
}

function arrayMax($hourglassesSum) {
	$max = $hourglassesSum[0];

	foreach ($hourglassesSum as $value) {
		if($value > $max) {
			$max = $value;
		}
	}

	return $max;
}


echo hourglassSum([
	[1,1,1,0,0,0],
	[0,1,0,0,0,0],
	[1,1,1,0,0,0],
	[0,0,2,4,4,0],
	[0,0,0,2,0,0],
	[0,0,1,2,4,0],
]);

