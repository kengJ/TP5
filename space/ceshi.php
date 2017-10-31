<?php
namespace beijing\haidian;
header("content-type:text/html; charset=utf-8");
class Animal{
	public $obj = 'dog';
	static $name = '大黄';
}
function getmsg(){
	echo '北京海淀';
}

namespace shanghai\putuo;
class Animal{
	public $obj = 'pig';
	static $name = '哼哼';
}
function getmsg(){
	echo '上海普陀';
}
$animal = new Animal();
echo $animal -> obj;
echo $animal::$name;

use beijing\putuo;
putuo\getmsg();
?>
