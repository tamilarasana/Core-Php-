<!DOCTYPE html>
<html>
<head>
	<title>Classes and Object</title>
</head>
<body>
	<?php
	//  class Fruit {
 // 	 // Properties
 // 	 public $name;
 // 	 public $color;

 // 	 // Methods
 // 	 function set_name($name) {
 //     $this->name = $name;
 //     }
 //     function get_name() {
 //     return $this->name;
 //     }
 //    }

 //    $apple = new Fruit();
 //    $banana = new Fruit();
 //    $apple->set_name('Apple');
 //    $banana->set_name('Banana');

	// echo $apple->get_name();
	// echo "<br>";
	// echo $banana->get_name();
	class Fruit{
		public $name;
		public $color;
	}

	function set_name($name)
	{
		$this->name = $name;
	}
	function get_name()
	{
		return $thsi->name;
	}
	$apple = new Fruit();
	$banana = new Fruit();

	$apple->set_name('Apple');
	$banana -> set_name("mental");
	echo $apple ->get_name();
	?>

</body>
</html>