<?php
namespace ConfidencesTest\ZendMixpanel\Options;

use Confidences\ZendMixpanel\Options\ModuleOptions as Options;

class ModuleOptionsTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Options $options
     */
    protected $options;

    public function setUp()
    {
        $options = new Options();
        $this->options = $options;
    }

    /**
     * @covers Confidences\ZendMixpanel\Options\ModuleOptions::getProjectToken
     */
    public function testGetProjectToken()
    {
        $this->assertNull($this->options->getProjectToken());
    }

    /**
     * @covers Confidences\ZendMixpanel\Options\ModuleOptions::setProjectToken
     * @covers Confidences\ZendMixpanel\Options\ModuleOptions::getProjectToken
     */
    public function testSetProjectToken()
    {
        $this->options->setProjectToken('MyProjectToken');
        $this->assertEquals('MyProjectToken', $this->options->getProjectToken());
    }

    /**
     * @covers Confidences\ZendMixpanel\Options\ModuleOptions::getOptions
     */
    public function testGetOptions()
    {
        $this->assertEquals([], $this->options->getOptions());
    }

    /**
     * @covers Confidences\ZendMixpanel\Options\ModuleOptions::getOptions
     * @covers Confidences\ZendMixpanel\Options\ModuleOptions::setOptions
     */
    public function testSetOptions()
    {
        $options = [
            'debug' => true,
            'consumer' => 'curl',
            'fork' => false,
            'use_ssl' => false
        ];
        $this->options->setOptions($options);
        $this->assertEquals($options, $this->options->getOptions());
    }
}
