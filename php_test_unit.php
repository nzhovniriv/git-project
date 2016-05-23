<?php
require "sqrt_class.php";

class sqrt_classTest extends PHPUnit_Framework_TestCase{
	public function testSq(){
		$obj = new sqrt_class();
		$this->assertEquals(6, $obj->sq(25));
	}
}
?>