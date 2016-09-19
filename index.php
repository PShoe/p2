<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
	<head>
		<title>p2 password generator</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="" type="text/css">

    <?php require ('logic.php'); ?>

	<body>
    <h1>p2: Hungry for a password?</h1>

  <form action='index.php' method='GET'>
  </form>
    <input type='text' name='numWords'>Enter desired number of words<br>
    <input type='radio' name='yesOrNo' value='yes'>Yes<br>
    <input type='radio' name='yesOrNo' value='no'>No<br>
    <input type='submit' value='Get a password!'>
  </form>

	</body>
</html>
