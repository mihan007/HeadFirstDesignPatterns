<?php

use DesignPatterns\strategy\MiniDuckSimulator;

require_once 'vendor/autoload.php';

//Strategy
(new MiniDuckSimulator())->run();
