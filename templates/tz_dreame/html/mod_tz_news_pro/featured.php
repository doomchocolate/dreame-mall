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
<div class = "mod_tz_news mod_tz_featured">
    <ul class="tz_news">
        <?php if(isset($list) && !empty($list)){
            foreach($list as $item){ ?>
                <li class="tz_item_default">
                    <?php if($image == 1){ ?>
                        <span class="tz_image">
                            <a  class="iframe " href="<?php echo $item->link; ?>">
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

                    <?php if($date == 1 || $hits == 1 || $cats_new == 1 || $author_new ==1 ){  ?>
                        <div class="news_info">
                        <?php } ?>
                        <?php if($date == 1){ ?>
                            <span class="tz_date">
                            <?php echo JText::sprintf("MOD_TZ_NEWS_DATE_ALL",date(JText::_('MOD_TZ_NEWS_DATE_FOMAT'),strtotime($item->created))) ; ?>
                    </span>
                        <?php } ?>
                        <?php if($hits == 1){ ?>
                            <span class="tz_hits">
                        <?php echo JText::sprintf('MOD_TZ_NEWS_HIST_LIST', $item->hit) ?>
                    </span>
                        <?php } ?>
                        <?php if($cats_new == 1){
                            $arid = $item->arid;
                            $db = JFactory::getDbo();
                            $query = "SELECT cat.title as CatTitle, cat.id as CatId FROM #__content c LEFT JOIN #__categories cat ON(c.catid = cat.id) WHERE c.id = $arid";
                            $db->setQuery($query);
                            $value = $db->loadRow();
                            ?>
                            <span class="font-italic"><?php echo JText::_('COM_TZ_CATEGORY'); ?></span>
                            <a class="tz_cat" href="<?php echo JRoute::_(TZ_PortfolioHelperRoute::getCategoryRoute($value[1]));?>">
                                <?php echo $value[0]; ?>
                            </a>
                        <?php } ?>

                        <?php if($author_new == 1){
                                $db = JFactory::getDbo();
                                $query2 = "SELECT us.name as UsName, us.id as UsId FROM #__content c LEFT JOIN #__users us ON(c.created_by = us.id) WHERE c.id = $arid";
                                $db->setQuery($query2);
                                $value2 = $db->loadRow();
                                ?>
                                <span class="font-italic"><?php echo JText::_('COM_TZ_AUTHOR'); ?></span>
                                <a class="tz_author" href="<?php echo JRoute::_('index.php?option=com_tz_portfolio&amp;view=users&amp;created_by='.$value2[1]); ?>">
                                    <?php echo $value2[0]; ?>
                                </a>
                        <?php } ?>

                        <?php if($date == 1 || $hits == 1 || $cats_new == 1 || $author_new ==1 ){ ?>
                    </div>
                <?php } ?>

                    <?php if($des == 1){ ?>
                        <p>
                            <?php if($limittext){
                                echo substr(strip_tags($item->intro), 0, $limittext);
                            } else{
                                echo $item->intro;
                            }
                            ?>
                        </p>
                    <?php } ?>

                    <?php if($readmore == 1){ ?>
                        <span class="tz_readmore">
                        <a  class="iframe font-bold" href="<?php echo $item->link; ?>"><?php echo JText::_('MOD_TZ_NEWS_READ_MORE') ?></a>
                    </span>
                    <?php } ?>

                    <span style ="clear:both; height:0;">&nbsp;</span>
                </li>
            <?php } } ?>
    </ul>
</div>