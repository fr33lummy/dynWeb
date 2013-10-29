
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>test</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>

	
	<?php 
require_once('validator.php');
	if (isset($_POST['username'])){
		$message;
		if(isValidLength($_POST['username'],4)){
			 $message =  "valid username"; 
		} else {
			$message =  "not valid username";
			
		}
		echo $message;
		
} ?>

	
	
	<form method="POST" action="">
<dl>
<dt>Username</dt>
<dd><input type="text" name="username" value="" /></dd>
</dl>
<dl>
<dt></dt>
<dd><input type="submit" value="Check if username is valid"/></dd>
</dl>
</form>

	
	
</body>

</html>

