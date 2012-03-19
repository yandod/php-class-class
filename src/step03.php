<?php
$out = '1000';
function hoge() {
  $in = 'ABCD';
  return date('Y-m-d');
}
echo hoge(); // ‘2012-03-21’ などと表示
echo Hoge();
echo HOGE();
echo hogE();
$a = 'hoge';
echo $a();
