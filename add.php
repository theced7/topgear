<?php

include("verbindung.php"); 

#mysqli_query($conn, "INSERT INTO `downloads`(`Season`, `Episode`) VALUES (15,2)");

$i = 1; 
while($i < 8) {
	mysqli_query($conn, "INSERT INTO `downloads`(`Season`, `Episode`) VALUES (13,$i)");
	$i++; 
}
