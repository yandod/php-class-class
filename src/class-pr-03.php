<?php
class Kid {
	const SEX_MALE = '1';
	const SEX_FEMALE = '2';
	public $name;
	public $sex;
	
	public function __construct($name, $sex) {
		$this->name = $name;
		$this->sex = $sex;
	}
	public function getLabel() {
		if ( $this->sex == self::SEX_MALE ) {
			$suffix = 'くん';
		} else {
			$suffix = 'ちゃん';
		}
		return $this->name . $suffix;
	}
}

$obj = new Kid('つとむ',Kid::SEX_MALE);
echo $obj->getLabel();