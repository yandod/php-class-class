<?php
require_once './src/Kid.php';
require_once './src/HtmlKid.php';

class HtmlKidTest extends PHPUnit_Framework_TestCase {

	public function testNormal() {
		$obj = new HtmlKid('つとむ',1);
		$ret = $obj->getLabel();
		$this->assertEquals(trim($ret),'<span style=\'color:blue\'>つとむくん</span>');
		
		$obj = new HtmlKid('やよい',0);
		$ret = $obj->getLabel();
		$this->assertEquals(trim($ret),'<span style=\'color:pink\'>やよいちゃん</span>');
	}

}