<?php

/**
 * Plazart Framework
 * Author: Sonle
 * Version: 1.1
 * @copyright   Copyright (C) 2012 - 2013 TemPlaza.com. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */
 
// No direct access.
defined('_JEXEC') or die;

require_once(PLAZART_TEMPLATE_PATH . DS . 'libraries' . DS . 'helpers' . DS . 'browser.php');
require_once(PLAZART_TEMPLATE_PATH . DS . 'libraries' . DS . 'helpers' . DS . 'api.php');
require_once(PLAZART_TEMPLATE_PATH . DS . 'libraries' . DS . 'helpers' . DS . 'social.php');
require_once(PLAZART_TEMPLATE_PATH . DS . 'libraries' . DS . 'helpers' . DS . 'utilities.php');

/*
* Main framework class
*/
class PlazartRender extends PlazartTemplate {
    // template name
    public $name = PLAZART_TEMPLATE;
    // access to the standard Joomla! template API
    public $API;
    // access to the helper classes
    public $bootstrap;
    public $social;
    public $utilities;
    // detected browser:
    public $browser;
    // page config
    public $config;
    // module styles
    public $module_styles;
    // page suffix
    public $page_suffix;
    
    // constructor
    public function __construct($tpl, $embed_mode = false) {
        $app        =   JFactory::getApplication();
        $profile    =   $app->getUserStateFromRequest($tpl->template.'.profile', 'profile', '', 'string');
        if ($profile) {
            jimport('joomla.filesystem.file');
            if (JFile::exists(PLAZART_TEMPLATE_PATH.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.$profile.'.json')) {
                $params =   new JRegistry();
                $params->loadFile(PLAZART_TEMPLATE_PATH.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.$profile.'.json');
                $tpl->params  =   $params;
            }
        }
        parent::__construct($tpl);
		// put the template handler into API field
        $this->API = new TZTemplateAPI($tpl);
        $this->APITPL = $tpl;
        // get the helpers
        $this->social = new TZTemplateSocial($this);
        $this->utilities = new TZTemplateUtilities($this);
        // create instance of TZBrowser class and detect
        $browser = new TZBrowser();
        $this->browser = $browser->result;
        // get the params
        $this->getParameters();
        // get configured layout
        $layout = $this->getLayout();
        $this->loadLayout ($layout);
        // parse FB and Twitter buttons
        $this->social->socialApiParser($embed_mode);
    }
    
    // get the template parameters in PHP form
    public function getParameters() {
        // create config object
        $this->config = new JObject();
        // set layout override param
    	$this->config->set('content_width_override', $this->utilities->overrideArrayParse($this->API->get('content_width_for_pages', '')));
	}
}
// EOF