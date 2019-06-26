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
        $config['dbname']='u265720882_dmr';
	$config['host']='mysql.hostinger.com.br';
	$config['dbuser']='u265720882_dmr';
	$config['dbpass']='rgvs@2018';
}


