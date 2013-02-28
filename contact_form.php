<html>
 <HEAD>
  <link rel="stylesheet" type="text/css" href="index.css">
 </HEAD>
 <body>
	<?php 	include 'templates.php';
			include 'db.php';
	mysql_connect($host, $user, $pass);
	mysql_select_db($database) or die(mysql_error());

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	mysql_query("insert into $contactTable (_id, name, email, message) values(null, '$name', '$email' , '$message')");


		name_logo();
	?>

			
		<div id="container">
		<?php print_menu(); ?>


		<div id="content">
			<p id="message_sent"> Your message was recorded and will be answered as soon as possible </p>
		</div>

		<?php print_footnote(); ?>
	
	</div>
 </body>
</html>

