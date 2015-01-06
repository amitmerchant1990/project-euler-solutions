<?php
/**
* The prime factors of 13195 are 5, 7, 13 and 29.
*
* What is the largest prime factor of the number 600851475143 ?
*/

function maxfactor($n){

	$factors = array();
	$d = 2;

	while($n > 1){
		while($n%$d==0){
			$factors[] = $n;
			$n = $n/$d;
		}
	}

	return $factors;	
}

echo max(maxfactor($n));

?>