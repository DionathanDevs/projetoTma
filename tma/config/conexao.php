<?php
require 'definesql.php';

global $db;

try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

} catch(PDOException $e) {
    echo "ERROR: ".$e->getMessage();
    exit;
}






?>