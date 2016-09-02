<?php

	// Constants
	define("TITLE", "Arrays");

	// Variables
	$my_name = "Jonas";
	
	// Arrays
	$age_group = array("child", "teenager", "adult");
	
	$handlebar = array(
					"name" => "Handlebar",
					"color" => "black"
				);

	$fu_manchu = array(
					"name" => "Fu Manchu",
					"color" => "brown"
				);

	$salvador_dali = array(
					"name" => "Salvador Dali",
					"color" => "blonde"
				);

	$gentlemen = array(
					array(
						"first_name" => "Carter",
						"country" => "Canada"
					),
					
					array(
						"first_name" => "Rodrigo",
						"country" => "Uruguay"
					),
					
					array(
						"first_name" => "Giovanni",
						"country" => "Italy"
					)
				);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="../assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="../assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				
				<h3><?php echo $gentlemen[0]["first_name"]?> from <?php echo $gentlemen[0]["country"]?></h3>
				<p><strong><?php echo $gentlemen[0]["first_name"]?></strong> is quite the <strong><?php echo $age_group[2]?></strong>! He sports a solid <strong><?php echo $handlebar["name"]; ?></strong> Moustache that is <strong><?php echo $handlebar["color"]?></strong> in colour.</p>
				
				<h3><?php echo $gentlemen[1]["first_name"]?> from <?php echo $gentlemen[1]["country"]?></h3>
				<p><strong><?php echo $gentlemen[1]["first_name"]?></strong> is a rather dapper <strong><?php echo $age_group[1]?></strong>! He proudly wears a <strong><?php echo $fu_manchu["name"]; ?></strong> moustache that is coloured gentle <strong><?php echo $fu_manchu["color"]?></strong>.</p>
				
				<h3><?php echo $gentlemen[2]["first_name"]?> from <?php echo $gentlemen[2]["country"]?></h3>
				<p><strong><?php echo $gentlemen[2]["first_name"]?></strong> might seem too young for a 'stache because he is a <strong><?php echo $age_group[0]?></strong>! But, he proudly displays his <strong><?php echo $salvador_dali["name"]; ?></strong> moustache at school! Although, It's a little hard to see because it's light <strong><?php echo $salvador_dali["color"]?></strong>.</p>

			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->
			
			<hr>
			
			<small>&copy;<?php echo date('Y'); ?> - <?php echo $my_name; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
