<html>
<?php include_once 'header.php'; ?>
<?php include_once 'menu.php'; ?>
<?php include_once 'leftblock.php'; ?>
<form action="query-registration.php" method="post">
<label>Login:</label><br>
<input type="text" name="login"><br>
<label>Password:</label><br>
<input type="password" name="password"><br>
<label>Name:</label><br>
<input type="text" name="name"><br>
<label>Surname:</label><br>
<input type="text" name="surname"><br>
<label>Birthday:</label><br>
<input type="date" name="birthday"><br><label>E-Mail:</label><br>
<input type="text" name="email"><br><br>
<input type="submit" name="submit"><br>

</form>
</div>
<?php include_once 'footer.php'; ?>
</html>