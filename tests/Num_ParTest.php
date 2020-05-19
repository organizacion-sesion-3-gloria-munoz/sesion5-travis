<?php
use PHPUnit\Framework\TestCase;
require 'Num_Par.php';

class Num_ParTest extends TestCase
{
	private $calculator;

	protected function setUp()
	{
		$this->calculator = new Num_Par();
	}
	
	protected function tearDown()
	{
		$this->calculator = NULL;	
	}
	
	public function testMod()
	{
		$result=$this->calculator->Par(2);
		$this->assertEquals("par",$result);
	}
}
