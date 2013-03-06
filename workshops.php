<html> 

<body>
	<?php include 'templates.php'; ?>
	 <link rel="stylesheet" type="text/css" href="index.css">

		<?php name_logo(); ?>	
		<div id="container">
		
		

			<?php print_menu(); ?>
			<div id="content">
				<h1> Workshops </h1>
				<div class ="speaker">
					<img class ="speakerImage" src="Mark Dunlop.jpg" alt="mark"> 
					<div class = "speakerText">
						<h3>Designing an Elegant Mobile User Experience Across Multiple Devices and Platforms</h3>
					</div>		
				</div>
				
			 <div class="speaker"> 
					
					<img class ="speakerImage" src="GeorgeWeir.jpg" alt="george"> 
					<div class = "speakerText">
						<h3> HTML5 & CSS3 Masterclass </h3>
					</div>
					</div>
			 
			  <div class="speaker"> 
			   <img class ="speakerImage" src="Eva.jpg" alt="eva"> 			 
				<div class = "speakerText">
					<h3>Interaction Design Beyond the Wireframe </h3>
				</div>
			</div>
			  
			 
			 <div class="speaker"> 
			 <img class ="speakerImage" src="Duncan.jpg" alt="duncan"> 
				<div class ="speakerText">
					<h3>Adding Realtime Event Handling to Any Website or App</h3>
				</div>
			</div>
		</div>
		<?php print_footnote() ?>
	</div>
 </body>
</html>


