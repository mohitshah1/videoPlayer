<html>
<body>
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
	" <video width ='320' height='240' controls>
  <source src= '".$dir."".$value."' type='video/mp4'>
  

</video> ";
}



}

//print_r($a);
?>

 <video width ='320' height='240' controls>
  <source src="video/1949.09.16-Fast and Furry-ous(Jones)LT.avi" type='video/avi'>
  

</video> 

</body>

</html>