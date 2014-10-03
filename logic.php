<?php

/*Creating an array with words for random password generator
*/
function generatePassword () 
{

	$wordcount = $_GET['numberofwords'];

	$anynumbers = $_GET['numbers'];

	$anycharacters = $_GET['characters'];

	if ($wordcount > 9)
	{
		echo "Invalid input! <br>
		Please enter a number from 1 to 10.";
		return;
	}

	$words = Array (
		'Alpha', 'Bravo', 'Charlie', 'Delta', 'Echo', 'Foxtrot', 'Golf',
		'Hotel', 'India', 'Juliet', 'Kilo', 'Lima', 'Mike', 'November',
		'Oscar', 'Papa', 'Quebec', 'Romeo', 'Sierra', 'Tango', 'Uniform',
		'Victor', 'Whiskey', 'Xray', 'Yankee', 'Zulu');

	#$numbers = Array (
		#'1', '2', '3', '4', '5', '6', '7', '8', '9', '0');

	$symbols = Array (
		'@', '#', '$', '%', '^', '&', '*');


	for ($i=0; $i<$wordcount; $i++)
	{
		$keyword = array_rand ($words);

		foreach ($words as $key => $value)
		{
			if ($key == $keyword)
			{
				echo $value." ";
			}
		}
	}
	if ($anynumbers) 
	{
		echo $keyword;
	}
	if ($anycharacters)
	{
		$keysymbol = array_rand ($symbols);
		foreach ($symbols as $key => $value)
		{
			if ($key == $keysymbol)
			{
				echo $value;
			}
		}
	}
}
