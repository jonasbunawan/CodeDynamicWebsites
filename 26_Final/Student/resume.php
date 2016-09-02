<?php
	define("TITLE", "Resume | Jonas Bunawan");
	
	include('includes/header.php');

?>

	<div id="resume" class="cf">
		
		<h1>My Career Objective</h1>
		<p>My current objective is to find most suitable opportunity for me to learn IT in depth by getting into the industry where I believe that I can apply my knowledge that I have and learn even more through actual day to day (BAU) practice.</p>
		
		<hr>
		
		<div id="row">
			<h1>Education Background</h1>
			
			<?php
				
				foreach($resumeEducation as $education){
				
			?>
			
				<div class="member">
					<h5><?php echo $education['major']; ?></h5>
					<p><?php echo $education['institution']; ?></p>
					<p><?php echo $education['year']; ?></p>
					<p><?php echo $education['description']; ?></p>
					<p><?php echo $education['grade']; ?></p>
				</div><!-- member -->
			
			<?php
			
				}
			
			?>
		</div>
		
		<div id="row">
			<h1>Working Experience</h1>
			
			<?php
				
				foreach($resumeWorkExp as $WorkExp){
				
			?>
			
				<div class="member">
					<h5><?php echo $WorkExp['company']; ?></h5>
					<p><?php echo $WorkExp['industry']; ?></p>
					<p><?php echo $WorkExp['role']; ?></p>
					<p><?php echo $WorkExp['year']; ?></p>
					<p><?php echo $WorkExp['description']; ?></p>
				</div><!-- member -->
			
			<?php
			
				}
			
			?>
		</div>
		
	</div><!-- resume -->

<?php
	include('includes/footer.php');
?>