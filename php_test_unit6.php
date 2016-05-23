<?php
require "arr_class.php";

class arr_classTest extends PHPUnit_Framework_TestCase{
	/**
	* @dataProvider providerGetArr
	*/
	public function testGetArr($key, $str){
		$ob = new arr_class();
		$this->assertContainsOnly('int', $ob->getArr($str));
		//$this->assertContainsOnly('string', $ob->getArr($str));
	}
	public function providerGetArr(){
		return array(array(2,"hello|world"), array("hello1","hello1|world1"), array(3,"hello2|world2"), array(0,"hello3|world3"));
	}
}
?>