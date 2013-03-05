<?php
    // Function to authenticate
function authenticated($username, $password)
{
	if($username == "admin" && $password == "12345")
		return true;
	else
		return false;
}

    // Assign username and password from $_SERVER global array

    $username = $_SERVER["PHP_AUTH_USER"];
    $password = $_SERVER["PHP_AUTH_PW"];

    // Decide whether to show blog entry form, or deny access
    if (!authenticated($username, $password)) {

        // Credentials either:
            // not sent (1st time script is called)
            // credentials do not match database

        // Display HTTP Authentication Challenge
        header("WWW-Authenticate: Basic Realm=\"<username>='admin'; <password>='12345'\"");
        header("HTTP/1.1 401 Unauthorised");

        // Print a message about incorrect credentials


        exit;
    }

    else {

	print("<html> 
		<body>");
	include 'templates.php';
	include 'db.php';
	print(" <link rel=\"stylesheet\" type=\"text/css\" href=\"index.css\">");

		name_logo();
		print("<div id=\"container\">");	

			print_menu();
			print("<div id=\"content\">
				<h2 id=\"texttitle\">International Conference of Web Developers</h2><br>
				<h3>Messages:</h3>");
				mysql_connect($host, $user, $pass);
				mysql_select_db($database) or die(mysql_error());

				$messages = mysql_query("SELECT * from $contactTable");
				while ($row = mysql_fetch_array($messages))
				{
					print("<p class=\"messageText\">");
					print("Name: ".$row['name']."<BR>E-mail: ".$row['email']."<BR>Message: ".$row['message']."<BR><BR>");
					print("</p>");
				}
				print("<h3>Registrations</h3>");
				$regs = mysql_query("SELECT * from $registrationTable");
				while ($row = mysql_fetch_array($regs))
				{
					print("<p class=\"messageText\">");
					print("Name: ".$row['fname']."<BR>Surname: ".$row['sname']."E-mail: ".$row['email']."<BR>University: ".$row['university']."<BR>Address: ".$row['address']."<BR><BR>");
					print("</p>");
				}
			print("</div>");
			print_footnote();

	print("	</div>
 </body>
</html>");
        // Correct credentials provided, print the blog entry form
    }
?>
