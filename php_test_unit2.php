<?php
require "sqrt_class1.php";

class sqrt_classTest extends PHPUnit_Framework_TestCase{
	public function testSq(){
		$obj = new sqrt_class();
		$this->assertTrue($obj->sq(5));
		//$this->assertFalse($obj->sq(10));
	}
}
?>