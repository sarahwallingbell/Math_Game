<style>
	#welcome{
		margin: 0px 0px 0px 10px;
	}
	#button{

	}
</style>

<?php
	require_once 'menu_bar.php';
	$user = $_SESSION["username"];
	echo <<<_END
	<div id="welcome">
	Welcome to subtraction game, $user
	<br>Here are the rules:
	</div>
	_END;

	echo <<<_END
			<li id = "button">
					<a href="./play_subtraction_game.php?user=$_SESSION[username]" class="link">Play!</a>
			</li>
			</li>
	_END;

	if($_SESSION['user_type'] == "teacher"){
			echo <<<_END
			<li class="button">
					<a href="./add_remove_subtraction.php?user=$_SESSION[username]" class="link">Add or Remove a Problem</a>
			</li>
			_END;
	}
?>
