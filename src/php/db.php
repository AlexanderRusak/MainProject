<?php
	/*require_once 'queries.php';
	$host = 'localhost';
    $db   = 'ResumererDB';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
    	 $pdo = new PDO($dsn, $user, $pass, $opt);
    	 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    	 $result=$pdo->exec(SQL_CREATE_MENU_TABLE);
    } catch (Exception $e) {
    	exit(e->getMessage());
    }
   
*/



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ResumererDB');
$connection =mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$base_url='http://src/';
//ini_set('display_errors','On');
//error_reporting('E_ALL');
?>