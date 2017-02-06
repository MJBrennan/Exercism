<?php

	class BookStore 
	{

		public $basket = [];
		
		function __construct()
		{
			print ($this->total());
		}

		public function total()
		{
			$multiArr = array(array());
			$localArr = [1,2.3,4,5];
			$filteredArr = array_unique($localArr);
			foreach ($filteredArr as $num) 
			{
			$val = count(array_keys($localArr, $num));
			if($val === 2)
			{
			$multiArr[0][] = $num;
			$multiArr[1][] = $num;
			$localArr = array_diff($localArr,array($num));
			}
			elseif($val === 3) 
			{
			$multiArr[0][] = $num;
			$multiArr[1][] = $num;
			$multiArr[2][] = $num;
			$localArr = array_diff($localArr,array($num));
			}
			else
			{
			$multiArr[2][] = $num;
			$localArr = array_diff($localArr,array($num));
			}
			}
			echo json_encode($multiArr, JSON_PRETTY_PRINT);

		}
	}


	$class = new BookStore;