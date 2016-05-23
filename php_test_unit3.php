<?php
require "sqrt_class1.php";

class sqrt_classTest extends PHPUnit_Framework_TestCase{

	/**
	* @dataProvider providerSq
	*/

	public function testSq($b){
		$obj = new sqrt_class();
		//$this->assertTrue($obj->sq($b));
		$this->assertFalse($obj->sq($b));
	}
	public function providerSq(){
		return array(array(4), array(5), array(25), array(10));
	}
}
?>