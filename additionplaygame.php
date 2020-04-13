<!DOCTYPE html>
<html>
<head>
</head>
<body>

<style type="text/css">
.center{
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;
}
.center_text{
	text-align: center;
}
</style>

<?php
//pick and print a problem, record correct answer
require_once('additiongame.php');
$current_problem = pick_problem();
session_start();
if(!isset($_SESSION['burger_image'])){
	$_SESSION['burger_image']=0;
}
$current_image = $_SESSION['burger_image'];

//get user response and redirect to additioncheckanswer.php
echo <<<_END
	<br><br><br>
	<div class:"center_text" display:"inline-block">$current_problem</div>
	<form action="additioncheckanswer.php?method=1&answer=$current_answer" method="post" class="center_text">
    	<input type="text" id="digitplace" name="digitplace">
    	<input type="submit">
	</form>
	<img src=$burger_images[$current_image] class="center">
_END;
?>
</body>
</html>
