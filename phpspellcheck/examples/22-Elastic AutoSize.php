<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<title>PHPSpellCheck Example - Hello World</title>
</head>
<body>
	
<form id="form1" name="form1" action="">
	<h1>Hello World</h1>
	
<textarea cols="30" rows="4" style='min-height:100px;height:auto' >
Hello Worlb. 
</textarea> 

 

 

<?php
	require "../include.php";	//   "phpspellcheck/include.php" // Full file path to the include.php file in the phpspellcheck Folder

 
	$mySpell = new SpellAsYouType();
	$mySpell->InstallationPath = "../"; 	  
	$mySpell->Fields = "ALL"; 
	echo $mySpell->Activate();
?>



 </form>
</body>
</html>
