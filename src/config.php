<?php 

return [
	'database' => [
		'driver' => 'pdo_mysql',
		'host' => 'localhost',
		'user' => 'user001',
		'password' => 'password001',
		'dbname' => 'project_assoc',
		'charset'  => 'utf8',
    	'driverOptions' => array(
        1002 => 'SET NAMES utf8')
	],

	'twig' => [
		'dir' => __DIR__,
		'cashe' => __DIR__.'/../cashe'
	]
];