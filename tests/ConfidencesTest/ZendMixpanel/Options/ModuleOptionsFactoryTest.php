<?php

namespace ConfidencesTest\ZendMixpanel\Options;

use ConfidencesTest\ZendMixpanel\Util\ServiceManagerFactory;
use Confidences\ZendMixpanel\Options\ModuleOptions as Options;
use Confidences\ZendMixpanel\Options\ModuleOptionsFactory as OptionsFactory;

class ModuleOptionsFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Confidences\ZendIntercom\Options\ModuleOptions::__invoke
     */
    public function testFactory()
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();
        $optionsFactory = new OptionsFactory();
        $this->assertInstanceOf(Options::class, $optionsFactory->__invoke($serviceManager, Options::class));
    }
}
