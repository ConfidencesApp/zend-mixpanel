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

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('Config');
        return new $requestedName(isset($config['zend-mixpanel']) ? $config['zend-mixpanel'] : []);
    }
}
