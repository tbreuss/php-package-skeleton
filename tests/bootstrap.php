<?php

$autoloader = require dirname(__DIR__) . '/vendor/autoload.php';

// Register test classes
$autoloader->addPsr4('tebe\mvc\tests\\', __DIR__);
