<?php
/*
* 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
*
* What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
*/

for($i=1; $i<=1000000; $i++){
	$isDivisable = true;

	for($j=1; $j<=20; $j++){
		if($i%$j!=0){
			$isDivisable = false;
			break;
		}
	}

	if($isDivisable == true){
		echo $i;
		break;
	}
}

?>