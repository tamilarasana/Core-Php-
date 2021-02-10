<?php
  $cookie_name = "user";
  $coookie_value = "process";
  setcookie($cookie_name, $coookie_value, time()+60, "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
</head>
<body>
</body>
	<?php
	if(!isset($_COOKIE[$cookie_name])){
		echo "Cooki is not set";
		}else{
			echo "Cookie is set";
			echo "Value is".$_COOKIE[$cookie_name];
		}
	?>


</body>
</html>