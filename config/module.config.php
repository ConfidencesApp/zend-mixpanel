<?php
use Confidences\ZendMixpanel\Factory\MixpanelServiceFactory;
use Confidences\ZendMixpanel\Factory\MixpanelControllerPluginFactory;
use Confidences\ZendMixpanel\Factory\ModuleOptionsFactory;
use Confidences\ZendMixpanel\Options\ModuleOptions;

return [
	'zend-mixpanel' => [
		'project_token' => null,
        'options' => [
        	'consumer' => 'socket'
        ]
	],
	'service_manager' => [
		'factories' => [
			'mixpanel' => MixpanelServiceFactory::class,
            ModuleOptions::class => ModuleOptionsFactory::class
		]
	],
    'controller_plugins' => [
        'factories' => [
            'mixpanel' => MixpanelControllerPluginFactory::class,
        ]
    ]
];