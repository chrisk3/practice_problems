<?php

	// Given an integer value ($x), find the next palindrome over $x

	// Accepts a positive integer and returns the next numeric palindrome greater than the accepted integer.
	function palindrome($n)
	{
		// Taking the absolute value of $n to ensure no negative numbers.
		$n = abs($n);
		$count = $n + 1;

		while (!isset($x))
		{
			// If $n is 9 or greater, we compare the counter variable to its reverse. If they match, we found the next palindrome
			if ($n > 8 AND ($count == strrev($count)))
			{
				$x = $count;
			}
			// if $n is less than 9, then the next numeric palindrome will be $n + 1
			else if ($n < 9)
			{
				$x = $n + 1;
			}

			$count++;
		}
		return "The next palindrome is <b><u>" . $x . "</b></u>";
	}

	echo palindrome(4) . "<br>";
	echo palindrome(999) . "<br>";
	echo palindrome(127) . "<br>";

?>