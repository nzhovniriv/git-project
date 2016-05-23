<?php
class myException extends Exception{}
class ex_class{
	public function getEx($x){
		if($x == 10){
			throw new myException("Wrong data");
		}else{
			return true;
		}
	}
}
?>