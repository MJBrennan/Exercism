<?php

	class Grains{

		public function __construct()
		{
			$this->ChessBoard();
		}

		public function ChessBoard(){

			$arr = [1];

			$val = 1;

	
			for ($i=1; $i <= 64; $i++) { 

					$ans = 2 * $val;
					$val = $ans;
					array_push($arr, $ans);

					}

				

			
				$n = 1;

				echo(array_sum($arr))."<br>";

				foreach ($arr as $n => $value) {
				
					echo "SQ: ".$n." ".$value."<br>";

							}
					}
				}

		
	
			



	$grains = new Grains();