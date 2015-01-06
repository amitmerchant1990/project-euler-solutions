<?php
/*
* A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
* 
* Find the largest palindrome made from the product of two 3-digit numbers.
*/

function maxpalindrome(){

	$palindrome = array();

	for($i=100; $i<=999; $i++){
		for($j=999; $j>=100; $j--){
			$prod = (string)$i*$j;

			if($prod == strrev($prod)){
				$palindrome[] = (int)$prod;
			}
		}

	}
	return $palindrome;
}

echo "Largest palindrome made from the product of two 3-digit numbers : ".max(maxpalindrome());

?>