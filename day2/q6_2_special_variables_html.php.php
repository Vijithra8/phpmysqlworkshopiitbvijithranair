<!DOCTYPE html>
<html>
<head>
	<title>VI 2</title>
</head>
<body>
	<h1> Form </h1>
	<form method="POST" action="q6_2_special_variables_html.php.php">
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<input type="text" name="sub_1" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_2" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_3" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_4" placeholder="Enter Marks of Subject">
		<br>
		<input type="text" name="sub_5" placeholder="Enter Marks of Subject">
		<br>
		<input type="submit" value="Submit">
		<br>
	
	</form>

	<?php
	if ( isset( $_POST['submit'] ) ) {
		$name	=	$_POST['name'];
		$sub1 	=	$_POST['sub_1'];
		$sub2 	=	$_POST['sub_2'];
		$sub3 	=	$_POST['sub_3'];
		$sub4 	=	$_POST['sub_4'];
		$sub5	=	$_POST['sub_5'];

		$total	=	$sub1 + $sub2 + $sub3 + $sub4 + $sub5;

		$percentage = ($total/500)*100;
		echo $percentage;
	}



	?>


</body>
</html>
