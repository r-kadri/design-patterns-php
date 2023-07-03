<?php

use Ryan\DesignPatternsPhp\Singleton\Config;

require 'vendor/autoload.php';

echo '--- Design Patterns : Singleton ---' . PHP_EOL;

for ($i=1; $i < 4; $i++) { 
    echo(Config::getInstance()->welcome() . PHP_EOL);
}

echo PHP_EOL . 'The getInstance() method from Config.php has been called 3 times but only one object has been instantiated.' . PHP_EOL;
