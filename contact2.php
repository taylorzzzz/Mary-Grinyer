<?php
	function displayForm()
	{
?>
<html>
	<head></head>
	<body>
		<form action = "<?php echo $_SERVER['DOCUMENT_URL']?>" method = "POST">
			<p><b>Name</b></p><input type = "text" name = "name"/>
			<p><b>Email</b></p><input type = "text" name = "email"/>
			<p><b>Message</b></p><textarea name = "message" rows = "10" cols = "40"></textarea><br/>
			<input type = "submit" value = "Send">
			<input type = "reset" value "Clear">
		</form>
	</body>
</html>
<?php
}
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$recipient = "taylortheward@gmail.com";
	$subject = "contact form";

	mail ($recipient, $subject, $message);
	echo "phpversion()";
?>