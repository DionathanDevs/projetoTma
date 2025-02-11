<?php
define('SERVER_MYSQL', 'development'); 


$config = array();


if( SERVER_MYSQL == 'development') {
    $config['dbname'] = 'cgnbe_oem';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';

} else {
    $config['dbname'] = '';
    $config['host'] = '';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
}


?>