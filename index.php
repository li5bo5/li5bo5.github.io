<?php
$dir =  dirname(__FILE__);
$file = scandir($dir);
$s=sizeof($file);
$x=rand(0,$s);
while(substr($file[$x],-3)!="jpg" && substr($file[$x],-3)!="png"){
	$x=rand(0,$s);
}
$img="http://li5bo5.github.io/".$file[$x];
// echo "<img src=$img>";
header("location:$img");
?>
