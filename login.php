<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- Include JS File Here -->
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
	</head>
<body>
	<style type="text/css">
	body{
		background-color:  #F7DAD4;
	}
	h2{
		font-family: Impact;
		font-size: 50px;
	}
	.box{
		width: 200px;
		height: 30px;
		font-family: Arial;
		font-size: 25px;
		background-color: #236AB9;
	}
	.label{
		font-family: Arial;
		font-size: 25px;
	}
	#login_info{
		text-align: center;
	}
	#checkbox{
		background-color: #FD3A0F
	}
	</style>
	<form action="check_login.php" method="post" id="login_info">
		<h2>Welcome to Math Game</h2>
		<tag class="label">Userame:</tag>
		<input type="text" name="username" id="username" class="box" placeholder="Name" />
		<br/><br/>
		<tag2 class="label">Password:</tag2>
		<input type="password" name="password" id="password" class="box" placeholder="Password" /><br/><br/>

		<input type="radio" name="account_type" id="checkbox" value="teacher">
		<label for="teacher" class="label">Teacher</label>
		<input type="radio" name="account_type" id="checkbox"  value="student">
		<label for="student" class="label">Student</label><br><br>

		<input type="submit" name="login" id="button" value="Login" />
		<input type="submit" name="create_account" id="button" value="Create Account" />


	</form>

</body>
</html>
