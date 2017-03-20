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

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * Turn off strict options mode
     */
    protected $__strictMode__ = false;

    /**
     * Mixpanel Project Token
     * @var string
     */
    protected $projectToken = null;

    /**
     * Mixpanel SDK Options
     * @var array
     */
    protected $options = [];
    
 	/**
     * @return string $projectToken
     */
    public function getProjectToken()
    {
        return $this->projectToken;
    }

 	/**
     * @param string $projectToken
     * @return self
     */
    public function setProjectToken($projectToken)
    {
        $this->projectToken = $projectToken;
        return $this;
    }

 	/**
     * @return array $options
     */
    public function getOptions()
    {
        return $this->options;
    }

 	/**
     * @param array $options
     * @return self
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }
}
