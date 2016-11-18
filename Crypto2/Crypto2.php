<?php
error_reporting(0);


	class Crypto{

		public $f;

		public $encryted = array();

		public  $srRoot;

		public $decrypted;

		public function Encrypt($message){

			
			$ciphMessage = array();

			$mulArr = array();

			//remove spaces
			//$message = "If man was meant to stay on the ground, god would have given";

			$stage1 = str_replace(' ','', $message);


			//convert to Array

			$sptarr = str_split($stage1);
			$sptar = count($sptarr);
			$this->srRoot = sqrt($sptar);

			$round = ceil($this->srRoot);

			if($round != $this->srRoot)
			{
				$newR = pow($round, 2);
				$newNums = $newR - $sptar;

				$new_arr = array_fill($sptar,$newNums,' ');

				$new2 = array_merge($sptarr,$new_arr);

				$sptarr = $new2;
				$this->srRoot = $round;
				

			}

			
				$chunk = array_chunk($sptarr, $this->srRoot);

			

		for ($y=0; $y <=$this->srRoot; $y++) { 
			for ($x=0;$x<=$this->srRoot;$x++) { 

				array_push($this->encryted, $chunk[$x][$y]);

				}

			}	

			$new = array_filter($this->encryted);

			$this->encryted = $new;

			foreach ($this->encryted as $value) {

				echo $value;
				
				
			}
		}


		public function Decrypt(){

		$decrypt = $this->encryted;

		$chunk = array_chunk($decrypt, $this->srRoot);

		echo "<br>";

	for($x=0; $x < $this->srRoot; $x++){

		for ($i=0; $i < $this->srRoot; $i++) { 
		
			$this->decrypted .= $chunk[$i][$x];

		}

	}

		echo $this->decrypted;


		}

	}

	$cry = new Crypto();
	$cry->Encrypt("mexico is going to pay for the wall");
	$cry->Decrypt();