<?php



	class PerfectNumbers

	{

		public	$arr = array();
		public  $int;
		

		public  function Calculate($int)

		{
			$this->int = $int;

		//Checking  What Factors a number contains

			for ($i=1; $i <= $int ; $i++) { 
				
			if(($int % $i) === 0){

			$new =  $int / $i;

			array_push($this->arr, $i);
			array_push($this->arr, $new);

			$new = 0;

				}

			}
			
			$unique = array_unique($this->arr);

		if (($key = array_search($this->int, $unique)) !== false) {

   			unset($unique[$key]);

			}

	
			return $this->arr = $unique;


		}

		
		public function Type()

		{

			//find the sum of the array 

			$sum =  array_sum($this->arr);

			echo $sum."<br>";

			if($sum === $this->int)

			{

				echo "Perfect Number";
			}

			elseif($sum > $this->int)

			{
				echo "Abundant Number";
			}

			else {

				echo "Deficent Number";

			}


		}
	
}

	$enter = new PerfectNumbers();
	$enter->Calculate(11);
	$enter->Type();