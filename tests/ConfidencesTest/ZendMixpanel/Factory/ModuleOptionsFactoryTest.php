<?php
namespace ConfidencesTest\ZendMixpanel\Service;

use PHPUnit_Framework_TestCase as TestCase;
use ConfidencesTest\ZendMixpanel\Util\ServiceManagerFactory;
use Confidences\ZendMixpanel\Options\ModuleOptions;

class ModuleOptionsFactoryTest extends TestCase
{
    public function testFactoryCreatesMixpanelService()
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();
        $mixpanelService = $serviceManager->get(ModuleOptions::class);
        $this->assertInstanceOf(ModuleOptions::class, $mixpanelService);
    }
}
