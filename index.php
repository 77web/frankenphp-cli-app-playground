<?php

use Nanaweb\Myhello\HelloCommand;
use Symfony\Component\Console\Application;

require __DIR__.'/vendor/autoload.php';

$app = new Application();
$app->add(new HelloCommand());
$app->setDefaultCommand('app:hello', true);
$app->run();
