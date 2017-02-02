<?php

error_reporting(0);


require 'scrabbleinterface.php';



class scrabbleScore implements scrabble{


	public $input;
	public $arr = array();
	public $mainInput;

	public function __construct($mainInput){

	  $this->mainInput = $mainInput;
	  $this->add();
	  $sum = $this->arr;
	  $final = array_sum($sum);
	  echo $final;

	}


	public function mainCal($in){

		$arr =	array("1" => array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T"),"2" => array("D","G"),
		"3" => array("B", "C", "M", "P"), "4" => array("F", "H", "V", "W", "Y"),
		"5"=>array("K"),"8" => array("J","X") , "10" => array("Z","Q"));

		foreach($arr as $key => $value){

			if(in_array($in, $value, true)){
			//	array_push($this->arr,$key);
				array_push($this->arr, $key);
					}
			}
	}


	public function add(){

		$input = $this->mainInput;
		$uppercase = strtoupper($input);
		$arr2 = str_split($uppercase);
		foreach($arr2 as $key=>$value){
		$this->mainCal($value);
		}
 	}
}


$score = new scrabbleScore("Cabbage");

































