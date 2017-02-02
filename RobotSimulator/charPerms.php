<?php


	function charPerms(){
		
		$word = "m";
		$char = strlen($word);
		$fac = 1;
		$arr= array();

		//find Factorial
		
		for($i=$char;$i >= 1 ; $i--){
			
			$fac = $fac * $i;
		}
		
	// go through all possible combinations
	
		for(  $i=0; $i<=10000;$i++){
			
			$outPut=str_shuffle($word);
			//echo ("$outPut<br>");
			
			if(in_array($outPut,$arr) != true){
				array_push($arr,$outPut);
			}          
		}
		
		$result = array_unique($arr);
		
		//Print Out Every Combination
		
		foreach($result as $arrs){
			echo "$arrs<br>";
		}
		
		
		
		
		
		
		
	
		


	}
	
	charPerms();


















?>