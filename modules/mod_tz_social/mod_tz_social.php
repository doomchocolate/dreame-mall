<?php
/*------------------------------------------------------------------------

# TZ Portfolio Extension

# ------------------------------------------------------------------------

# author    DuongTVTemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
$document = JFactory::getDocument();
$moduleType = $params->get('social-type');
$tw_url = $params->get('tw-url');
$f_url = $params->get('f-url');
$fours_url = $params->get('fours-url');
$dev_url = $params->get('dev-url');
$you_url = $params->get('you-url');
$g_url = $params->get('g-url');
$de_url = $params->get('de-url');
$di_url = $params->get('di-url');
$sk_url = $params->get('sk-url');
$rs_url = $params->get('rs-url');
$li_url = $params->get('li-url');
$fl_url = $params->get('fl-url');
$pin_url = $params->get('pin-url');
$vimeo_url = $params->get('vimeo-url');
$text_message = $params->get('so-text-message','');

if($moduleType == 'icon'){
require JModuleHelper::getLayoutPath('mod_tz_social','default');
}
if($moduleType == 'font'){
    require JModuleHelper::getLayoutPath('mod_tz_social','default_fonticon');
}

 ?>
