<!DOCTYPE html>
<html>
<head>
	<title>foreach.....</title>
</head>
<body>
	<?php
	// $color = array("red","green","yellow","blue");

	// foreach($color as $value){
	// 	echo "$value<br>";
	// }

	$age = array("tamil" =>24, 'san'=>25,"sam"=>45,"ram"=>50,"som"=>67);
	foreach ($age as $key=> $value) {
		echo "$key = $value <br>";
	}
	?>

</body>
</html>