<?php

	/*			Excercise Title: 
				Clean up user-entered phone numbers so that they can be sent SMS messages.
				Description:
	 *			Clean up user-entered phone numbers so that they can be sent SMS messages.
	 *
	 */


	class PhoneNumber
	{
		public $number;

		public function __construct($input)
		{
			$this->number = $input;
			print ($this->number());
		}
		public function number()
		{
			$number = $this->number;
			$number = $this->numberFilter($number);
			$number = str_split($number);
			$first = $number[0];
			if(count($number) === 10)
			{
				echo "Number is Right ";
				return implode("",$number);

			}
			elseif (count($number) < 10) 
			{
				return;

			}
			elseif (count($number) == 11 && $first == 1) 
			{
				array_shift($number);
				echo "Number is Correct ";
				return implode("",$number);
			}
			else
			{
				return;
			}
		}
		public function numberFilter($in)
		{
			$filter = 	preg_replace("/[^0-9]/","",$in);
			return $filter;
		}
	}
	