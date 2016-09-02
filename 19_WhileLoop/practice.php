<?php
	
	// Constants
	define("TITLE", "While Loop");
	
	// Custom Variable
	$myName = "Jonas";
	$lessonNum = 19;

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lessonNum; ?>: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<?php
				 
					// Set a variable with your starting number
					$startingNum = 10;
					
					// While $startingNum is less than or equal to 20
					while ($startingNum <= 20){
						
						// Echo the value of the variable on the screen
						echo $startingNum . "<br>";
						
						// Then increment the value by 1
						$startingNum++;
						
					}
				 
				?>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $myName; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
