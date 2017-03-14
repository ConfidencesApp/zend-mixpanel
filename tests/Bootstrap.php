<?php
if (!($loader = @include __DIR__ . '/../vendor/autoload.php')
    && !($loader = @include __DIR__ . '/../../../autoload.php')
) {
    throw new RuntimeException('vendor/autoload.php could not be found. Did you run `php composer.phar install`?');
}

/* @var $loader \Composer\Autoload\ClassLoader */
$loader->add('ConfidencesTest\\ZendMixpanel\\', __DIR__);
$loader->addClassMap(array('Confidences\ZendMixpanel\Module' => __DIR__ . '/../Module.php'));

if (!$config = @include __DIR__ . '/TestConfiguration.php') {
    $config = require __DIR__ . '/TestConfiguration.php.dist';
}

ConfidencesTest\ZendMixpanel\Util\ServiceManagerFactory::setConfig($config);
