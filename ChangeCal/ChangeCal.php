<?php




class ChangeCal{

	public $arr = array();

	public $input;




	public function Change(){

		$this->input = 12;

		while($this->input >= 1){

		if($this->input  >= 100){

		$val = $this->input - 100;

		//echo $val."<br>";

		array_push($this->arr, "1 Euro");

		$this->input = $val;

		}

		elseif($this->input  >= 50){

		$val = $this->input - 50;

		array_push($this->arr, "50 Cent");

	//	echo $val."<br>";

		$this->input = $val;

		}

		elseif($this->input  >= 20){

		$val = $this->input - 20;

		array_push($this->arr, "20 Cent");

		$this->input = $val;

		}

		elseif($this->input  >= 10){

		$val = $this->input - 10;

		array_push($this->arr, "10 Cent");

		$this->input = $val;

		}

		elseif($this->input  >= 5){

		$val = $this->input - 5;

		array_push($this->arr, "5 Cent");

		$this->input = $val;

		}

		elseif($this->input  >= 2){

		$val = $this->input - 2;

	    array_push($this->arr, "2 Cent");

		$this->input = $val;

		}

		elseif($this->input  >= 1){

		$val = $this->input - 1;

		array_push($this->arr, "1 Cent");

		$this->input = $val;

		}

	}

	foreach($this->arr as $array){

		echo $array."<br>";


	}

}

	

}


$calculate = new ChangeCal;

$num = $calculate->Change();

echo $num;
