<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Include JS File Here -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	</head>
<body>
	<form action="check_login.php" method="post" id="form_id">
		<h2>Welcome to Math Game</h2>
		Userame:
		<input type="text" name="username" id="username" placeholder="Name" />
		<br/><br/>
		Password:
		<input type="password" name="password" id="password" placeholder="Password" /><br/><br/>

		<input type="radio" name="account_type" id="teacher" value="teacher">
		<label for="teacher">Teacher</label>
		<input type="radio" name="account_type" id="student"  value="student">
		<label for="student">Student</label><br><br>

		<input type="submit" name="login" id="login" value="Login" />
		<input type="submit" name="create_account" id="create_account" value="Create Account" />


	</form>

</body>
</html>
