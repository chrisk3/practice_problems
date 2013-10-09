<?php

	// Given an array of numbers, return true if there is a place to split the array so that the sum of one side equals the other
	// (1, 2, 1, 1, 1) == true
	// (1, 3, 2, 4) == false
	// (3, 5, 8) == true


	// takes an array of numbers. outputs true if array can be split into two with equal sums. returns nothing if not.
	function splitting($array)
	{
		$total = 0;

		// Calculating array sum without using PHP array_sum() function
		foreach ($array as $add)
		{
			$total += $add;
		}

		$sum = 0;

		// As long as array only contains numbers, evaluate if there is a split location
		foreach ($array as $item)
		{
			if (is_numeric($item))
			{
				$sum += $item;
				if ($sum == $total - $sum)
				{
					return "true";
				}
			}
			else
			{
				echo "Input array can only contain numbers";
				exit();
			}
		}
		return "false";
	}

	$numbers = array(1, 2, 1, 1, 1);
	echo "Case 1: " . splitting($numbers) . "<br>";

	$numbers2 = array(1, 3, 2, 4);
	echo "Case 2: " . splitting($numbers2) . "<br>";

	$numbers3 = array(3, 5, 8);
	echo "Case 3: " . splitting($numbers3) . "<br>";

	$numbers4 = array(-1, -2, -3);
	echo "Case 4: " . splitting($numbers4) . "<br>";

	$numbers5 = array(3, 3);
	echo "Case 5: " . splitting($numbers5) . "<br>";

	$numbers6 = array(6, 1, 2, 9, 8, 5, 3, 9);
	echo "Case 6: " . splitting($numbers6) . "<br>";
	
	$numbers7 = array(6, 1, 2, 9, "string", 5, 3, 9);
	echo splitting($numbers7) . "<br>";
?>