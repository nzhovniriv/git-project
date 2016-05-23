<?php
require "arr_class.php";

class arr_classTest extends PHPUnit_Framework_TestCase{
	/**
	* @dataProvider providerGetArr
	*/
	public function testGetArr($key, $str){
		$ob = new arr_class();
		$this->assertArrayHasKey($key, $ob->getArr($str));
	}
	public function providerGetArr(){
		return array(array(2,"hello|world"), array(1,"hello1|world1"), array(3,"hello2|world2"), array(0,"hello3|world3"));
	}
}
?>