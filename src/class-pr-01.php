<?php
class Kid {
	public $name;
	public $sex;
	
	public function getLabel() {
		if ( $this->sex == '1' ) {
			$suffix = 'くん';
		} else {
			$suffix = 'ちゃん';
		}
		return $this->name . $suffix;
	}
}