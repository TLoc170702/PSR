<?php
require __DIR__ . '/vendor/autoload.php';

use Controllers\HomeController;
use Repositories\HomeRepository;


$homeCtrl = new HomeController;
$homeRps = new HomeRepository;


print_r($homeCtrl->actionIndex());
print_r($homeRps->actionIndex());