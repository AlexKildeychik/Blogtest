<?php

require __DIR__ . '/autoload.php';


$users = \App\Models\User::findAll();
$find = \App\Models\User::findById(1);
$three = \App\Models\User::getLastThree();

include __DIR__. '/View/index.php';
