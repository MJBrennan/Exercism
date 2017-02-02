<?php


class Div{
	
	public function __construct(){

		for($room=100;$room>=1;$room--){
		$sum = $this->Arr($room);

	
		if( $sum > $room && $this->getSum($sum,$room) != $room){
			echo $room."<br>";
			}

		}

	}


	public function Arr($room){

		$input = $room;
		$arr2 = array();
		for($n=1;$n<=$input;$n++){
		if(($input % $n) === 0 ){
		array_push($arr2, $n);
	        }
		}

		array_pop($arr2);

		$sum =  array_sum($arr2);

		return $sum;

	}

	public function getSum($sum, $room){

		$arr2 = array();
		for($n=1;$n<=$sum;$n++){
		if(($sum % $n) === 0 ){
		array_push($arr2, $n);

	        }
		}

		//array_pop($arr2);

		$sum =  array_sum($arr2);

		$array = $arr2;

		$results = array(array());

    	foreach ($array as $element) {
        foreach ($results as $combination) {

            $results[] = array_merge(array($element), $combination);
        }
    }

   foreach($results as $res){

   		if(array_sum($res) === $room ){

   			return array_sum($res);

   				}

   			}

       }

	}



$div = new Div;

