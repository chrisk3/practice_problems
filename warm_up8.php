<?php

	// Given a string containing only 2 numbers ("a b"), return the last digit produced by raising 'a' to the power of 'b' (a^b)



	// Accepts a string containing two numbers separated by a space, and returns the value of the first number raised to the power of the second number.
	function power($str)
	{
		$split = explode(" ", $str);
		$base = $split[0];
		$exp = $split[1];

        // Calculating exponential value without using PHP pow function
        $val = $base * $base;
		for ($i = 1; $i < $exp - 1; $i++)
		{
			$val = $val * $base;
		}

		// Make sure $val is a string
		$val = strval($val);
		$last_digit = strlen($val);

		return $val[$last_digit - 1];

	}
 
	echo "Exponential value for validation: " . pow(6, 2) . "<br>";
	echo "Last digit: " . power("6 2") . "<br><br>";

 	echo "Exponential value for validation: " . pow(3, 10) . "<br>";
	echo "Last digit: " . power("3 10");
	
?>
