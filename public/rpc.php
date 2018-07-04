<?php

use Delz\PhalconPlus\App\HproseHttpApp;

require __DIR__ . '/../vendor/autoload.php';

$app = new HproseHttpApp('test');
$app->run();