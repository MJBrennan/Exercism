<?php


	function wordCount($sentence){

	


		$explode = explode(" ", $sentence);


		$data =	array_count_values($explode);

	//	print_r($data);

		foreach( $data as $key => $value){

			echo "Word: ".$key." ";

			echo "Occurance: ".$value." <br>";

		}

	}



	wordCount("Hi Hi How Are You You");




















?>