<!-- Error checker -->
<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
	<title>p2</title>
	<meta charset="utf-8">

	<!-- Add style sheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/initialize.css" type="text/css">
	<link rel="stylesheet" href="css/p2css.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pavanam" rel="stylesheet">
	<!-- attach to logic file: SOC -->
	<?php require ('logic.php'); ?>

</head>

<body>
	<img class="snacks" src="http://www.clipartkid.com/images/249/healthy-food-border-clipart-panda-free-clipart-images-jUOQXH-clipart.jpg" alt="snacks">
	<h1>Hungry for a password?..</h1>
	<h2><?php if (isset($numWords) && ($numWords == 0)){ echo "Please enter how many words you'd like.";} ?></h2>
	<h2><?php if (isset($numWords) && ($numWords < 6) && ($numWords > 0)) {echo $password;} ?></h2>
	<h2><?php if (isset($numWords) && ($numWords > 5 | $numWords < 0)){echo "This number is not between one and five.";} ?></h2>

	<form class="form" action='index.php' method='GET'>
		<p class='pwform'>
			<label for="howManyWords">How many words long? Max of 5</label>
			<br>
			<input type='number' name='howManyWords' id='howManyWords'>
			<br>
			<input type='checkbox' name='add_number' id='add_number' >
			<label for='add_number'>Add a number?</label>
			<br>
			<input type='checkbox' name='add_symbol' id='add_symbol' >
			<label for='add_symbol'>A symbol too?!</label>
		</p>
		<input type='submit' class='button' name="button" value='Snack on!'>
	</form>

</body>
</html>
<!-- min='1' max='5' -->
