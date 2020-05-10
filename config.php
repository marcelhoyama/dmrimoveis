<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/dmrimoveis/");
	$config['dbname']='dmrimoveis_db4';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		define("BASE_URL", "https://www.dmrimoveiscabreuva.com.br/");
        $config['dbname']='';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}


