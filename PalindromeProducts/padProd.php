<?php

	class PalProd{

		public function __construct(){

			$this->findPal(100,999);
		}

		public function findPal($startRange,$endRange){

			$arr = array();

			for($range=$endRange ;$range>=$startRange; $range--){

				for($range2=$startRange;$range2<=$endRange;$range2++){

				$input1 = $range;

				$input2 = $range2;

				$sum = $input1 * $input2;

				$org= str_split($sum);

				$rev= array_reverse($org);

				if($rev === $org){

					array_push($arr, $sum);

				}

			}

		}

		if(empty($arr)){

			echo "There is no Palindrome Product in This Range!";

		}else{

		$largestProd = min($arr);


			echo $largestProd;

			}

		}	
	}

	$pal = new PalProd;

	echo $pal;