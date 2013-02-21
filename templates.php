<?php
	function print_footnote()
	{
		$footnote = <<<EOT
				<DIV id="footer">
					<P> </BR>Website developed by Elen, James, Larissa, Sara, Tiago </P>
				</DIV>
EOT;

		print($footnote);
	}

	function print_menu()
	{
		$menu = <<<EOT
		<div id="menu">
			<!--<h2 id="navigation"> Menu </h2>-->
			<ul>
				<li><span><a href=index.php>Home</a></span></li>
				<li><span><a href=papers.php>Papers Submission</a></span></li>
				<li><span><a href=keydates.php>Key Dates </a></span></li>
				<li><span><a href=registration.php>Registration </a></span></li>
				<li><span><a href=workshops.php>Workshops </a></span></li>
				<li><span><a href=sponsors.php>Sponsors </a></span></li>

			</ul>

			<div id="contact">
				<h2> Contact Us </h2>
				<form>
					Name: <input type="text" name="name"><br>
					E-mail: <input type="text" name="email"><br><br>
					<textarea rows="10" cols="20"> Type your message here </textarea><br><br>
					<input id="sub" type="submit" value="Submit">
				</form>
			</div>
			<br><br><br><br>
			<a href=http://facebook.com><img id="f_logo" src="f_logo.png" alt="facebook_logo"></a> <span id="f_text"> Find us on Facebook! </span><br><br><br><br><br><br>
			<!--<a href="https://twitter.com/icwd2014" class="twitter-follow-button" style="margin-left:23px;" data-show-count="false" data-size="large">Follow @icwd2014</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> <!-- THIS ONLY WORKS RUNNING ON A SERVER -->
			
		</div>

			<a href=http://facebook.com><img id="f_logo" src="f_logo.png" alt="facebook_logo"></a> <span id="f_text"> Find us on Facebook! </span><br><br><br><br><br><br>
EOT;
		print($menu);

	}

	function name_logo()
	{
		$logo = <<<EOT
			<div id="header">
				<div id="headerlogo"> <img id="logo" src="logo.jpg" alt="logo"> </div>
				<div id="title"><h1>ICWD 2014 </br> May 15th - 20th 2014 </br> Glasgow, United Kingdom </h1> </div>
			</div>
EOT;
		print($logo);
	}

?>
