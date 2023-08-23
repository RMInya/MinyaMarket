<?php
include_once 'functions.php';
include_once 'DBfunctions.php';

echo "<link rel='stylesheet' href=/style.css>";
$routes = include_once 'routes.php';
run($_SERVER['REQUEST_URI'], $routes);
