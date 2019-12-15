<?php

require 'vendor/autoload.php';

use App\controllers;
use App\models;

#echo HelloWord();

// $c1 = new Class1();
// $c2 = new Class2();
// $c3 = new Class3();

$x = new App\controllers\UserController();
new App\models\User();


