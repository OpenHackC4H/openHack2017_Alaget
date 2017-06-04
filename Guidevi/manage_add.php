<?php

require_once 'db_connect.php';

/*$person = $_POST['value'];
$jobs = [];
$jobSkills = [];
$jobNames = [];
$match = [];
$missing = [];

// echo json_encode($person);

$area = $_POST['area'];

$sql = "select y_n.namn, y.skills from yrken as y join yrken_namn as y_n on y.id = y_n.id where y.omrade = ". $area;

$result = $con->query($sql);
while($row = $result->fetch_row()){
$intersect = array_intersect($person, explode(",", $row[1]));
$missing[$row[0]] = array_diff(explode(",", $row[1]), $intersect);
$jobSkills[$row[0]] = explode(",", $row[1]);
$match[$row[0]] = count($intersect)/count(explode(",", $row[1]));
}


$maxs = array_keys($match, max($match));
$precent = $match[$maxs[0]];
$improve = $missing[$maxs[0]];
 
 /*	unset($match[$maxs[0]]);
	unset($improve[$maxs[0]]);
	unset($precent[$maxs[0]]);*/
// print_r([$precent, $maxs[0], $improve]);
// echo json_encode([$precent, $maxs[0], array_values($improve)]);
/*echo json_encode([$intersect, $missing, $match]);*/


/*$top = [];
for ($i = 0; $i < count($match); $i++){
	if($i == 5){break;}
	$maxs = array_keys($match, max($match));
	$precent = $match[$maxs[0]];
	$improve = $missing[$maxs[0]];
	array_push($top, json_encode([$precent, $maxs[0], array_values($improve)]));

	unset($match[$maxs[0]]);
	unset($improve[$maxs[0]]);
	unset($precent[$maxs[0]]);
}

print_r($top);*/

// echo json_encode($value);
// echo json_encode($area);

$person = $_POST['value'];
$match = [];
$names = [];
$missing = [];

$area = $_POST['area'];
$sql = "select y_n.namn, y.skills from yrken as y join yrken_namn as y_n on y.id = y_n.id where y.omrade = ". $area;
$result = $con->query($sql);

while($row = $result->fetch_row()){
    $intersect = array_intersect($person, explode(",", $row[1]));
    $missing[] = array_values(array_diff(explode(",", $row[1]), $intersect));
    $match[] = count($intersect)/count(explode(",", $row[1]));
    $names[] = $row[0];
}

echo json_encode([$names, $missing, $match]);

?>