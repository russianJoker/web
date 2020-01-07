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

echo "<p>Thanks <strong>$name</strong>, for the following comment:</p>
<pre>$comments</pre>
<p>We will reply to you at <em>$email</em>.</p>";

?>
</body>
</html>