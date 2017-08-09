<head>
<link href="style.css" rel="stylesheet">
<?php include_once 'connection.php'; ?>
</head>

<div class="header">
<div>This header 888</div><br>

<div class="loginform">
	<form action="login.php" method="post">
		<label>LOGIN:</label><br>
		<input type="text" name="name" placeholder="Insert login"><br><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password" placeholder="1234567">
		<input type="submit" name="submit" value="OK">
		<button formaction="registration.php">Registration</button>
	</form>
</div>
</div>