<?php

// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';

// Create a new application
$application = new Hazaar\Application(APPLICATION_ENV);

//Bootstrap, and run it
$application->bootstrap()->run();
