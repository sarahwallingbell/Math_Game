<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
//pick and print a problem, record correct answer
require_once('nrgame.php');
$current_answer = pick_print_problem();

//get user response and redirect to nrcheckanswer.php
echo <<<_END
	<form action="nrcheckanswer.php?method=1&answer=$current_answer" method="post">
    	Answer:<input type="text" id="digitplace" name="digitplace">
    	<input type="submit">
	</form>
_END;
?>
</body>
</html>
