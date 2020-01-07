<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$comments=$_REQUEST['comments'];
$age=$_REQUEST['age'];
$gender=$_REQUEST['gender'];

echo "<p>Thanks <strong>$name</strong>, for the following comment:</p>
<pre>$comments</pre>
<p>We will reply to you at <em>$email</em>.</p>

<p>Your age and gender were entered as <strong>$age</strong> ans <strong>$gender</strong> respectively.</p>";

?>
</body>
</html>