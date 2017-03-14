<?php
namespace ConfidencesTest\ZendMixpanel;

use PHPUnit_Framework_TestCase as TestCase;
use Confidences\ZendMixpanel\Module;
use Zend\Loader;

class ModuleTest extends TestCase
{
    public function testModuleProvidesConfig()
    {
        $module = new Module;
        $config = $module->getConfig();

        $this->assertEquals('array', gettype($config));
    }

    public function testModuleAutoloader()
    {
        $module   = new Module;
        $actual   = $module->getAutoloaderConfig();
        $expected = array(
            Loader\AutoloaderFactory::STANDARD_AUTOLOADER => array(
                Loader\StandardAutoloader::LOAD_NS => array(
                    'Confidences\ZendMixpanel' => realpath(__DIR__ . '/../../../src') . '/',
                ),
            ),
        );
        $this->assertEquals($expected, $actual);
    }
}
