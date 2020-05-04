<!DOCTYPE html>
<html>
<head>
</head>
<body>

<style type="text/css">

body{
	font-family: Arial;
}
.center{
	display: block;
	margin-left: auto;
	margin-right: auto;

}
.center_text{
	text-align: center;
	font-size: 25px;
}
#problem{
	width:400px;
	margin: 0px 0px 0px 700px;
	text-align: right;
}

#button{
	background-color:#FBA90A;
	padding: 10px;
	font-size: 25px;
}
#digitplace{
	font-size: 25px;
	width: 100px;
}
</style>

<?php

require_once("menu_bar.php");
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
	<div class="center_text">
		$current_problem
	</div>
	<form action="additioncheckanswer.php?method=1&answer=$current_answer" method="post" class="center_text">
    	<input type="text" id="digitplace" name="digitplace">
    	<input type="submit" id="button">
	</form>
	<br>
	<img src=$burger_images[$current_image] width=$burger_width[$current_image] height=$burger_height[$current_image] class="center">
_END;
?>
</body>
</html>
