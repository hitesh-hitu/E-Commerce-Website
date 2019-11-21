<html>
<head>
	<link rel="stylesheet" type="text/css" href="Success.css">
</head>
<header></header>

<?php
	extract($_POST);
	$db=mysqli_connect('localhost:3306','root','','scart');

	if(isset($db))
	{
		$stmt = "INSERT INTO carty VALUES ('".$pname."','".$amount."','".$size."')";
		$us=mysqli_query($db,$stmt);
		
		if ($us) {
			echo '<h2 id = "done">"Product Successfully Added to Cart!"</h2>';	
		}
		else {
			echo '<h2 id = "done">"Sorry We could not Process your Request :("</h2>';
		}
	}
?>

</html>