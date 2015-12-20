<?php
/* MySQL Config */
#$conn = mysqli_connect("ttrss-db.cksuugsxlv6c.eu-west-1.rds.amazonaws.com", "ttrss", "+wUnv\:VT7#CN3U;9Il") 
#or die ("Connection refused"); 
#mysqli_select_db($conn,"topgear")
#or die ("Database does not exist"); 
#$result = mysqli_query($conn,"SELECT * FROM `downloads` WHERE 1"); 
#print_r($sql); 

/*include("verbindung.php"); 
while($row = mysqli_fetch_object($result)) {
	echo $row->Episode;
} */
$season = $_POST["season"]; 
$episode = $_POST["episode"]; 

require("verbindung.php"); 
function checkDownloaded($season, $episode) {
	require("verbindung.php"); 
	$result = mysqli_query($conn,"SELECT `ID` FROM `downloads` WHERE `Season`=$season and `Episode`=$episode LIMIT 1"); 
	if (mysqli_fetch_array($result) == true) {
#		echo "Staffel ",$season," Folge ",$episode," vorhanden.";  
		return true;
	}	 
	else 
#		echo "Staffel ", $season," Folge ",$episode," nicht vorhanden.";
		return false;
}

#echo checkDownloaded($season,$episode);
if (checkDownloaded($season,$episode) == true) {
	echo "Staffel ",$season," Folge ",$episode," vorhanden.";
}
else 
	echo "Staffel ", $season," Folge ",$episode," nicht vorhanden.";

?> 
