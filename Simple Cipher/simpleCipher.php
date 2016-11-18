<?php

	error_reporting(0);

	class Cipher{

	//	public $input = "ZH QHHG WR HVFDSH";

		public function __construct(){

		//	$this->encode($this->input = $input);
			$this->decode();

		}


		public function arraySetup(){

			foreach(range("A","Z")as $alph){

				$normal[] = $alph;
			}

			return $normal;
		}


		public function cipherSetup(){

			$cipher = $this->arraySetup();

			for(  $shift = 1 ; $shift <= 3 ; $shift++){

				array_push($cipher, array_shift($cipher));

			}

			return $cipher;

		}





		public function encode($input){

		//	$input = "WE NEED TO ESCAPE";

			$cart = array_combine($this->arraySetup(), $this->cipherSetup());

			$splitstr = str_split($input);

			$encode = " ";

			foreach( $splitstr as $chars){

					if(isset($cart[$chars])){

						$encode .= $cart[$chars];

				}else{
					$encode .=  $chars[' '];
				}

			}


			echo $encode;

		}

		public function decode(){

			if(!isset($this->input)){

				echo ("You must Enter a message to encode!");

			}

		//	$input = "ZH QHHG WR HVFDSH";

			$cart = array_combine($this->cipherSetup(), $this->arraySetup());

			$splitstr = str_split($this->input);

			$encode = " ";

			foreach( $splitstr as $chars){

					if(isset($cart[$chars])){

						$encode .= $cart[$chars];

				}else{
					$encode .=  $chars[' '];
				}

			}

			echo $encode;

			}

		}	


	


	$cipher = new Cipher();

	echo $cipher;


?>


<html>
<body>

<form  action="simpleCipher.php" method="post">
	
<input type="text" name="cipher"><br>
<input type="submit">


</form>



</body>
</html>












	

	








