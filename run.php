<?php
$list = explode(PHP_EOL , trim(file_get_contents("url.txt")));
list($long ,$short)= explode("\t", $list[0]);
header("Location: $long");
/*
foreach ($list as $key => $l) {
	//print_r($long);

	
}
*/
