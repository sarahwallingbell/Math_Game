<style>
	#welcome{
		margin: 0px 0px 0px 10px;
	}
	#button{
		display: inline-block;
	}
</style>

<?php
	require_once 'menu_bar.php';
	$user = $_SESSION["username"];
	echo <<<_END
	<div id="welcome">
	Welcome to addition game, $user
	<br><br>Here are the rules:
	<br>An addition problem will appear on the screen. Enter in the correct sum and you will get a question right, building the first part of your burger! Get ten question right to complete your delicious food!
	</div>
	_END;

	echo <<<_END
			<li id = "button">
					<a href="./additionplaygame.php?user=$_SESSION[username]" class="link">Play!</a>
			</li>
			</li>
	_END;

	if($_SESSION['user_type'] == "teacher"){
			echo <<<_END
			<li class="button">
					<a href="./add_remove_addition.php?user=$_SESSION[username]" class="link">Add a Problem</a>
			</li>
			_END;
	}
?>
