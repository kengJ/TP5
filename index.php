<?php
namespace kj1;
function test1(){
	echo 'kj1';
}
namespace kj2;
function test1(){
	echo 'kj2';
}
\kj1\test1();
?>
