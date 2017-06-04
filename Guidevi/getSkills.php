
<?php

require_once 'db_connect.php';	
$q = intval($_GET['q']);

// $sql = "SELECT skills FROM omraden WHERE id = $q";
$sql = "select y.skills from yrken as y where y.omrade = ".$q;
$result = $con->query($sql);

$skills = [];

while($row = $result->fetch_row()){ 
$skills = array_merge($skills, explode(",", $row[0]));

}
$words = array_unique($skills);

echo "<h1>Skills</h1>";

/*$row = $result->fetch_row(); 

$words = explode (",", $row[0]);*/

foreach($words as $key) {
	echo "<button type='button' name='0' value='".$key."' class='skills'>".$key."</button>";
}

/*$sqly = "SELECT yrken FROM omraden";
$resulty = $con->query($sqly);
while ($rowy = $resulty->fetch_row()) {
	echo $rowy[0];
}*/

echo "<br><button class='match_me' type='button' name='submit' onclick='draw(".$q.")'>Match me!</button>";


/*for ($row = $result->fetch_row()) {
	echo "<button>".$row['skills']."</button>";
}*/

/*$q = intval($_GET['q']);

$ind = array_search('q',$names);
$words = $keywords[$ind];

foreach($words as $key) {
	echo "<button>".$key."</button>";
}*/

?>
