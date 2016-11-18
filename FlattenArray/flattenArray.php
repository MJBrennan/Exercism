<?php


	
	function flatten(){


		//This is the array that needs to be flattened

		$array = [[1,2,[3]],4];

		$arrayMain = new RecursiveIteratorIterator( new RecursiveArrayIterator($array));

		foreach($arrayMain as $val){

			echo ($val."<br>");

		}

	}

	 flatten();





















?>