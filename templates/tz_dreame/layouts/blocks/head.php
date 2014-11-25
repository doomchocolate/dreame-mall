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
$fb_lang = $this->getParam('fb_lang','en_US');

$blog_maxwidth = $this->getParam('blog_maxwidth','990');
$portfolio_height = $this->getParam('portfolio_height','450');
$item_maxheight = $portfolio_height / 2 ;

$authorface = $this->getParam('au_face_color','000');
$authortwitter = $this->getParam('au_twitter_color','000');
$authorgoogle = $this->getParam('au_google_color','000');
$borderColor = $this->getParam('border_color','e2e6e7');
$contentColor = $this->getParam('content_color','fff');
$background_sidebar = $this->getParam('background_sidebar','fff');
$background_menu = $this->getParam('background_menu','fff');
$background_gradient = $this->getParam('background_gradient','images/bg-transparent.png');
$urlbackground_gradient = JUri::base().$background_gradient;
$background_input = $this->getParam('background_input','fff');
$background_menu_mobile = $this->getParam('background_menu_mobile','images/menu-item-mobile.png');
$urlbg_menu_mobile = JUri::base().$background_menu_mobile;
$background_menu_mobile_dropdown = $this->getParam('background_menu_mobile_dropdown','images/btn_dropdown.png');
$urlbg_mobile_dropdown = JUri::base().$background_menu_mobile_dropdown;
$background_submenu_mobile_dropdown = $this->getParam('background_submenu_mobile_dropdown','images/btn_dropdown.png');
$urlbackground_submenu_mobile_dropdown = JUri::base().$background_submenu_mobile_dropdown;
$background_quote = $this->getParam('background_quote','images/quote_item.png');
$urlbackground_quote = JUri::base().$background_quote;
$background_link = $this->getParam('background_link','images/link_item.png');
$urlbackground_link = JUri::base().$background_link;

$bgType = $this->getParam('background_type','color');
$bgpattern = $this->getParam('background_pattern','');
$bgcolor = $this->getParam('background_color','');
$titlecolor = $this->getParam('title_color','000000');
$textcolor = $this->getParam('text_color','3f3f3f');
$headingsidebarcolor = $this->getParam('heading_sidebar_color','3f3f3f');
$menucolor = $this->getParam('menu_color','7b7b7b');
$color_hover = $this->getParam('color_hover','FF7200');
$borderinput = $this->getParam('border_input','fff');
$borderdatecolor = $this->getParam('border_color_date','ccc');


$color_menu_mobile = $this->getParam('color_menu_mobile','bbbbbb');
$border_color_menu_mobile = $this->getParam('border_color_menu_mobile','e2e6e7');

$urlPattern = JUri::base().$bgpattern;




if($contentColor){
    $this->addStyleDeclaration('
    div.TzBlog .TzItemsLeading, div.TzBlog .TzItemsRow,
    div#TzContent .tz_item .TzInner, .contact .ContactInner,
    .tz-content-inner, .weblink-category, .TzBlog .tz_portfolio_user,
    div#TzContent .TzInner .tz-title-timeline, .item-page, #tz-typography,
    .TzCategories, .search{
    background-color:#'.$contentColor.';
    }
    ');
    if($contentColor == 'transparent'){
        $this->addStyleDeclaration('
    div#TzContent, .item-page, #tz-typography, #pricing-table-1 .column{
    background-color:'.$contentColor.';
    }
    ');
    }
}
if($background_sidebar){
    $this->addStyleDeclaration('
    div.sidebar-nav, #sidebar-left, header.tz-header{
    background-color:#'.$background_sidebar.';
    }
    ');
    if($background_sidebar == 'transparent'){
        $this->addStyleDeclaration('
    div#TzContent{
    background-color:'.$background_sidebar.';
    }
    ');
    }
}
if($bgcolor){
    $this->addStyleDeclaration('
    body{
        background-color:#'.$bgcolor.';
    }
    ');
    if($bgcolor == 'transparent'){
        $this->addStyleDeclaration('
    div#TzContent{
    background-color:'.$bgcolor.';
    }
    ');
    }
}
if($background_input){
    $this->addStyleDeclaration('
    .sidebar-nav .box input,
    div input, div textarea{
        background-color:#'.$background_input.' !important;
    }
    ');
    if($background_input == 'transparent'){
        $this->addStyleDeclaration('
    .sidebar-nav .box input,
    div input, div textarea{
    background-color:'.$background_input.' !important;
    }
    ');
    }
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
        background-size:cover;
        background-attachment:fixed;
    }
    ');
    }
}


if($pageview !='portfolio' && $pageview !='timeline' && $pageview !='gallery'){

    $this->addStyleDeclaration('
    #tz-component {
        max-width:'.$blog_maxwidth.'px;
        width:auto;
        margin: 0 auto;
    }
    ');
}
if($pageview =='portfolio' || $pageview =='timeline' || $pageview =='gallery' || $pageview =='product'){

    $this->addStyleDeclaration('
     #tz-component .tz-inner-content, #tz-component{
        margin-top:0 !important;
     }
     #tz-content #tz-component{
     padding-left:2px;
     padding-right:2px;
     width:auto;
     }

    ');

    if($theme =='block'){
        $this->addStyleDeclaration('
     #tz-component .tz-inner-content, #tz-component{
        margin-top:0 !important;
     }
     section#tz-component{
     padding-left:0;
     }
     #tz-content #tz-component{
     padding-left:0;
     padding-right:6px;
     width:auto;
     }
    #sidebar-left #tz_options, #sidebar-left .box,
    div#TzContent .tz_item .TzPortfolioDescription,
    div.tz-transparent, .TzInnerBorder
    {
     border-color:#'. $borderColor .' !important;
    }
    #sidebar-left #tz_options, #sidebar-left .box,
    .TzInnerBorder{
    background-color:#'.$contentColor.';
    }


    ');
    }

}


