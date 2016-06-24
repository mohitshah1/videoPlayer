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
	<div class="w3-container w3-theme-d3 w3-padding-large w3-center l12 s12">
		
		<h2 class="header_main w3-wide "><kbd>PRADHAN MANTRI</kbd></h2>
	
	</div>

	<div class="margin-top-bottom-10"></div>

	<div class="w3-row s12">

		<div class="flex-container w3-teal ">
<?php
error_reporting(E_ALL);

$dir ="video/";
$a= scandir($dir);
//echo($a[4]);
/*for($x=2;$x=sizeof($a);$x++){
	echo($a[$x]);
}
*/
foreach ($a as $key => $value) {

if($value=="."){
	continue;
}	
elseif($value==".."){
	continue;
}
else {
	echo
	" 		
			<div class='flex-item w3-center  w3-col l4 s12'>
				<a href='http://localhost/college/client/video.php?path=".$value."'>
					<video>
				  		<source src='".$dir."".$value."' type='video/mp4'>
					</video>
				
				<p>'".$value."'</p>

				</a>


			</div> ";
}



}




	
			
?>
			
 		</div>

	</div>

</body>

</html>