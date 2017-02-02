<?php

function fib(){
	$two = 1;
	$three = 2;
		
	for( $in=0;$in < 100;){
			$in = $two +$three;
			echo( $in."<br>");
			$two = $three;
            $three = $in;
			$in++;
		}
	}
	
function wh(){
	
	$two = 1;
	$three = 2;
	
	do{
		echo "Hello";
	}while($three = 1);
	
	}	
	
wh();

	
	


 
	
	
		








?>