<?php

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

foreach($users as $key => $name ){
    echo $name["firstName"] . " ";
    echo $name["lastName"];
    echo "<br>";
};

?>

