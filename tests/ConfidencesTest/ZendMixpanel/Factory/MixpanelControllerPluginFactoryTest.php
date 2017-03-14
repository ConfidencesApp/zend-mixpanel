<?php
namespace ConfidencesTest\ZendMixpanel\Service;

use PHPUnit_Framework_TestCase as TestCase;
use ConfidencesTest\ZendMixpanel\Util\ServiceManagerFactory;
use Zend\Mvc\Controller\PluginManager;
use Confidences\ZendMixpanel\Controller\Plugin\Mixpanel;

class MixpanelControllerPluginFactoryTest extends TestCase
{
    public function testFactoryCreatesMixpanelControllerPlugin()
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();
        $pluginManager = new PluginManager($serviceManager);
        
        $config = $serviceManager->get('Config');
        $factories = $config['controller_plugins']['factories'];
        $pluginManager->setFactory('mixpanel', $factories['mixpanel']);
        
        $plugin = $pluginManager->get('mixpanel');
        $this->assertInstanceOf(Mixpanel::class, $plugin);
    }
}
