<?php
	
	function Pal($input){
		
		////make String 1 case insesnitive
		
		$comp	=	strtolower($input);
		
		//Reverse String
		
		$mainOP  = strrev($comp);
		
		//make String 2 case insesnitive
	
	$noMoreCase = strtolower($mainOP);
	
	
		//Compare Strings
		
		if(  $comp != $noMoreCase  ){
			echo 'This word is not a Palindrome';	
		} else{
			echo 'This word is a Palindrome';
		}
	}
	
	Pal($_POST['name']);
	
	
	
	
?>