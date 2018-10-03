#!/usr/bin/php
<?php
    function ft_split($str)
    {
        $r = explode(" ", $str);
        $ret = array();
        foreach ($r as $key)
        {
            if (!empty($key))
                $ret[] = $key;
        }
        unset($r);
        return ($ret);
    }
    array_shift($argv);
    $i = 1;
    // $str = $argv[0];
    // while ($argv[$i])
    // {
    //     $str = $str . " " . $argv[$i];
    //     $i++;
    // }
    $argv = ft_split(implode(" ", $argv));
    $last = array_shift($argv);
    // $last = array_shift(ft_split($str));
    // echo( $arr . "\n" );
    echo( implode(" ", $argv) . " " . $last . "\n" );

?>