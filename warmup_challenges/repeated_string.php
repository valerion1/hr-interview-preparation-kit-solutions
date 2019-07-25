<?php

function repeatedString($s, $n) {
	$symbolsCountInPattern = substr_count($s, 'a');

	$a = intval($n / strlen($s));
	$x = $a * $symbolsCountInPattern;

	$y = 0;
	$mod = $n % strlen($s);

	if($mod !== 0) {
		$subAdditional = substr($s, 0, $mod);
		$symbolsCountInAdditional = substr_count($subAdditional, 'a');
	}

	return $x + $symbolsCountInAdditional;
}