$this->addStyleDeclaration('

    .TzBlog .TzQuote,
    div#TzContent .tz_item div.TzInnerQuote
    {
        background-image:url('. $urlbackground_quote .');

    }
    .TzBlog .TzLink .TzBlogTitle a,
    div#TzContent .tz_item div.TzInnerLink
    {
        background-image:url('. $urlbackground_link .');

    }

    .off-canvas #off-canvas-nav .plazart-mainnav{
    background:url('. $urlbg_menu_mobile .') repeat;

    }
    #off-canvas-nav ul li a,
    #off-canvas-nav .always-show .dropdown-menu ul li a{
        color:#'.$color_menu_mobile.' ;
        border-bottom: 1px solid #'.$border_color_menu_mobile.'!important;
    }
    #off-canvas-nav  .caret{
    background:url('.$urlbg_mobile_dropdown.') center no-repeat;
    }
    #off-canvas-nav  .nav-child{
    background:url('.$urlbackground_submenu_mobile_dropdown.') center repeat !important;
    }

    .TzPortfolioDate{
        border-color:#'.$borderdatecolor.';
    }


    .sidebar-nav .box input,
    div input, div textarea{
    border-color:#'.$borderinput.' !important;
    }

    div.tz-transparent{
        background-image:url('. $urlbackground_gradient .');
        background-repeat:repeat-x;
        background-position:center top;
    }
    div#TzContent .tz_item h3 a, div#TzContent .TzItem h3 a,
    .item-page h2,
    div.TzBlog div.TzBlogInner h3.TzBlogTitle a,
    div.TzItemPage .TzArticleTitle a, div.TzPortfolioItemPage .TzArticleTitle a,
    .tz-content-inner h2 a, .tz-content-inner h3 a, .result-title,
	.group-title, h2, .accordion-heading .accordion-toggle,
	#TzContent .tz_item div.TzLink a
	{
        color:#'.$titlecolor.';
    }
    .sidebar-nav .box h3.header, .sidebar-nav h3,
    div.tz_portfolio_user h3.TzArticleAuthorTitle,
    div.TzRelated h3.TzRelatedTitle{
        color:#'.$headingsidebarcolor.';
    }
    div.TzItemPage, div.TzPortfolioItemPage,
    .TzQuote .text,
    .tz_portfolio_user p, p, .myTab li a{
        color:#'.$textcolor.';
    }
    .box .content a:hover,.sidebar-nav li a:hover, .sidebar-nav li.active a,
    #plazart-mainnav .navbar .navbar-inner ul.nav li a:hover,
    #plazart-mainnav .navbar .navbar-inner ul.nav li.active > a,
    .contact .tz-contact-form h3,#tz_options .option-combo a.selected,
    #tz_options .option-combo a:hover, #off-canvas-nav li a:hover{
        color:#'.$color_hover.' !important;
    }
    #plazart-mainnav .navbar .navbar-inner ul.nav li a,
    .sidebar-nav li a, .sidebar-nav #tz_options a{
        color:#'.$menucolor.';
    }

    div#TzContent .tz_item .TzInner{
        height:'.$portfolio_height.'px;
    }
    .tz-media-content{
        max-height:'.$portfolio_height.'px;
    }
    .TZPorfolioMedium{
        max-height:'.$item_maxheight.'px;
    }
    .dropdown-menu{
        background-color:#'.$background_menu.';
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

    .tz-border-bottom,
    .tz-border-top,
    .tz-border-right,
    .tz-border-left,
    .search,
    .sidebar-nav li a,
    div#tztwd-container .tztwd-tweet-container,
    .plazart-megamenu .dropdown > .dropdown-menu,
    #plazart-mainnav .navbar .navbar-inner ul.nav li .nav-child .mega-col-nav ul li.mega-group a,
    .plazart-megamenu .border-left > .mega-inner,
    .plazart-megamenu .span12.mega-col-nav .mega-inner ul.level1 > li a,
    .sidebar-nav #tz_options a, div.tz_portfolio_user, div.TzRelated,
    div legend, .tz-partner >p, div table tr,
    .table-bordered th, .table-bordered td, .accordion-heading .accordion-toggle,
	#pricing-table-2 .column ul li, #pricing-table-2 .column
    {
        border-color:#'. $borderColor .' !important;
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
//$this->addScript(PLAZART_TEMPLATE_REL.'/js/jquery.tinyscrollbar.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/resizeimage.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/tz_dreame.js');
$this->addScript(PLAZART_TEMPLATE_REL.'/js/jquery.backgroundSize.js');



?>
<script type="text/javascript">


    if( /iPad/i.test(navigator.userAgent) ) {


        jQuery('div.TzPagination').css('margin',0);
        jQuery(window).bind("load resize", function(){
        var content_height = jQuery('#tz-content').innerHeight();
        var sidebar_height = jQuery('#sidebar-left').height();

//            alert(content_height + '--' + sidebar_height);
        if(sidebar_height < content_height){
            sidebar_height_value = content_height - 3;
            jQuery('#sidebar-left').css('height',sidebar_height_value + 'px');
        }

        });



    } else {

        <?php $this->addScript(PLAZART_TEMPLATE_REL.'/js/jquery.ui.totop.js'); ?>
    }
</script>

<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/socalicon/specimen_files/specimen_stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/socalicon/stylesheet.css" type="text/css" charset="utf-8" />

<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/libraries/assets/font-awesome/css/font-awesome.min.css"/>
<!--[if IE 9]>
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/css/themes/<?php echo $theme; ?>/ie9.css" type="text/css" />
<![endif]-->

<!--[if IE 8]>
<link rel="stylesheet" href="<?php echo PLAZART_TEMPLATE_REL; ?>/css/themes/<?php echo $theme; ?>/ie8.css" type="text/css" />
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
        js.src = "//connect.facebook.net/<?php echo $fb_lang; ?>/all.js#xfbml=1";
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
        var win_Width = jQuery(window).width();
        var sidebar_width = "<?php echo $sidebar_width; ?>";
        jQuery('body').css('min-height',win_height+1);

        if(win_Width > 979){

        jQuery('#TzContent #tz_options').remove();

        jQuery('.sidebar-nav  #tz_options').append(filter_html);
        }

        var $container = jQuery('#portfolio');

        if(pageView=="portfolio"){

            loadPortfolio();
        }
        if(pageView == "timeline"){
            loadTimeline();
        }

        if (pageView == "product"){
            loadPortfolio();   
        }


        jQuery('div.tz-logo, .header-search .search ').css('height',header_height+'px');
        var scoll_height = win_height - header_height;


        jQuery('section#tz-main').css('margin-top',header_height+'px');

        if(win_Width > 979){
        jQuery('#sidebar-left').css({
            'width':sidebar_width+'px'
        });
        }

        jQuery('#off-canvas-nav .caret').click(function(){
            jQuery(this).parent().find('.dropdown-menu').slideToggle();
        });

        jQuery(function() {
            jQuery('.item-music-image').css({backgroundSize: "cover"});
        });

    });
