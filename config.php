<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/ronyImoveis_1/");
	$config['dbname']='dmrimoveis_db4';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		define("BASE_URL", "http://devmg.pe.hu/ronyImoveis/");
        $config['dbname']='u708362941_dmr';
	$config['host']='localhost';
	$config['dbuser']='u708362941_dmr';
	$config['dbpass']='dmrimoveis';
}


