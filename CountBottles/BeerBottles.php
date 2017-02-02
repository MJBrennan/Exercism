<?php

		/*
		*     Purpose of this programme is to print out the 
		*     Lyrics of the song 99 Beer Bottles on the Wall
		*/

	function BeerBottles(){
		
		for($beerb = 99;  $beerb >= 2;){
			
		echo "$beerb"." bottles of beer on the wall ,"."$beerb"." bottles of beer  <br>";
		$beeb2 = $beerb - 1;
		$beerb = $beeb2;
		echo "You take one down and pass it around it, $beerb Bottles of beer on the wall"."<br>";
		echo "<br>";
		}	
	}
	
		BeerBottles();


?>