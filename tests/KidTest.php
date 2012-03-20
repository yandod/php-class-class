<?php
require_once './src/Kid.php';

class KidTest extends PHPUnit_Framework_TestCase {

	public function testNormal() {
		$obj = new Kid('つとむ',1);
		$ret = $obj->getLabel();
		$this->assertEquals($ret,'つとむくん');
		
		$obj = new Kid('やよい',0);
		$ret = $obj->getLabel();
		$this->assertEquals($ret,'やよいちゃん');
	}

}