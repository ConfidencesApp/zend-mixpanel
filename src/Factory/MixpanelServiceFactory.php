<?php
/**
 * Confidences ZendMixpanel
 *
 * This source file is part of the Confidences ZendMixpanel package
 *
 * @package    Confidences\ZendMixpanel
 * @license    Apache 2 {@link /LICENSE}
 * @copyright  Copyright (c) 2017, Confidences
 */
namespace Confidences\ZendMixpanel\Factory;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;
use Confidences\ZendMixpanel\Options\ModuleOptions;
use Mixpanel as MixpanelClient;

class MixpanelServiceFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $options = $container->get(ModuleOptions::class);
        
        $mixpanel = MixpanelClient::getInstance($options->getProjectToken(), $options->getOptions());
        return $mixpanel;
    }
}
