<?php
namespace ConfidencesTest\ZendMixpanel\Service;

use PHPUnit_Framework_TestCase as TestCase;
use ConfidencesTest\ZendMixpanel\Util\ServiceManagerFactory;
use Mixpanel as MixpanelClient;

class MixpanelServiceFactoryTest extends TestCase
{
    public function testFactoryCreatesMixpanelService()
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();
        $mixpanelService = $serviceManager->get('mixpanel');
        $this->assertInstanceOf(MixpanelClient::class, $mixpanelService);
    }
}
