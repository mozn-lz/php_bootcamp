#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
	$bat = $tab;
	sort($bat);
	if ($bat == $tab)
	{
		return (true);
	}
	else
	{
		return (false);
	}
}

?>