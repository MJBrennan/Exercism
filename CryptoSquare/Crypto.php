<?php

	class Crypto{

		public function __construct(){

			$this->Encode();

		}

		public function Encode(){

					$int = 195;

					$c = sqrt($int);
					$r = ceil($c);
					

			//		if(	$c >= $r && $c - $r <= 1){

				//	$col = $c;
				//	$row = $r;	

			//	}

			echo $c."<br>";
			echo $r;

		}


		public function Decode(){





		}
	}

	$crypto = new Crypto;

