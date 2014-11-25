<?php
/*------------------------------------------------------------------------

# MOD_TZ_NEW_PRO Extension

# ------------------------------------------------------------------------

# author    tuyennv

# copyright Copyright (C) 2013 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

    // no direct access
    defined('_JEXEC') or die;


    $document   =   JFactory::getDocument();
    $document->addStyleSheet('modules/mod_tz_news_pro/css/flexslider.css');
    $document->addScript('modules/mod_tz_news_pro/js/jquery.flexslider.js');
    $tz_autoslide = $params->get('tz_autoslide');
    $tz_speed = $params->get('tz_slideSpeed');
    $tz_direction = $params->get('tz_direction_slide');
    if($list):

?>
    <div class="ser-bottom-middle">
        <div class="bottom-middle-slide ser-bottom-middle-slide">
            <div class="img-bottom-slide">
                <div class="flexslider">
                    <ul class="slides">
                        <?php foreach($list as $item): ?>
                            <li>

                                <div class="info_slide">
                                    <?php if($image == 1){ ?>
                                        <span class="tz_image">
                                            <img src = "<?php echo JUri::root().$item->image; ?>" alt ="<?php echo $item->title; ?>" />
                                        </span>
                                    <?php } ?>
                                    <?php if($title == 1 || $des == 1 || $readmore == 1) { ?>
                                        <div class="sl-description">
                                    <?php } ?>
                                    <?php if($title == 1){ ?>
                                        <h3 class="tz_title_slide">
                                            <a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a>
                                        </h3>
                                    <?php } ?>
                                    <?php if($hits == 1){ ?>
                                        <span class="tz_hits">
                                            <?php echo JText::sprintf('MOD_TZ_NEWS_HIST_LIST', $item->hit) ?>
                                        </span>
                                    <?php } ?>
                                    <?php if($date == 1){ ?>
                                        <span class="tz_date">
                                            <?php echo JText::sprintf("MOD_TZ_NEWS_DATE_ALL",date(JText::_('MOD_TZ_NEWS_DATE_FOMAT'),strtotime($item->created))) ; ?>
                                        </span>
                                    <?php } ?>

                                    <?php if($des == 1){ ?>
                                        <p class="hidden-phone">
                                            <?php
                                                if(isset($limittext) && !empty($limittext)){
                                                    $arr_title = explode(' ',$item->intro);
                                                    $arr_title = array_slice($arr_title,0,$limittext);
                                                    $arr_text  = implode(' ',$arr_title);
                                                    echo $arr_text;
                                                }else{
                                                    echo strip_tags($item->intro);
                                                }
                                            ?>
                                            <?php if($readmore == 1){ ?>
                                                <span class="tz_readmore">
                                                <a class="font-bold" href="<?php echo $item->link; ?>"><?php echo JText::_('MOD_TZ_NEWS_READ_MORE') ?></a>
                                                </span>
                                            <?php } ?>
                                        </p>
                                    <?php } ?>
                                    <?php if($title == 1 || $des == 1 || $readmore == 1) { ?>
                                    </div>
                                    <?php } ?>


                                </div>
                            </li>
                        <?php endforeach; ?>

                    </ul>

                </div>

            </div>
        </div><!--End .bottom-middle-cont -->
    </div><!--End .rec-bottom-middle right-->

<?php endif;?>


<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.flexslider').flexslider({
            slideshow: <?php echo $tz_autoslide; ?>,
            animation: "<?php echo $tz_effect; ?>",
            slideshowSpeed: <?php echo $tz_speed; ?>,
            controlNav: false,
            directionNav: <?php echo $tz_direction; ?>
        });
    });
</script>

