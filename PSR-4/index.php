<?php
require __DIR__ . '/vendor/autoload.php';

use Viblo\Controllers\HomeController;
use Viblo\Repositories\HomeRepository;

$homeCtrl = new HomeController;
$homeRps = new HomeRepository;

print_r($homeCtrl->actionIndex());
$homeRps->hello(); // Hello, I am Minh - vì đã được load thành công