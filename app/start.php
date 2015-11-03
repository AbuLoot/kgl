<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('VIEW_HEADER', VIEW_ROOT . '/templates/header.php');
define('VIEW_FOOTER', VIEW_ROOT . '/templates/footer.php');
define('BASE_URL', 'http://localhost/kgl/');

$db = new PDO('mysql:host=localhost;dbname=kgl', 'root', 'secret');

require 'functions.php';
