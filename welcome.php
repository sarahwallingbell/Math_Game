<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Math Game</title>
	</head>
<body>
<style>
	#welcome{
		margin: 0px 0px 0px 10px;
	}
</style>
<?php
	require_once 'menu_bar.php';
	require_once 'logic.php';

	my_session_start();

	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];

		echo <<<_END
		<div id="welcome">
			Welcome to Math Game, $username
		<div>
		_END;

	}


?>



</body>
</html>
