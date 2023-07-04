<?php

require 'vendor/autoload.php';

use Ryan\DesignPatternsPhp\Strategy\MessageSender;
use Ryan\DesignPatternsPhp\Strategy\SMSSender;

echo '--- Design Patterns : Strategy ---' . PHP_EOL;

$messageSender = new MessageSender();
echo '- Default strategy : email - send()' . PHP_EOL;
$messageSender->send();
echo '- Set strategy : SMS - send()' . PHP_EOL;
$messageSender->setSenderStrategy(new SMSSender());
$messageSender->send();

echo PHP_EOL . 'We can have a class for each strategy and easily swap without impacting the client code.' . PHP_EOL;
