<!DOCTYPE html>
<html>
<head>
	<title>function</title>
</head>
<body>
	<?php

	function writeMsg(){
		echo "hello tamil,english,maths<br>";
	}
	writeMsg();

	//function Arguments 

	 function familyName($name, $age){
	 	echo "$name is  my name<br>";
	 	echo "$age is  my age<br>";
	 }
	 familyName("tamil",99);
	 familyName('sam',558);
	 

	 //using the return function

	 function addNumber(int $a,  int $b){
	 	$c = $a + $b;
	 	return $c;
	 }

	 echo addNumber(5, 20);

	 //passing value 
	 function add_num(float $a, float $b)
	 {
	 	return $a+ $b;
	 	
	 }
	  echo "<br>";
	 echo add_num(2.4,2.6);

	 //passing arguments by reference
	 //function mul_num($value)
	 function mul_num(&$value)
	 {
	 	$value+= 10;
	 }

	 $num = 5;
	 mul_num($num);
	 echo "<br>";
	 echo $num;
	 
	?>

</body>
</html>