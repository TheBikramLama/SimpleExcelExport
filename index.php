<?php

require('SimpleXLSXGen.php');

$data = [
	[
		"name" => "Bikram Lama",
		"email" => "contact@bikramlama.com.np",
		"phone" => "9808134818"
	],
	[
		"name" => "Suraj Shrestha",
		"email" => "admin@surajshr.com.np",
		"phone" => "9808134818"
	]
];
$file_name = "exported-at-".date('Y-m-d');

// Download in excel
$xlsx = SimpleXLSXGen::fromArray( $data );
$xlsx->downloadAs("{$file_name}.xlsx");
exit;