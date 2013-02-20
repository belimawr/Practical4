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
				<h2 id="navigation"> Navigation </h2>
				<ul>
					<LI><A HREF=index.php>Home</A></LI></BR>
					<li><a href=addEntry2.html>Papers Submission</a></li></br>
					<li><a href=viewAll.php>Key Dates </a></li></br>
					<li><a href=viewAll.php>Registration </a></li></br>
					<li><a href=viewAll.php>Workshops </a></li></br>
					<li><a href=contact.php>Contact Us </a></li></br>
					<li><a href=viewAll.php>Sponsors </a></li></br>
				</ul>
			</div>
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
