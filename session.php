<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
	<?php
		$_SESSSION["favcolor"] = 'green';
		$_SESSSION["favanimal"]="cat";
		echo "session variable set.";

	?>

</body>
</html>