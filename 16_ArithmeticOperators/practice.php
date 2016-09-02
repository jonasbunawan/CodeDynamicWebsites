<?php
	
	// Constants
	define("TITLE", "Arithmetic Operators");
	
	// Custom Variables
	$myName = "Jonas";
	$lessonNum = 16;

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
				
				<h3>Addition <code>+</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a +$b);
					
					echo "<p>$a + $b is equal to $c</p>";
				?>
				
				<h3>Subtraction <code>-</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a - $b);
					
					echo "<p>$a - $b is equal to $c</p>";
				?>
				
				<h3>Multiplication <code>*</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a * $b);
					
					echo "<p>$a &times; $b is equal to $c</p>";
				?>
				
				<h3>Division <code>/</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a / $b);
					
					echo "<p>$a / $b is equal to $c</p>";
				?>
				
				<h3>Modulus <code>%</code></h3>
				<?php
					$a = 7;
					$b = 19;
					$c = ($a % $b);
					
					echo "<p>$a % $b is equal to $c</p>";
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
