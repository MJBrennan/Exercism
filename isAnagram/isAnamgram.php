
<?php

	class Anagram{
		
		public $inputOne;
		public $inputTwo;
		
		
	public function __construct($inputOne,$inputTwo){
		
		$this->inputOne = $inputOne;
		$this->inputTwo = $inputTwo;
		$this->isAnagram($inputOne,$inputTwo);
	}

	public function isAnagram($mainWord, $checkWord){
		
		

	//Check if Strings are the same length
    $length1 =   strlen($mainWord);
	$length2 =   strlen($checkWord);
	
	if($length1 != $length2){
		echo "They are not the same length meaning it is not an Anagram";
	}
	else{
		//sort Word 1
		
		$mainWord2 = str_split($mainWord);
		sort($mainWord2);
		
		// Sort Word 2
		
		$checkWord2 = str_split($checkWord);
		sort($checkWord2);
		
		if ($mainWord2 == $checkWord2){
			
			echo "This word is an anagram";
			
		}else{
			echo "This word is not an anagram";
			}	
		}		
		
		}
	}
	


 
 
    

?>