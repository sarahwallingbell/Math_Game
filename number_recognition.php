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
	Welcome to number recognition game, $user
	<br><br>Here are the rules:
	<br>A question will appear on the screen that will ask you to pick which place a specific digit is located within a number. Select the correct answer.
	</div>
	_END;

	echo <<<_END
			<li id = "button">
					<a href="./nrplaygame.php?user=$_SESSION[username]" class="link">Play!</a>
			</li>
			</li>
	_END;

	if($_SESSION['user_type'] == "teacher"){
			echo <<<_END
			<li class="button">
					<a href="./add_remove_problem_number_recognition.php?user=$_SESSION[username]" class="link">Add a Problem</a>
			</li>
			_END;
	}
?>
