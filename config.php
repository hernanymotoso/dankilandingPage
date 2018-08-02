<?php
require 'environment.php';
define("BASE_URL", "http://localhost/landingPage");
global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'danki';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else{
    $config['dbname'] = 'danki';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>