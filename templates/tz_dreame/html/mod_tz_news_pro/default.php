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

?>
<div class = "mod_tz_news">
    <ul class="tz_news">
<?php if(isset($list) && !empty($list)){
     foreach($list as $item){ ?>
            <li class="tz_item_default">
                <?php if($image == 1){ ?>
                    <span class="tz_image">
                        <a  class="iframe" href="<?php echo $item->link; ?>">
                            <img src = "<?php echo JUri::root().$item->image; ?>" alt ="" />
                        </a>
                    </span>
                <?php } ?>

                <?php if($title == 1){

                    ?>
                    <span class="tz_title">
                        <a  class="iframe font-bold" href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>">

                            <?php
                            if($limittitle){
                                echo substr($item->title,0, $limittitle);

                            } else {
                                echo $item->title;
                            }
                            ?>

                        </a>
                    </span>
                <?php } ?>

                <?php if($date == 1){ ?>
                    <span class="tz_date">
                            <?php echo JText::sprintf(date(JText::_('MOD_TZ_NEWS_DATE_FOMAT_TPL'),strtotime($item->created))) ; ?>
                    </span>
                <?php } ?>
                <?php if($hits == 1){ ?>
                    <span class="tz_hits">
                        <?php echo JText::sprintf('MOD_TZ_NEWS_HIST_LIST', $item->hit) ?>
                    </span>
                <?php } ?>

                <?php if($des == 1){ ?>
                    <p>
                        <?php if($limittext){
                                    echo substr($item->intro, 3, $limittext);
                            } else{
                                    echo $item->intro;
                                }
                        ?>
                    </p>
                <?php } ?>

                <?php if($readmore == 1){ ?>
                    <span class="tz_readmore">
                        <a  class="iframe" href="<?php echo $item->link; ?>"><?php echo JText::_('MOD_TZ_NEWS_READ_MORE') ?></a>
                    </span>
                <?php } ?>

                <span style ="clear:both; height:0;">&nbsp;</span>
            </li>
        <?php } } ?>
    </ul>
</div>