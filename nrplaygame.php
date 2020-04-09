<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
//pick and print a problem, record correct answer
require_once('nrgame.php');
require_once('menu_bar.php');
$current_answer = pick_print_problem();

//get user response and redirect to nrcheckanswer.php
echo <<<_END
	<form action="nrcheckanswer.php?method=1&answer=$current_answer" method="post">
    	<input type="submit" name="hundreds" id="hundreds" value="hundreds" />
		<input type="submit" name="tens" id="tens" value="tens" />
		<input type="submit" name="ones" id="ones" value="ones" />
	</form>
_END;
?>
</body>
</html>
