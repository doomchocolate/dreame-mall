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

$doc -> addStyleDeclaration('
    .tz_social a{
        display:inline-block;
        height:' . $height . ';
        width:' . $width . ';
        margin-right: '. $space .';
    }
');

$tw_name = $params->get('tw-name');

$tw_image = $params->get('tw-image');
$tw_hover = $params->get('tw-image-hover');



if($tw_image){
    $doc -> addStyleDeclaration('
        .tz_social a.twitter{
            background:url('. $url . $tw_image .') left center no-repeat;
        }
    ');
}
if($tw_hover && $tw_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.twitter:hover{
            background:url('. $url . $tw_hover .') left center no-repeat;
        }
    ');
}

$f_name = $params->get('f-name');

$f_image = $params->get('f-image');
$f_hover = $params->get('f-image-hover');

if($f_image){
    $doc -> addStyleDeclaration('
        .tz_social a.facebook{
            background:url('. $url . $f_image .') left center no-repeat;
        }
    ');
}
if($f_hover && $f_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.facebook:hover{
            background:url('. $url . $f_hover .') left center no-repeat;
        }
    ');
}

$fours_name = $params->get('fours-name');

$fours_image = $params->get('fours-image');
$fours_hover = $params->get('fours-image-hover');

if($fours_image){
    $doc -> addStyleDeclaration('
        .tz_social a.fours{
            background:url('. $url . $fours_image .') left center no-repeat;
        }
    ');
}
if($fours_hover && $fours_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.fours:hover{
            background:url('. $url . $fours_hover .') left center no-repeat;
        }
    ');
}

$dev_name = $params->get('dev-name');

$dev_image = $params->get('dev-image');
$dev_hover = $params->get('dev-image-hover');

if($dev_image){
    $doc -> addStyleDeclaration('
        .tz_social a.dev{
            background:url('. $url . $dev_image .') left center no-repeat;
        }
    ');
}
if($dev_hover && $dev_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.dev:hover{
            background:url('. $url . $dev_hover .') left center no-repeat;
        }
    ');
}

$you_name = $params->get('you-name');

$you_image = $params->get('you-image');
$you_hover = $params->get('you-image-hover');

if($you_image){
    $doc -> addStyleDeclaration('
        .tz_social a.you{
            background:url('. $url . $you_image .') left center no-repeat;
        }
    ');
}
if($you_hover && $you_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.you:hover{
            background:url('. $url . $you_hover .') left center no-repeat;
        }
    ');
}

$g_name = $params->get('g-name');

$g_image = $params->get('g-image');
$g_hover = $params->get('g-image-hover');

if($g_image){
    $doc -> addStyleDeclaration('
        .tz_social a.google{
            background:url('. $url . $g_image .') left center no-repeat;
        }
    ');
}
if($g_hover && $g_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.google:hover{
            background:url('. $url . $g_hover .') left center no-repeat;
        }
    ');
}
$de_name = $params->get('de-name');

$de_image = $params->get('de-image');
$de_hover = $params->get('de-image-hover');

if($de_image){
    $doc -> addStyleDeclaration('
        .tz_social a.de{
            background:url('. $url . $de_image .') left center no-repeat;
        }
    ');
}
if($de_hover && $de_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.de:hover{
            background:url('. $url . $de_hover .') left center no-repeat;
        }
    ');
}
$sk_name = $params->get('sk-name');

$sk_image = $params->get('sk-image');
$sk_hover = $params->get('sk-image-hover');

if($sk_image){
    $doc -> addStyleDeclaration('
        .tz_social a.skype{
            background:url('. $url . $sk_image .') left center no-repeat;
        }
    ');
}
if($sk_hover && $sk_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.skype:hover{
            background:url('. $url . $sk_hover .') left center no-repeat;
        }
    ');
}

$rs_name = $params->get('rs-name');

$rs_image = $params->get('rs-image');
$rs_hover = $params->get('rs-image-hover');

if($rs_image){
    $doc -> addStyleDeclaration('
        .tz_social a.rss{
            background:url('. $url . $rs_image .') left center no-repeat;
        }
    ');
}
if($rs_hover && $rs_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.rss:hover{
            background:url('. $url . $rs_hover .') left center no-repeat;
        }
    ');
}

$li_name = $params->get('li-name');

$li_image = $params->get('li-image');
$li_hover = $params->get('li-image-hover');

if($li_image){
    $doc -> addStyleDeclaration('
        .tz_social a.linkedin{
            background:url('. $url . $li_image .') left center no-repeat;
        }
    ');
}
if($li_hover && $li_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.linkedin:hover{
            background:url('. $url . $li_hover .') left center no-repeat;
        }
    ');
}

$fl_name = $params->get('fl-name');

$fl_image = $params->get('fl-image');
$fl_hover = $params->get('fl-image-hover');

if($fl_image){
    $doc -> addStyleDeclaration('
        .tz_social a.flickr{
            background:url('. $url . $fl_image .') left center no-repeat;
        }
    ');
}
if($fl_hover && $fl_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.flickr:hover{
            background:url('. $url . $fl_hover .') left center no-repeat;
        }
    ');
}

$pin_name = $params->get('pin-name');

$pin_image = $params->get('pin-image');
$pin_hover = $params->get('pin-image-hover');

if($pin_image){
    $doc -> addStyleDeclaration('
        .tz_social a.pinterest{
            background:url('. $url . $pin_image .') left center no-repeat;
        }
    ');
}
if($pin_hover && $pin_hover !=''){
    $doc -> addStyleDeclaration('
        .tz_social a.pinterest:hover{
            background:url('. $url . $pin_hover .') left center no-repeat;
        }
    ');
}



?>
<div class="tz_social">
    <ul class="social">
        <?php if($text_message){ ?>
        <li class="text-message"><?php echo $text_message; ?></li>
        <?php } ?>
        <?php if($tw_url) { ?>
        <li><a class="twitter" href="<?php echo $tw_url; ?>" title="<?php echo $tw_name; ?>"><?php echo $tw_name; ?> </a> </li>
        <?php } ?>
        <?php if($f_url) { ?>
        <li><a class="facebook" href="<?php echo $f_url; ?>" title="<?php echo $f_name; ?>"><?php echo $f_name; ?> </a> </li>
        <?php } ?>
        <?php if($fours_url) { ?>
        <li><a class="fours" href="<?php echo $fours_url; ?>" title="<?php echo $fours_name; ?>"><?php echo $fours_name; ?> </a> </li>
        <?php } ?>
        <?php if($dev_url) { ?>
        <li><a class="dev" href="<?php echo $dev_url; ?>" title="<?php echo $dev_name; ?>"><?php echo $dev_name; ?> </a> </li>
        <?php } ?>
        <?php if($you_url) { ?>
        <li><a class="you" href="<?php echo $you_url; ?>" title="<?php echo $you_name; ?>"><?php echo $you_name; ?> </a> </li>
        <?php } ?>
        <?php if($g_url) { ?>
        <li><a class="google" href="<?php echo $g_url; ?>" title="<?php echo $g_name; ?>"><?php echo $g_name; ?> </a> </li>
        <?php } ?>
        <?php if($de_url) { ?>
        <li><a class="de" href="<?php echo $de_url; ?>" title="<?php echo $de_name; ?>"><?php echo $de_name; ?> </a> </li>
        <?php } ?>
        <?php if($sk_url) { ?>
        <li><a class="skype" href="<?php echo $sk_url; ?>" title="<?php echo $sk_name; ?>"><?php echo $sk_name; ?> </a> </li>
        <?php } ?>
        <?php if($rs_url) { ?>
        <li><a class="rss" href="<?php echo $rs_url; ?>" title="<?php echo $rs_name; ?>"><?php echo $rs_name; ?> </a> </li>
        <?php } ?>
        <?php if($li_url) { ?>
        <li><a class="linkedin" href="<?php echo $li_url; ?>" title="<?php echo $li_name; ?>"><?php echo $li_name; ?> </a> </li>
        <?php } ?>
        <?php if($fl_url) { ?>
        <li><a class="flickr" href="<?php echo $fl_url; ?>" title="<?php echo $fl_name; ?>"><?php echo $fl_name; ?> </a> </li>
        <?php } ?>
        <?php if($pin_url) { ?>
        <li><a class="pinterest" href="<?php echo $pin_url; ?>" title="<?php echo $pin_name; ?>"><?php echo $pin_name; ?> </a> </li>
        <?php } ?>
       <li><a </li>
    </ul>
<div class="clr"></div>
</div>
