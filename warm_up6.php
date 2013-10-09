<?php

	// Create a function that takes 2 parameters. The first will be a word we want to censor, the second will be a sentence that may contain the word we want to sensor. Return the sentence with the censored word replaced with random characters the same length as the censored word.

	// Accepts a string (single word) and the length of the word and replaces each character of the string with a random symbol.
	function repeat($str, $len)
	{
		$random_chars = array('!', '@', '#', '$', '%', '^', '&', '*');
		$new_str = '';

		for ($i = 0; $i < $len; $i++)
		{
			$pick = array_rand($random_chars);
			$new_str .= $random_chars[$pick];
		}
		return $new_str;
	}

	// Accepts a word to be censored and a string that may contain the censored word. Returns the string with the word censored with random characters.
	function censored($word, $sentence)
	{
		$word = strtolower($word);
		$sentence = strtolower($sentence);
		$length = strlen($word);

		$revised = str_replace($word, str_repeat(repeat($word, $length), 1), $sentence);

		return ucfirst($revised);
	}

	echo censored("chicken", "the chicken crossed the road") . "<br>";
	echo censored("duck", "the duck crossed the road") . "<br>";
	echo censored("hippopotamus", "the hippopotamus crossed the road") . "<br>";
	
?>