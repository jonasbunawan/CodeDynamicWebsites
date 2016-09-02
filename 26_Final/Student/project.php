<?php

	define("TITLE", "Project | Jonas Bunawan");
	include("includes/header.php");
	
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	
	function strip_bad_chars( $input ){
		$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
		return $output;
	};
	
	if (isset($_GET['item'])) {
		$project = $projects[strip_bad_chars($_GET['item'])];
	};
	
?>

	<hr>
	
	<div id="dish">
		<h5><?php echo $project['title'] . " - " . $project['year']; ?></h5>
		<p><?php echo $project['institution']; ?></p>
		<p><?php echo $project['description']; ?></p>
		<p>Solution: <a href="https://<?php echo $project['link']; ?>"><?php echo $project['link']; ?></a></p>
	</div><!-- dish -->
	
	<hr>
	
	<a href="projects.php" class="button previous">&laquo; Back to Projects List</a>

<?php include("includes/footer.php"); ?>