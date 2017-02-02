<?php

	class Sessions
	{

		public function __construct()
		{


			session_start();

			echo $_SESSION['views'] = 1;




		}
	}


	$sessions = new Session();