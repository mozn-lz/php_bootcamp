#!/usr/bin/php
<?php

$str = array_values(array_filter(explode(" ", $argv[1])));
echo implode(" ", $str)."\n";

?>