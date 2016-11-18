<?php


		error_reporting(0);
		

		class Luhn{

			public $data = array();

			public $input;

				public function __construct($input){

					$this-> Calculate($this->input = $input);

				}

				public function Calculate(){


						$arr =  str_split($this->input);

						for($i=0; $i<= count($arr) + 1;$i++){

						if(($i % 2) === 0){


						$add = $arr[$i] * 2;

						if($add >= 10){

						$n = $add - 9;

						array_push($this->data, $n);

						}else{

						//echo $arr[$i]."<br>";

						array_push($this->data, $add);

							}

						}else{

						array_push($this->data, $arr[$i]);

						}

					}

				$sum =	array_sum($this->data);

				if (($sum % 10) === 0){

					echo("This number conforms to the Luhn Standard");
				}


				else{

					echo("This number does not conform to the Luhn Standard");
				}

					echo $sum;

				//	var_dump($this->data);
			}

		}


			$out = new Luhn("1222");

			echo $out."<br>";
			