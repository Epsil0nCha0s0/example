<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MARTIN HWANG and DARREN BENDER</title>
  <style>
	*{
		margin: 0;
		padding: 0;
		
	}
	Body{
	
		width: 1600px;
		font-size: 100%;
		margin: 2em auto;
		padding: 2em auto;
		background-color:#d0d0f2;
	}
	label{
		margin-left: 0.2em;
		margin-right: 2em;
	}
	form{
		margin: 10% 31%;
	}
  </style>

</head>
<body>
	<h2>InClass 7</h2>
	<?php
		$guess = $_POST["guess"];
		$secret = 7;
		if($guess == $secret)
		{
			echo("<h3>Your number ". $guess ." is matched with secret number ". $secret. "</h3>" );
		}else if ($guess < $secret)
		{
			echo("<h3>Your number ". $guess ." is smaller than secret number. </h3>" );
		}else if ($guess > $secret)
		{
			echo("<h3>Your number ". $guess ." is greater than secret number. </h3>" );
		}
	
	?>
</body>
</html>