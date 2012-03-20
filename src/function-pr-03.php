<?php
function getLabel($name, $sex, $age=0, $coloring=false) {
	if ($sex == '1') {
		$suffix = 'くん';
		$color = 'blue';
		if ( $age >= 12) {
			$suffix = '君';
		}
	} else {
		$suffix = 'ちゃん';
		$color = 'pink';
		if ( $age >= 12) {
			$suffix = 'さん';
		}
	}
	$str = "<span style='color:$color'>". $name . $suffix . "</span>\n";
	if (!$coloring) {
		$str = $name . $suffix . "\n";
	} 
	return $str;
}

echo getLabel('つとむ', 1); //つとむくん
echo getLabel('やよい', 2); //やよいちゃん
echo getLabel('つとむ', 1,10); //つとむくん
echo getLabel('やよい', 2,8); //やよいちゃん
echo getLabel('つとむ', 1,12); //つとむ君
echo getLabel('やよい', 2,20); //やよいさん
echo getLabel('つとむ', 1,0,true); //<span style='color:blue'>つとむくん</span>
echo getLabel('やよい', 2,0,true); //<span style='color:pink'>やよいちゃん</span>



