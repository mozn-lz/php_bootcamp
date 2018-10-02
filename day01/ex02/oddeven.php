#!/usr/bin/php
<?php
    echo ("enter number: ");
    while($number = fgets(STDIN))
    {
        $number = trim($number);
        if (is_numeric($number) && $number % 2 !=0)
            echo ("The number ".$number." is odd\n");
        else if (is_numeric($number) && $number % 2 == 0)
            echo ("The number ".$number." is even\n");
        else
            echo ("'".$number."' is not a number\n");
        echo ("Enter a number: ");
    }
    echo ("^D\n");
?>