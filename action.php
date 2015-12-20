<?php
$season = $_POST["season"]; 
$episode = $_POST["episode"]; 

require("verbindung.php"); 
function checkDownloaded($season, $episode) {
	require("verbindung.php"); 
	$result = mysqli_query($conn,"SELECT `ID` FROM `downloads` WHERE `Season`=$season and `Episode`=$episode LIMIT 1"); 
	if (mysqli_fetch_array($result) == true) {
		return true;
	}	 
	else 
		return false;
}

if (checkDownloaded($season,$episode) == true) {
	echo "Staffel ",$season," Folge ",$episode," vorhanden.";
}
else 
	echo "Staffel ", $season," Folge ",$episode," nicht vorhanden.";

?> 
