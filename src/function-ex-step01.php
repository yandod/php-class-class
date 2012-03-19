<?php
function hoge() {
  return date('Y-m-d');
}
function fuga($w = null) {
  if (is_null($w)) {
    $w = date('w');
  }
  $list = array('日','月','火','水','木','金','土');
  return $list[$w];
}
echo hoge(); // ‘2012-03-21’ などと表示
echo fuga(3); // '水'と表示