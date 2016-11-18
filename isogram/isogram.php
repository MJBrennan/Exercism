<?php

/*Check is a word has unique latters

*/

	function Isogram($input){

	//	$input = "michael";


		$split = str_split($input);

		
		$check = array_unique($split);

	//	var_dump($check);


		if($check != $split){

			echo "This world is not an Isogram";

		}else{
			echo "This word is an Isogram";
		}





	}

	Isogram("michael");


























?>