<?php 

return [
	'database' => [
		'driver' => 'pdo_mysql',
		'host' => 'localhost',
		'user' => 'user001',
		'password' => 'password001',
		'dbname' => 'project_assoc'
	],

	'twig' => [
		'dir' => __DIR__,
		'cashe' => __DIR__.'/../cashe'
	]
];