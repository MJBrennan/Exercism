<?php

	class Substring{

		public $arr = array();

		public function __construct(){

			$this->intTest();

		}

	
		public function intTest(){

			$compare = "49142";

			$int2 = 49142;

		for($i=0; $i <= $int2 ; $i++){

			if (strlen($i) === 4){

			$mint = "$i";

			if (stripos($compare, $mint) !== false) {

    			array_push($this->arr, $i);

			}
		}

	}

	foreach(   $this->arr as $key=>$value){

		echo $value."<br>";

	}

		}

	}	



	$substring = new Substring();

	echo $substring;


