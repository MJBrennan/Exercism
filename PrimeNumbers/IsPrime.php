<?php

include "PrimeNumbers.php";

class IsPrime extends PrimeNumbers{

	public function enterPrime($num){

	echo $this->listPrime($num);

	}
}



	$isPrime = new IsPrime;
	print $isPrime->enterPrime(1010);

