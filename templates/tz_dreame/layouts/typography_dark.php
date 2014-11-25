<?php
/**
 *
 * Plazart framework layout
 *
 * @version             1.0.0
 * @package             Plazart Framework
 * @copyright			Copyright (C) 2012 - 2013 TemPlaza. All rights reserved.
 *
 */
 
// no direct access
defined('_JEXEC') or die;

// get important objects
$doc = JFactory::getDocument();
// Add current user information
$user = JFactory::getUser();

// get the option and view value
$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
$current_url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
$current_url = preg_replace('@%[0-9A-Fa-f]{1,2}@mi', '', htmlspecialchars($current_url, ENT_QUOTES, 'UTF-8'));


// Adjusting content width
$this->setParam('mainbody_width',12);
$sidebar_right_width = $this->getParam('right_sidebar_width', 3);
$sidebar_left_width = $this->getParam('left_sidebar_width', 3);

if ($this->countModules('right') && $this->countModules('left')=='') {
    $this->setParam('mainbody_width',12 - $sidebar_right_width);
}
if ($this->countModules('left') && $this->countModules('right')=='') {
    $this->setParam('mainbody_width',12 - $sidebar_left_width);
}
if ($this->countModules('right') && $this->countModules('left')){
 $this->setParam('mainbody_width',12 - $sidebar_right_width - $sidebar_left_width);
}

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<?php $this->bodyClass(); ?>">
<head>


	<jdoc:include type="head" />
	<?php $this->loadBlock('head'); ?>
</head>

<body<?php if($this->browser->get("tablet") == true) echo ' data-tablet="true"'; ?><?php if($this->browser->get("mobile") == true) echo ' data-mobile="true"'; ?>>

    <?php $this->loadBlock('header'); ?>

<!--    --><?php //$this->loadBlock('mainnav'); ?>

    <?php $this->loadBlock('headline'); ?>

    <?php $this->loadBlock('spotlight4'); ?>

<!--    --><?php //$this->loadBlock('mainbody'); ?>

    <?php $this->loadBlock('typography_dark'); ?>

    <?php $this->loadBlock('spotlight2'); ?>

    <?php $this->loadBlock('bottom'); ?>

    <?php $this->loadBlock('footer'); ?>

    <?php $this->loadBlock('ultilities'); ?>

</body>
</html>
<?php
// Rules to remove predefined jQuery and Bootstrap and MooTools More
TZRules::setRule('/<script src="(.*?)media\/system\/js\/mootools-more.js" type="text\/javascript"><\/script>/mi','');
// EOF