<?php
$name = 'やよい';
$sex = '2';
$age = 20;
$coloring = false;
$school = true;
echo getLabel(); //やよいさん(大)
$name = 'つとむ';
$sex = '1';
echo getLabel(); //つとむ君(大)
$name = 'やよい';
$sex = '2';
echo getLabel(); //やよいさん(大)

function getLabel( ) {
	global $name,$sex,$age,$coloring,$school;
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
	if ( $age >=  6 && $age <= 11 ) {
		$suffix .= "(小)";
	} else if ( $age >= 12 && $age <= 14 ) {
		$suffix .= "(中)";
	} else if ( $age >= 15 && $age <= 17 ) {
		$suffix .= "(高)";
	} else if ( $age >= 18 && $age <= 21 ) {
		$suffix .= "(大)";	
	}
	$str = "<span style='color:$color'>". $name . $suffix . "</span>\n";
	if (!$coloring) {
		$str = $name . $suffix . "\n";
	} 
	return $str;
}




