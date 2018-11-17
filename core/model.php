<?php
class model
{
protected $db;

	public function __construct() {
		try {
			global $config;

			
		
		$this->db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass'], array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
		} catch (PDOException $e) {
			echo "ERRO:".$e->getMessage();
		}

		
	}


}