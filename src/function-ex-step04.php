<?php
function hoge($a) {
}
function fuga($a, $b =0){
}
function moge($a=null,$b=null,$c) {
}
hoge(1); //OK
fuga(1); //OK
moge(1,2,3); //OK

hoge();
fuga();
moge();