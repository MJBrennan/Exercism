<?php

	class PrimeNumbers{

		public function listPrime($num){

			$global = array();

	   for($count=1;$count<=$num;$count++){	

		    $arr = array();

			$final = array();

			$sum = $count;

 			for($n=1;$n<=$sum;$n++){

		if(($sum % $n) === 0 ){

			array_push($arr, $n);

		        }
	        }

	       if(count($arr) == 2 ){

	       	array_push($final, $sum);

	      foreach ($final as $value) {

	       		array_push($global, $value);

	      		}
	       }

	       reset($arr);
	       reset($final);

	      } 

	      if(in_array($num, $global)){
	      	return "Prime";
	      }else{
	      	return "Not Prime";
	      }
		}
	}
