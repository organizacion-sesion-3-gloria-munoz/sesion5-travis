<?php
use PHPUnit\Framework\TestCase;
require 'Num_Par.php';

class Num_ParTest extends TestCase
{
	private $Num_Par;

	protected function setUp()
	{
		$this->Num_Par = new Num_Par();
	}
	
	protected function tearDown()
	{
		$this->Num_Par = NULL;	
	}
	
	public function testMod()
	{
		$result = $this->Num_Par->mod(2);
		$this->assertEquals(true,$result);
	}
}
