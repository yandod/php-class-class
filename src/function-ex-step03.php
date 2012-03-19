<?php
$out = '1000';
function hoge() {
  $in = 'ABCD';
  //echo $out; // エラー
  //echo $etc; // エラー
}
function fuga() {
  $etc = 'XYZ';
}
hoge();
hoge();
//echo $in; //エラー