<!DOCTYPE html>
<?php
include('connection.php');?>

<html>
<head>
	<title></title>
</head>
<body>
<form name="Form" action="enterRecord.php"  method="post">
		Enrollment No: <input type="text" name="enroll_no" placeholder="Your Enrollment Number"><br>
  		Name: <input type="text" name="name" placeholder="Your Name"><br>
   		Age: <input type="" name="age" placeholder="Your Age"><br>
   		Course:<input type="" name="course" placeholder="Your Course"><br>
   		Branch:<input type="" name="branch" placeholder="Your Branch"><br>
   		Contact:<input type="" name="contact" placeholder="Your contact number"><br>
   		Email:<input type="" name="email" placeholder="Your email"><br>
  		<input type="submit" name="btn">
</form>

</body>
</html>