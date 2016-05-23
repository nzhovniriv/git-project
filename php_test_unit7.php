<?php
require "arr_class.php";

class arr_classTest extends PHPUnit_Framework_TestCase{
	/**
	* @dataProvider providerGetArr
	*/
	public function testGetArr($key, $str){
		$ob = new arr_class();
		$this->assertCount($key, $ob->getArr($str));
	}
	public function providerGetArr(){
		return array(array(2,"hello|world"), array(5,"hello1|world1"), array(3,"hello2|world2|string"), array(0,"hello3|world3"));
	}
}
?>