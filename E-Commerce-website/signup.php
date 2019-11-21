<html>

<head>
	<link rel="stylesheet" type="text/css" href="Success.css">
</head>
<header></header>

<?php
	extract($_POST);
	$db=mysqli_connect('localhost:3306','root','','swebsite');
	
	if(isset($db))
	{
		$stmt = "INSERT INTO signup_and_login VALUES ('".$uname."','".$email."','".$passwrd."')";
		$us=mysqli_query($db,$stmt);
		
		if ($us) {
			echo '<h2 id = "done">"Signed in Successfully"</h2>';
			echo '<div class="button">
					<a href="login.html" class = "btn">Go to Login Page</a>
				  </div>';	
		} else {
			echo '<h2 id = "done">"Sorry there was an error :( "</h2>';	
			echo '<div class="button">
					<a href="login.html" class = "btn">Go to Login Page"</a>
				  </div>';
		}
	}
?>
</html>