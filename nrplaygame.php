<!DOCTYPE html>
<html>
<head>
</head>
<body>

<style type="text/css">
.center_text{
	text-align: center;
}
</style>
<?php
//pick and print a problem, record correct answer
require_once('nrgame.php');
require_once('menu_bar.php');
$current_problem = pick_problem();

//get user response and redirect to nrcheckanswer.php
echo <<<_END
	<br><br><br>
	<div class="center_text">
		$current_problem
	</div>
	<br>
	<form action="nrcheckanswer.php?method=1&answer=$current_answer" method="post" class="center_text">
    	<input type="submit" name="hundreds" id="hundreds" value="hundreds" />
		<input type="submit" name="tens" id="tens" value="tens" />
		<input type="submit" name="ones" id="ones" value="ones" />
	</form>
_END;
?>
</body>
</html>
