<!DOCTYPE html>
<html>
<head>
	<title>file</title>
</head>
<body>

	<!-- Reading a file -->
	<?php
	 // $myfile= fopen("file.txt", "r")or  die("Unable to open"); 
	 // echo fgets($myfile);
	 // echo "<br>";
	 // echo fread($myfile,filesize("file.txt"));
	 // fclose($myfile);
	// $myfile = fopen("file.txt", "r")or("Unable to open");
	// echo fgets($myfile);
	 //while(!feof($myfile)){
	 	///echo fgets($myfile)."<br>";
	 //}
	 //fclose($myfile);

    $myfile = fopen("test.txt","w") or die("Unable to open");
    $txt = "The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.\n";
    fwrite($myfile, $txt);
    $txt = "If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive.\n";
    fwrite($myfile, $txt);
    fclose($myfile)
	 ?>

</body>
</html>