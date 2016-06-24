<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="assets/style/w3.css">
	<link rel="stylesheet" href="assets/style/demo.css">
	<link rel="stylesheet" href="assets/style/theme_demo.css">	

<title>Show time</title>

</head>

<body class="w3-theme-l4">
	<div class="w3-container w3-theme-d3 w3-padding-large w3-center w3-border l12 s12">
		
		<h2 class="header_main w3-wide "><kbd><a href="demo.php">PRADHAN MANTRI</a></kbd></h2>
	
	</div>

	<div class="margin-top-bottom-10"></div>

	<?php
				$dir ="video/";
				$path = $_GET["path"];
				echo "	<div class='w3-container w3-padding w3-teal w3-center stream'>
				<video class='player' controls>
				<source src='".$dir."".$path."' type='video/mp4' >
			</video>
			</div> "

	?>

</body>

</html>


