<?php

// This is the code which will be placed in the head section

// No direct access.
defined('_JEXEC') or die;
?>
<?php if($this->browser->get('browser') == 'ie8' || $this->browser->get('browser') == 'ie7' || $this->browser->get('browser') == 'ie6') : ?>
<meta http-equiv="X-UA-Compatible" content="IE=9">
<?php endif; ?>
<?php if($this->getParam("chrome_frame_support", '0') == '1' && ($this->browser->get('browser') == 'ie8' || $this->browser->get('browser') == 'ie7' || $this->browser->get('browser') == 'ie6')) : ?>
<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
<?php endif; ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="YES" />
<?php

$pageview = JRequest::getVar('view');



//
$doc = JFactory::getDocument();
// check the color version
$template_style = $this->getTemplateStyle('style');
// SYSTEM CSS
$this->addStyleSheet(JURI::base(true).'/templates/system/css/system.css');
// PLAZART BASE HEAD
$this->addHead();
// Theme option
$theme  =   $this->getParam('theme', '');

if ($theme) {
    $this->addStyleSheet(PLAZART_TEMPLATE_REL.'/css/themes/'.$theme.'/template.css');
}
// generate the max-width rules
$max_page_width =   $this->getParam('max_page_width', 0);

if ($max_page_width) {
    $this->addStyleDeclaration('.container-fluid { max-width: '.$this->getParam('max_page_width', '1200').$this->getParam('max_page_width_value', 'px').'!important; }');
}

// CSS override on two methods
if($this->getParam("css_override", '0')) {
	$this->API->addCSS(PLAZART_TEMPLATE_REL . '/css/override.css');
}

$this->addStyleDeclaration($this->getParam('css_custom', ''));
$this->addStyleDeclaration($this->getParam('css_custom', ''));

// include fonts
$font_iter = 1;
$inlinecss  =  '';
while($this->getParam('font_name_group'.$font_iter, 'tzFontNull') !== 'tzFontNull') {
	$font_data = explode(';', $this->getParam('font_name_group'.$font_iter, ''));


	if(isset($font_data) && count($font_data) >= 2) {
		$font_type = $font_data[0];
		$font_name = $font_data[1];

		if($this->getParam('font_rules_group'.$font_iter, '') != ''){
			if($font_type == 'standard') {
                $this->addStyleDeclaration($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: ' . $font_name . '; }'."\n");
			} elseif($font_type == 'google') {
				$font_link = $font_data[2];
				$font_family = $font_data[3];
				$this->addStyleSheet($font_link);
                $this->addStyleDeclaration($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: '.$font_family.', Arial, sans-serif; }'."\n");
			} elseif($font_type == 'squirrel') {

				$this->addStyleSheet($this->API->URLtemplate() . '/fonts/' . $font_name . '/stylesheet.css');
				$this->addStyleDeclaration($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: ' . $font_name . ', Arial, sans-serif; }'."\n");
			} elseif($font_type == 'edge') {
	            $font_link = $font_data[2];
	            $font_family = $font_data[3];
	            $this->addScript($font_link);
	            $this->addStyleDeclaration($this->getParam('font_rules_group'.$font_iter, '') . ' { font-family: ' . $font_family . ', sans-serif; }'."\n");
	        }
		}
	}
	
	$font_iter++;
}

$sidebar_width = $this->getParam('tz_width_sidebar','230');



$bg1Module = $this->getParam('bg1_module','000');
$bg2Module = $this->getParam('bg2_module','000');

$authorface = $this->getParam('au_face_color','000');
$authortwitter = $this->getParam('au_twitter_color','000');
$authorgoogle = $this->getParam('au_google_color','000');
$borderColor = $this->getParam('border_color','000');
$contentColor = $this->getParam('content_color','fff');

$bgType = $this->getParam('background_type','color');
$bgpattern = $this->getParam('background_pattern','');
$bgcolor = $this->getParam('background_color','');

$toppattern = $this->getParam('header_pattern','');

$heightlight = $this->getParam('heightlight','FA5D90');

$urlPattern = JUri::base().$bgpattern;
$urltoppattern = JUri::base().$toppattern;

