<?php
function getLabel($name, $sex, $age=0) {
	if ($sex == '1') {
		$suffix = 'くん';
		if ( $age >= 12) {
			$suffix = '君';
		}
	} else {
		$suffix = 'ちゃん';
		if ( $age >= 12) {
			$suffix = 'さん';
		}
	}
	return $name . $suffix . "\n";
}

echo getLabel('つとむ', 1); //つとむくん
echo getLabel('やよい', 2); //やよいちゃん
echo getLabel('つとむ', 1,10); //つとむくん
echo getLabel('やよい', 2,8); //やよいちゃん
echo getLabel('つとむ', 1,12); //つとむ君
echo getLabel('やよい', 2,20); //やよいさん


