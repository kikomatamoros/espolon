<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver'=>'mysql',
    'host' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PASS,
    'database' => DB_NAME,
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'host' => '',
]);

$capsule->bootEloquent();