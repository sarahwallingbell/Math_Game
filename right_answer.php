<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php

	session_start();
	$user = $_SESSION["username"];

	
	echo <<<_END
    That is correct!
    <form action="nrplaygame.php" method="post" id="form_id">
    	<input type="submit" name="next_problem" id="next_problem" value="Next Problem" />
    </form>
    _END;
    ?>
</body>
</html>