if($toppattern){
    $this->addStyleDeclaration('
     .tz-header > .row-fluid > .container-fluid{
        background-image:url('. $urltoppattern .');
        background-repeat:repeat-x;
    }
    ');
}
if($bgcolor){
    $this->addStyleDeclaration('
    body, .tz-main-body .container-fluid{
        background-color:#'.$bgcolor.';
    }
    ');
}

if($bgType == "pattern"){
 if($bgpattern){
     $this->addStyleDeclaration('
     body{
        background-image:url('. $urlPattern .');
        background-repeat:repeat;
    }
    ');
}
}
if($bgType == "image"){
if($bgpattern){
    $this->addStyleDeclaration('
    body{
        background-image:url('. $urlPattern .');
        background-repeat:no-repeat;
        background-size:100%;
        background-attachment:fixed;
    }
    ');
}
}

$this->addStyleDeclaration('
    .hightlight{
        background:#'.$heightlight.' !important;
    }
    .bg_color1{
        background-color:#'.$color1.' !important;
    }
    .bg_color2{
        background-color:#'.$color2.' !important;
    }
    .bg_color3{
        background-color:#'.$color3.' !important;
    }
    .bg_color4{
        background-color:#'.$color4.' !important;
    }
    .bg_color5{
        background-color:#'.$color5.' !important;
    }
    .bg_color6{
        background-color:#'.$color6.' !important;
    }
    .bg_color7{
        background-color:#'.$color7.' !important;
    }
    .TzSocialLinkTwitter{
        color:#'.$authortwitter.' !important;
    }
    .TzSocialLinkFacebook{
        color:#'.$authorface.' !important;
    }
    .TzSocialLinkGoogle{
        color:#'.$authorgoogle.' !important;
    }
    .bg1-module{
        background-color:#'.$bg1Module.' !important;
    }
    .bg2-module{
        background-color:#'.$bg1Module.' !important;
    }
    .tz-border-bottom,
    .tz-border-top,
    .tz-border-right,
    .tz-border-left
    {
        border-color:#'. $borderColor .' !important;
    }
    .container-fluid{
        background:#'.$contentColor.';
    }


');



// load prefixer
if($this->getParam("css_prefixer", '0')) {
	$this->addScript(PLAZART_TEMPLATE_REL . '/libraries/js/prefixfree.js');
}

// load lazyload
if($this->getParam("js_lazyload", '0')) {
    $this->addScript(PLAZART_TEMPLATE_REL . '/libraries/js/jquery.lazyload.min.js');
}

$this->addScript(PLAZART_TEMPLATE_REL.'/js/page.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/jquery.easing.1.3.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/jquery.tinyscrollbar.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/resizeimage.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/tz_dreame.js');




?>
<!--<script type="text/javascript">-->
<!--    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {-->
<!---->
<!--    } else {-->
<!--        --><?php //$this->addScript(PLAZART_TEMPLATE_REL.'/js/jquery.ui.totop.js'); ?>
<!--    }-->
<!--</script>-->

<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/socalicon/specimen_files/specimen_stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/socalicon/stylesheet.css" type="text/css" charset="utf-8" />

<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/font-awesome/css/font-awesome.min.css"/>
<!--[if IE 9]>
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/css/ie9.css" type="text/css" />
<![endif]-->

<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/css/ie8.css" type="text/css" />
<![endif]-->

<!--[if lte IE 7]>
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/css/ie7.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/font-awesome/css/font-awesome-ie7.min.css"/>
<![endif]-->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- For IE6-8 support of media query -->
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo PLAZART_URL ?>/js/respond.min.js"></script>
<![endif]-->

<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en-GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>




<script type="text/javascript">
    jQuery(document).ready(function(){


        jQuery('.popovers').popover();
        jQuery('.tooltip_content').tooltip({
            selector: "a[data-toggle=tooltip]"
        });
        jQuery('.tooltip_content').tooltip();
        jQuery("a[data-toggle=popover]")
            .popover()
            .click(function(e) {
                e.preventDefault()
            });

        var filter_html = jQuery('#tz_options').html();
        var pageView = "<?php echo $pageview; ?>";
        var header_height = jQuery('header.tz-header').height();
        var win_height = jQuery(window).height();
        var sidebar_width = "<?php echo $sidebar_width; ?>";
        jQuery('body').css('min-height',win_height+1);

        jQuery('#TzContent #tz_options').remove();

        jQuery('.viewport  #tz_options').append(filter_html);
        var $container = jQuery('#portfolio');

        if(pageView=="portfolio"){

            loadPortfolio();
        }
        if(pageView == "timeline"){
            loadTimeline();
        }

        jQuery('div.tz-logo, .search ').css('height',header_height+'px');
        var scoll_height = win_height - header_height;

        jQuery('section#tz-main').css('margin-top',header_height+'px');
        jQuery('#scrollbar1 .viewport').css({
            'height':scoll_height+'px'
        });

        jQuery('#sidebar-left').css({
            'width':sidebar_width+'px',
            'margin-left':0,
            'margin-top':header_height+3+'px'
        });

    });
</script>
<script type="text/javascript">
    jQuery(window).resize(function(){
        var header_height = jQuery('header.tz-header').height();
        var win_height = jQuery(window).height();
        var sidebar_width = "<?php echo $sidebar_width; ?>";
        jQuery('body').css('min-height',win_height+1);
        var scoll_height = win_height - header_height;

        jQuery('section#tz-main').css('margin-top',header_height+'px');
        jQuery('#scrollbar1 .viewport').css({
            'height':scoll_height+'px'
        });

        jQuery('#sidebar-left').css({
            'width':sidebar_width+'px',
            'margin-left':0,
            'margin-top':header_height+3+'px'
        });
    });
</script>

<script type="text/javascript">

jQuery(window).bind("load resize",function(){

    var sidebar_width = "<?php echo $sidebar_width; ?>";
    var tz_content_width = jQuery('body').width();
    content_width = tz_content_width - sidebar_width;

    jQuery('.tz-logo').css({
        'width':sidebar_width+'px'
    });

    jQuery('#tz-content').css({
        width: content_width+'px',
        'margin-left':sidebar_width +'px'
    });

//    jQuery('#scrollbar1').tinyscrollbar();

});
</script>