</script>

<script type="text/javascript">

jQuery(window).bind("load resize",function(){
    var pageView = "<?php echo $pageview; ?>";
    var header_height = jQuery('header.tz-header').height();
    var win_height = jQuery(window).height();
    jQuery('body').css('min-height',win_height+1);
    var scoll_height = win_height - header_height;

    var sidebar_width = "<?php echo $sidebar_width; ?>";
    var tz_content_width = jQuery('body').width();
    var win_Width = jQuery(window).width();
    var filter_html = jQuery('#tz_options').html();

    content_width = tz_content_width - sidebar_width;

    var $container = jQuery('#portfolio');



    jQuery('section#tz-main').css('margin-top',header_height+'px');

    jQuery('.tz-logo').css({
        'width':sidebar_width+'px'
    });

    if(win_Width > 979){
        jQuery('#tz-content').css({
            width: content_width+'px',
            'margin-left':sidebar_width +'px'
        });
        jQuery('#sidebar-left').css({
            'width':sidebar_width+'px'
        });


    }
    if(pageView=="portfolio"){

        loadPortfolio();
    }
    if(pageView == "timeline"){
        loadTimeline();
    }

    if(win_Width < 979){
    jQuery('#tz-content').css({
        'margin-left':0
    });
    }


//    jQuery('#scrollbar1').tinyscrollbar();


});
</script>


