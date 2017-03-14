# Confidences ZendMixpanel

[![Build Status](https://travis-ci.org/ConfidencesApp/zend-mixpanel.svg?branch=master)](https://travis-ci.org/ConfidencesApp/zend-mixpanel)
[![Latest Stable Version](https://poser.pugx.org/ConfidencesApp/zend-mixpanel/v/stable)](https://packagist.org/packages/ConfidencesApp/zend-mixpanel)
[![License](https://poser.pugx.org/ConfidencesApp/zend-mixpanel/license.svg)](https://packagist.org/packages/ConfidencesApp/zend-mixpanel)
[![Code Coverage](https://coveralls.io/repos/ConfidencesApp/zend-mixpanel/badge.svg?branch=master)](https://coveralls.io/r/ConfidencesApp/zend-mixpanel?branch=master)

A Zend Framework 3 module that lets you to use the Mixpanel service.

#Installation

This module is available on [Github](https://github.com/ConfidencesApp/zend-mixpanel).
In your project's `composer.json` use:

    {   
        "require": {
            "confidencesapp/zend-mixpanel": "dev-master"
    }
    
Run `php composer.phar update` to download it into your vendor folder and setup autoloading.

Now copy `zend-mixpanel.local.php.dist` to `yourapp/config/autoload/zend-mixpanel.local.php` and add your Mixpanel Acces Token and App ID.

Add `Confidences\ZendMixpanel` to the modules array in your `application.config.php`, preferably as the first module. 

That's it. There's nothing more you need to do, everything works at that stage.
