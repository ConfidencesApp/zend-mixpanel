<?php
/**
 * Confidences ZendMixpanel
 *
 * This source file is part of the Confidences ZendMixpanel package
 *
 * @package    Confidences\ZendMixpanel\Options
 * @license    Apache 2 {@link /LICENSE}
 * @copyright  Copyright (c) 2017, Confidences
 */
namespace Confidences\ZendMixpanel\Options;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

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
