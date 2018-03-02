<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/ronyImoveis/");
	$config['dbname']='dmrimoveis_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		//define("BASE_URL", "http://negociosimobiliarios.com.br/ronyImoveis");
        $config['dbname']='dmrimoveis_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}


