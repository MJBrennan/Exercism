<?php

	class RomanNumerals

	{

		public $in;

		public function __construct($in)

		{

		$this->in = $in;

		print $this->Convert();
		}


		public function Convert()

		{

			$addingArr = array();

			$input = $this->in;




			$array = ["4"=>"IV","9"=>"IX","40"=>"XL","90"=>"XC","460"=>"CD","990"=>"CM"];

			foreach($array as $key => $arr)
			{
				if(strpos($input,$arr) !== FALSE)
				{
					array_push($addingArr, $key);
				}	
			}

			$trimmed = str_replace($input,"",$array);


			$str_replaced = str_replace($array, "", $input);
			

			//The Rest

			$arrayRest = ["1"=>"I","5"=>"V", "10"=>"X","50"=>"L","100"=>"C","500"=>"D","1000"=>
			"M"];

			$str = str_split($str_replaced);

			foreach ($str as  $value) 

			{
			foreach($arrayRest as $key => $arr)
			{
				if(strpos($value,$arr) !== FALSE)
				{
					array_push($addingArr, $key);
				}	
			}	
				
			
			}

			$sum = array_sum($addingArr);

			return $sum;
            		
		}

	}

	$numerals = new RomanNumerals("IV");