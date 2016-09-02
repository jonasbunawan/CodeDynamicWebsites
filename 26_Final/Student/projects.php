<?php

	define("TITLE", "Projects | Jonas Bunawan");
	include("includes/header.php");

?>

	<div id="menu-items">
	
		<h1>My Project</h1>
		<p>Here is a few project that I have ever done during my learning as well as professional IT experience</p>
		<p><em>Click any project to get more details: </em></p>
		
		<hr>
		
		<ul>
			<?php
				
				foreach($projects as $project => $item){

			?>
			
			<li><a href="project.php?item=<?php echo $project; ?>"><?php echo $item['title'] . " - " . $item['year']; ?></a></li>
			
			<?php
			
				}
			
			?>
		</ul>
	
		<hr>
	</div><!-- menu-items -->

<?php include("includes/footer.php"); ?>