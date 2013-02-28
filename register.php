<html>
 <HEAD>
  <link rel="stylesheet" type="text/css" href="index.css">
 </HEAD>
 <body>

<?php
	include 'templates.php';
	include 'db.php';

        mysql_connect($host, $user, $pass);
        mysql_select_db($database) or die(mysql_error());

	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$email = $_POST['email'];
	$university = $_POST['university'];
	$address = $_POST['address'];

	mysql_query("insert into $registrationTable (_id, fname, sname, email, university, address) values(null, '$fname', '$sname', '$email', '$university', '$address')") or die(mysql_error());

	name_logo();
?>
	<div id="container">
		<?php print_menu(); ?>

		<div id="content">
			<p id="message_sent"> <?php print("$sname, $fname successfully registred!") ?></p>
		</div>

		<?php print_footnote(); ?>
	</div>
 </body>
</html>


