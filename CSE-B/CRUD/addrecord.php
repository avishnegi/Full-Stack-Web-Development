<?php
include('configure.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Input form</title>
</head>
<body>
   <form action="add.php" method="post">
   	ID: <input type="text" name="id" placeholder="enter ID"><br>
   	Name: <input type="text" name="username"><br>
   	AGE: <input type="text" name="age" placeholder="enter age"><br>
   	CONTACT: <input type="text" name="contact" placeholder="enter contact"><br>
   	EMAIL: <input type="text" name="email" placeholder="enter email">
   	<br>
   	<input type="submit" name="btn">
   </form>
</body>
</html>