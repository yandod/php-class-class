<?php
class Kid {
	const SEX_MALE = '1';
	const SEX_FEMALE = '2';
	public $name;
	public $sex;
	
	public function getLabel() {
		if ( $this->sex == self::SEX_MALE ) {
			$suffix = 'くん';
		} else {
			$suffix = 'ちゃん';
		}
		return $this->name . $suffix;
	}
	public function init($name,$sex) {
		$this->name = $name;
		$this->sex = $sex;
	}
}

$obj = new Kid();
$obj->init('つとむ',Kid::SEX_MALE);
echo $obj->getLabel();