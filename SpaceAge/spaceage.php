<?php

	class SpaceAge
	{

		public $seconds = '86400';
		public $saveSec;

		public function __construct($in)
		{
			$this->saveSec = $in;
		}

		public function seconds()
		{
			return $this->saveSec;
		}

		public function venus()
		{
			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 0.61519726;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function saturn()
		{

			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 29.447498;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function earth()
		{
			$howmany = $this->saveSec / $this->seconds;
			$howmany = $howmany / 365.25;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function jupiter()
		{

			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 11.862615;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function uranus()
		{

			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 84.016846;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function neptune()
		{

			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 164.79132;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function mercury()
		{

			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 0.2408467;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}

		public function mars()
		{

			$howmany = $this->saveSec / $this->seconds;
			$earthtime = 365.25 * 1.8808158;
			$howmany = $howmany / $earthtime;
			$howmany = round($howmany,2);

			return $howmany;
		}
	}


//$run = new SpaceAge("100");
