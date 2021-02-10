<!DOCTYPEhtml>
<html>
<body>
<form method="POST">
      Name : <input type="text" name="name"><br>
      Email: <input type="text" name="email"><br>
<button>Submit</button>
</form>
 
  Your Name : <?php echo $_POST["name"];?><br>
  Your Email Id: <?php echo$_POST["email"];?><br>

 
</body>
</html>

