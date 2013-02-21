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
				<li><span><a href=index.html>Home</a></span></li>
				<li><span><a href=papers.html>Papers Submission</a></span></li>
				<li><span><a href=keydates.html>Key Dates </a></span></li>
				<li><span><a href=registration.html>Registration </a></span></li>
				<li><span><a href=workshops.html>Workshops </a></span></li>
				<li><span><a href=sponsors.html>Sponsors </a></span></li>

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
