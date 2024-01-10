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
    print_r ($name["firstName"] . " ");
    print_r ($name["lastName"]);
    echo "<br>";
};

?>

