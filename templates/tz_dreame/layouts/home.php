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

?>
<!DOCTYPE html>

<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" class="<?php $this->bodyClass(); ?>">
<head>
	<?php if($this->browser->get('browser') == 'ie8' || $this->browser->get('browser') == 'ie7' || $this->browser->get('browser') == 'ie6') : ?>
	<meta http-equiv="X-UA-Compatible" content="IE=9">
	<?php endif; ?>
	<?php if($this->API->get("chrome_frame_support", '0') == '1' && ($this->browser->get('browser') == 'ie8' || $this->browser->get('browser') == 'ie7' || $this->browser->get('browser') == 'ie6')) : ?>
	<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<jdoc:include type="head" />
	<?php $this->loadBlock('head'); ?>
</head>

<body<?php if($this->browser->get("tablet") == true) echo ' data-tablet="true"'; ?><?php if($this->browser->get("mobile") == true) echo ' data-mobile="true"'; ?>>

    <?php $this->loadBlock('header'); ?>

    <?php $this->loadBlock('headline'); ?>

    <?php $this->loadBlock('spotlight4'); ?>

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