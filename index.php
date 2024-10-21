<?php

use App\Router\Router;

define('ROOT', dirname(__DIR__));

require "vendor/autoload.php";

$routeur = new Router();
$routeur->start();