<?php

	function numOfAnag(){
		
		
		
		$property = false;
		
		
		$mainString = "seinfeld";
		
		do{
			$outPut = str_shuffle($mainString);
			if($outPut !=  array_key_exists($outPut, $emptyArray)){
				
				array_push($emptyArray,$outPut);
				
			}else{
				
				$property = true;
				
			}
		}while($property = false);
		
		
		
		foreach($emptyArray   as   $newArray){
			echo "$newArray<br>";
		}
		
		
		
		
	}
	
	numOfAnag();














?>