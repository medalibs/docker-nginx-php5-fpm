<?php
$hostname = "192.168.1.52:3305";
$username = "root";
$password = "root";
$dbname = "test";
 
try {
        /*$pdo = new PDO("mysql:host=$hostname", $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$dbname = "`".str_replace("`","``",$dbname)."`";
	$pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");
	$pdo->query("use $dbname");*/


// connexion à Mysql sans base de données
$pdo = new PDO('mysql:host='.$hostname, $username, $password);

// création de la requête sql
// on teste avant si elle existe ou non (par sécurité)
$requete = "CREATE DATABASE IF NOT EXISTS `".$dbname."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
 
// on prépare et on exécute la requête
$pdo->prepare($requete)->execute();


    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
phpinfo();


