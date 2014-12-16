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
$url = JURI::base();
$doc = JFactory::getDocument();
$width = $params->get('width');
$height = $params->get('height');
$space = $params->get('space');


?>
<div class="tz_social">
    <ul class="social">
        <?php if($text_message){ ?>
            <li>
                <a class="size30 tz-font-icon tz-font-icon-share  color-dark hover-none"></a>
            </li>
        <li class="text-message"><?php echo $text_message; ?></li>
        <?php } ?>
        <?php if($f_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-facebook  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <?php if($tw_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-twitter2  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <?php if($fl_url) { ?>
            <li>
                <a class="size30 tz-font-icon tz-font-icon-flickr  color-dark hover-none"></a>
            </li>
        <?php } ?>
        <?php if($g_url) { ?>
            <li>
                <a class="size30 tz-font-icon tz-font-icon-plus  color-dark hover-none"></a>
            </li>
        <?php } ?>
        <?php if($dribble_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-dribble  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <?php if($dev_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-deviantart  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <?php if($you_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-youtube  color-dark hover-none"></a>
        </li>
        <?php } ?>

        <?php if($vimeo_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-vimeo  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <?php if($rs_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-rss  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <?php if($li_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-twitter2  color-dark hover-none"></a>
        </li>
        <?php } ?>

        <?php if($pin_url) { ?>
        <li>
            <a class="size30 tz-font-icon tz-font-icon-twitter2  color-dark hover-none"></a>
        </li>
        <?php } ?>
        <li class="social_close"> <a class="btn_close"> Close </a></li>
    </ul>
<div class="clr"></div>
</div>

<script type="text/javascript">
    jQuery('a.btn_close').click(function(){
        jQuery('#tz-social-icons').fadeOut();
    });
</script>