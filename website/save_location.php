<?php 

$myfile = fopen("location.txt","w")
$information = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"]
fwrite($myfile, $information);
fclose($my_file);

?>