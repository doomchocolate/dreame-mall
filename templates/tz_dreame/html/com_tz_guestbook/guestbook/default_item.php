<?php
/*------------------------------------------------------------------------

# TZ Guestbook Extension

# ------------------------------------------------------------------------

# author    TuNguyenTemPlaza

# copyright Copyright (C) 2012 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/
defined("_JEXEC") or die;

    if(isset($this->display) && !empty($this->display)){
        foreach($this->display as $rr){
?>
            <div class="warp-comment">
                <div  class="nnt-warp-comment-class">
                    <ul>
                        <?php
                        if(isset($this->nam) && $this->nam == 1){
                        ?>
                            <li class="nnt-warl-comment-li-1">
                                <span class="font-italic">
                                    <?php echo JText::_('COM_TZ_GUESTBOOK_AUTHOR'); ?>

                                <?php if(isset($this->fweb) && $this->fweb ==1 && !empty($rr->cwebsite)){ ?>

                                    <a  target="_blank" href="<?php echo $rr->cwebsite; ?>" rel="nofollow">
                                        <?php echo $rr->cname; ?>
                                    </a>
                                </span>
                                <?php } else { ?>
                                <span class="guest-name"><?php echo $rr->cname; ?></span>
                                <?php } ?>

                            <?php
                            if(isset($this->dat) && $this->dat == 1){
                                ?>
                                <span class="TzLine"><?php echo JText::_('COM_TZ_PORTFOLIO_SPACE');?></span>
                                <span class="guest-date">
                                    <?php echo $rr->cdate; ?>
                                </span>
                            <?php } ?>

                            <?php
                            if( $rr->cpublic ==1){
                                ?>
                                <span class="TzLine"><?php echo JText::_('COM_TZ_PORTFOLIO_SPACE');?></span>

                                <span class="guest-email">
                                    <?php
                                    echo $rr->cemail;
                                    ?>
                                </span>

                            <?php } ?>

                            </li>
                        <?php } ?>
                        <?php
                        if(isset($this->tit) && $this->tit == 1){
                        ?>
                            <li class="nnt-warl-comment-li-title">
                                <span class="guest-title">
                                <?php       echo $rr->ctitle; ?>
                                </span>
                            </li>
                        <?php   } ?>
                        <li class="nnt-warl-comment-li-comment">
                            <p>
                                <?php echo $rr->ccontent; ?>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        <?php
        }
    }
    ?>