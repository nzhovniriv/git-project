<?php
require "ex_class.php";

class ex_classTest extends PHPUnit_Framework_TestCase{
	protected $ob;
	protected function setUp(){
		$this->ob = new ex_class();
	}
	/**
	* @dataProvider providerGetEx
	* @expectedException myException
	*/
	public function testGetEx($key){
		$this->ob->getEx($key);
	}
	public function providerGetEx(){
		return array(array(2), array(10), array(3), array(0));
	}
	protected function tearDown(){
		unset($this->ob);
	}
}
?>