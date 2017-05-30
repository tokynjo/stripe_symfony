<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('STRIP',"vendor/stipe/stripe-php/init.php");
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
