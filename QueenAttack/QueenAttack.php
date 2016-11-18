<?php

	class QueenAttack{

		public function __construct(){

			$this->Detect();
		}

		public function Detect(){

			//Comparing This

			//Horizontal
			$queenBlackX = 6;
			//Vertical
			$queenBlackY = 1;

			//Searching Against

			$queenWhiteX = 1;
			$queenWhiteY = 6;

			if($queenBlackX === $queenWhiteX && $queenBlackY ===  $queenWhiteY)
			{
				return "Chess Pieces Are In The Same Place!";
			}

			//Vertical, Horizontal and Diagonal
			
			elseif($queenBlackY === $queenWhiteY || $queenBlackX === $queenWhiteX || 

			abs($queenBlackX - $queenBlackY) == abs($queenWhiteX - $queenWhiteY)){

				return "Can Attack";
			}

			else{
				return "Nothing";
			}

			
		}

	}

	//$text = new QueenAttack();