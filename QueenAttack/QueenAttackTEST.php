<?php

use phpunit\Framework\TestCase;

require_once("QueenAttack.php");




class TestQueenAttack extends TestCase{



	public $test;

	public function setUp(){

		$this->test = new QueenAttack();
	}

	public function testName(){

		$queen = $this->test->Detect();
		$this->assertTrue( $queen === "Can Attack");
	}
}