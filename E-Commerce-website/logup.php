<html>
<head>
	<link rel="stylesheet" type="text/css" href="Success.css">
</head>
<header></header>

<?php
	extract($_GET);
	$db=mysqli_connect('localhost:3306','root','','swebsite');

	if(isset($db))
	{
		$email = $_GET['email'];
		$passwrd = $_GET['passwrd'];

		$sql="SELECT * FROM `signup_and_login` WHERE email='$email' AND passwrd='$passwrd' ";
		$result=mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo '<script type="text/javascript">
					function loadnew(){
						window.location="postlogin.html";
					}
					</script>
					<body onload="setTimeout(\'loadnew()\',3000)">
					<h2 id="done">This Page will be redirected in 3 seconds B)</h2>
					</body>';
		}
		else {
			echo '<h2 id = "done">"Your Email or Password is wrong...Please try again."</h2>';
		}
	}
?>

</html>