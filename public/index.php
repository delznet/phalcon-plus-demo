<?php

use Delz\PhalconPlus\App\WebApp;

require __DIR__ . '/../vendor/autoload.php';

$app = new WebApp('test');
$app->setRootDir(__DIR__ .'/../');
$app->run();