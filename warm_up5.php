<?php

	// Given a string, return the reverse of the string (basically recreate strrev()). "The lazy dog" -> "god yzal ehT"

	// Accepts a string and returns the string reversed.
	function reverse($str)
	{
		$str_array = str_split($str);
		$last = count($str_array);
		$rev = array();
		
		for ($i = $last - 1; $i >= 0; $i--)
		{
			$rev[] = $str_array[$i];
		}
		return implode($rev);
	}

	echo reverse("The lazy dog");
	
?>