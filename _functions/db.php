<?php 

require_once("config.php");


//create new pdo object and add error handling

function db_connect() {
    $dsn = "mysql:host=". DB_HOST .";dbname=" . DB_NAME . ";charset=utf8";
    $opt = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    return new PDO($dsn, DB_USER, DB_PASS, $opt);
}
