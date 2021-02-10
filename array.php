<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
	<?php
	//Index Array
	$name = array("sam","ram","som",23,"ravi",45);
	echo " details "  . $name[0] . "<br>" . $name[1] . "<br>" . $name[2] . "<br>" . $name[3] . "<br>" . $name[4] . "<br>" . $name[5] ."<br>";

	$arrlength = count($name);

	for($x = 0; $x < $arrlength; $x++) {
 		 echo $name[$x];
  		 echo "<br>";
	}


	//Associative Array

	$age  = array("peter" =>"77","sam"=>"88","ram"=>"88");
	echo "peter is".$age['peter']."years old<br>";
	echo "sam is" .$age['sam']."years old<br>";

	foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
    }

     //Multidimisonal Array

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>



</body>
</html>