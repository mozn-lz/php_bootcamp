#!/usr/bin/php
<?php

$arr = explode(" ", $argv[1]);
$wd = array_shift($arr);
$str = implode(" ", $arr);
$str = $str . " " . $wd;
echo (trim((preg_replace('/\s\s+/', ' ', $str))) . "\n");

?>