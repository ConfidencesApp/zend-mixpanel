<?php
use Confidences\ZendMixpanel\Factory\MixpanelServiceFactory;
use Confidences\ZendMixpanel\Factory\MixpanelControllerPluginFactory;
use Confidences\ZendMixpanel\Options\ModuleOptions;
use Confidences\ZendMixpanel\Options\ModuleOptionsfactory;

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
            ModuleOptions::class => ModuleOptionsfactory::class
		]
	],
    'controller_plugins' => [
        'factories' => [
            'mixpanel' => MixpanelControllerPluginFactory::class,
        ]
    ]
];