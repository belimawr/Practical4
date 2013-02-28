<html> 
<body>
	<?php include 'templates.php'; ?>
	 <link rel="stylesheet" type="text/css" href="index.css">

		<?php name_logo(); ?>	
		<div id="container">	

			<?php print_menu(); ?>
			<div id="content">
				<h2 id="texttitle">International Conference of Web Developers</h2><br>
				<h3> Registration</h3>

				<div id="regist_form">
				<form method="POST" action="register.php">
                                         First name: <input type="text" name="fname"><br>
					 Surname: <input type="text" name="sname"><br>
                                         E-mail: <input type="text" name="email"><br>
					 University: <input type="text" name="university"><br>
					 Address: <input type="text" name="address"><br>
					 
                                         <!-- Abstract: <br><textarea rows="30" cols="90"> Type your abstract here. </textarea><br><br> -->
                                         <input id="sub" type="submit" value="Submit">
                                 </form>
				</div>
				
			</div>
		</div>
		<?php print_footnote() ?>
	</div>
 </body>
</html>


