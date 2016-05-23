<?php
require "sqrt_class.php";

class sqrt_classTest extends PHPUnit_Framework_TestCase{
	
	/**
	* @dataProvider providerSq
	*/

	public function testSq($a, $b){
		$ob = new sqrt_class();
		$this->assertEquals($a, $ob->sq($b));
	}
	public function providerSq(){
		return [[2, 4], [4, 18], [5, 25], [6, 36]];
	}
}
?>