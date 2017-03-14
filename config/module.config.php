<?php
use Confidences\ZendMixpanel\Factory\MixpanelServiceFactory;
use Confidences\ZendMixpanel\Factory\MixpanelControllerPluginFactory;

return array(
	'zend-mixpanel' => array(
		'project_token' => null,
		'consumer' => 'socket'
	),
	'service_manager' => array(
		'factories' => array(
			'mixpanel' => MixpanelServiceFactory::class
		)
	),
    'controller_plugins' => array(
        'factories' => array(
            'mixpanel' => MixpanelControllerPluginFactory::class,
        ),
    ),
);