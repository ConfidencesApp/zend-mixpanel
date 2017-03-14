<?php
/**
 * Confidences ZendMixpanel
 *
 * This source file is part of the Confidences ZendMixpanel package
 *
 * @package    Confidences\ZendMixpanel\Controller\Plugin\Mixpanel
 * @license    Apache 2 {@link /LICENSE}
 * @copyright  Copyright (c) 2017, Confidences
 */
namespace Confidences\ZendMixpanel\Controller\Plugin;

use Mixpanel as MixpanelClient;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Mixpanel controller plugin as proxy to the Mixpanel service
 */
class Mixpanel extends AbstractPlugin
{
    /**
     * @var Mixpanel
     */
    protected $service;

    /**
     * Constructor
     *
     * @param  MixpanelClient $service
     */
    public function __construct(MixpanelClient $service)
    {
        $this->service = $service;
    }

    /**
     * Invoke Mixpanel Client service
     *
     * @return MixpanelClient
     */
    public function __invoke()
    {
        return $this->getService();
    }

    /**
     * Get the Mixpanel Client service class
     *
     * @return MixpanelClient
     */
    protected function getService()
    {
        return $this->service;
    }
}
