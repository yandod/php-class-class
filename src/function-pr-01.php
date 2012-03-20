<?php
function getLabel($name, $sex) {
	if ($sex == '1') {
		$suffix = 'くん';
	} else {
		$suffix = 'ちゃん';
	}
	return $name . $suffix;
}

echo getLabel('つとむ', 1);
echo getLabel('やよい', 2);
