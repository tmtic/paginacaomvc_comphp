<?php

require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') {
	define('BASE_URL', 'http://localhost/paginacaomvc/');
	$config['dbname'] = 'paginacaomvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define('BASE_URL', 'http://meusite.com.br/');
	$config['dbname'] = 'paginacaomvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

global $db;

try {
	$db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e){
	die('Erro: '.$e->getMessage());
}