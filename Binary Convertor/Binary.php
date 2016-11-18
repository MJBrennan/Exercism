<?php

	
error_reporting(0);

class BinaryConvertor{


	public $input;

	public $theArr = array();

	public $inputArr = array();


	public function __construct($input){


		$this->input = $input;

		$this->Setup();

		
		$this->Convert();

	}


	public function Setup(){

	$arr =	str_split($this->input);

	$this->inputArr = $arr;


		$n = 1;

		$one = 1;

		array_push($this->theArr, $one);

		 $one."<br>";

	for($i=0; $i <= count($arr) - 2 ; $i++){

		 $m =  2 * $n."<br>";

		array_push($this->theArr, $m);

		$n = $m;

		}

	$rev =	array_reverse($this->theArr);

	$this->theArr = $rev;

		
	}


	public function Convert(){

		$input = $this->inputArr;

		$values = $this->theArr;


	$array1 = array();

	$var = array_combine($values,$input);


 	foreach($var as $key => $values){

 		if($values != 0){

 	//	echo $key."<br>";

 		array_push($array1, $key);

 		}

 	}

 	$sum = array_sum($array1);

 	print ($sum);


	}

}


$mainclass = new BinaryConvertor("1101");

print $mainclass;



















?>