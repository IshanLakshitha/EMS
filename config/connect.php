<?php
require_once('config/config.php');
try {
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo $e->getMessage();
}
