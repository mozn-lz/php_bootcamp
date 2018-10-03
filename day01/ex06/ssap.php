#!/usr/bin/php
<?php

 array_shift($argv);
 function ft_split($str)
{
    $r = explode(" ", $str);
    sort($r);
    $ret = array();
    foreach ($r as $key)
    {
        if (!empty($key))
            $ret[] = $key;
    }
    unset($r);
    return ($ret);
}
    echo( implode("\n", ft_split(implode(" ", $argv))) );

?>