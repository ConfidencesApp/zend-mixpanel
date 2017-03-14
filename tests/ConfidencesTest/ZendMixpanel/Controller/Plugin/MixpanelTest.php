<?php
namespace ConfidencesTest\ZendMixpanel\Controller\Plugin;

use PHPUnit_Framework_TestCase as TestCase;
use Confidences\ZendMixpanel\Controller\Plugin\Mixpanel;
use Mixpanel as MixpanelClient;

class MixpanelTest extends TestCase
{
    protected $service;
    protected $plugin;

    public function setUp()
    {
        $this->service = MixpanelClient::getInstance(null);
        $this->plugin = new Mixpanel($this->service);
    }

    public function testInvokingPluginProxiesToService()
    {
        $plugin = $this->plugin;
        $this->assertInstanceOf(MixpanelClient::class, $plugin());
    }
}
