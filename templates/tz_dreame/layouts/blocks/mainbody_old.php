<?php
// No direct access.
defined('_JEXEC') or die;
$app = JFactory::getApplication();

$offset = $this->API->get('mainbody_width', 12) + $this->getParam('left_sidebar_width', 3);

$left_inner = $this->getParam('left_sidebar_inner_width', 3);

$right_inner = $this->getParam('right_sidebar_inner_width', 3);

if ($this->countModules('right1') && $this->countModules('left1')=='') {
    $content_inner = 12 - $right_inner;
}
if ($this->countModules('left1') && $this->countModules('right1')=='') {
    $content_inner = 12 - $left_inner;
}
if ($this->countModules('right1') && $this->countModules('left1')){
    $content_inner = 12 - $right_inner - $left_inner;
}
$offset_inner = $content_inner + $left_inner;
?>
<section id="tz-main">
    <section class="tz-main-body">
        <div class="container-fluid">
        <div class="tz-inner">
        <?php if($this->API->modules('top')) : ?>
        <section id="tz-top" class="row-fluid">
            <jdoc:include type="modules" name="top" modpos="top" modnum="<?php echo $this->API->modules('top'); ?>" modamount="4" style="tz_style" />
        </section>
        <?php endif; ?>

        <section class="tz-content-wrap row-fluid">


            <section id="tz-content" class=" span<?php echo $this->API->get('mainbody_width', 12);?> <?php if ($this->API->modules('left')){ ?>offset<?php echo $this->getParam('left_sidebar_width', 3); }?>">


                <?php  if(count($app->getMessageQueue())) :
                    ?>
                    <div class="container-fluid tz-message">
                        <jdoc:include type="message" style="xhtml"/>
                    </div>
                <?php endif; ?>

                <?php if($this->API->modules('content-top')) : ?>
                <section id="tz-content-top" class="tz-content-top-inner">
                    <jdoc:include type="modules" name="content-top" style="tz_style" />
                </section>
                <?php endif; ?>


                <?php if($this->isFrontpage() && $this->API->modules('mainbody')) : ?>
                <section id="tz-mainbody">
                    <jdoc:include type="modules" name="mainbody" style="tz_style" />
                </section>
                <?php else : ?>
                <section id="tz-component" class="row-fluid">
                    <div class=" tz-inner-content span<?php echo $content_inner;?> <?php if ($this->API->modules('left1')){ ?>offset<?php echo $this->getParam('left_sidebar_inner_width', 3); }?>">
                        <?php if($this->API->modules('mass-top')) : ?>
                            <section id="tz-mass-top">
                                <jdoc:include type="modules" name="mass-top" style="tz_style" />
                            </section>
                        <?php endif; ?>

                        <jdoc:include type="component" />
                        <?php if($this->API->modules('mass-bottom')) : ?>
                            <section id="tz-mass-bottom">
                                <jdoc:include type="modules" name="mass-bottom" style="tz_style" />
                            </section>
                        <?php endif; ?>

                    </div>

                    <?php  if ($this->API->modules('left1')): ?>
                        <div class="left-sidebar-inner span<?php echo $this->getParam('left_sidebar_inner_width', 3); ?> pull-left offset-<?php echo $offset_inner;?>">
                            <div class="sidebar-nav sidebar-nav-inner">
                                <jdoc:include type="modules" name="left1" style="tz_style" />
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php  if ($this->API->modules('right1')): ?>
                        <div class="right-sidebar-inner span<?php echo $this->getParam('right_sidebar_inner_width', 3); ?>">
                            <div class="sidebar-nav sidebar-nav-inner">
                            <jdoc:include type="modules" name="right1" style="tz_style" />
                            </div>
                        </div>
                    <?php endif; ?>

                </section>
                <?php endif; ?>

                <?php if($this->API->modules('content-bottom')) : ?>
                <section id="tz-content-bottom">
                    <jdoc:include type="modules" name="content-bottom" style="tz_style" />
                </section>
                <?php endif; ?>
            </section>


            <?php  if ($this->API->modules('left')): ?>
                <aside id="sidebar-left" class="tz-border-right tz-border-top span<?php echo $this->getParam('left_sidebar_width', 3); ?> left-sidebar pull-left ">
                    <div class="sidebar-nav sidebar-level1">

                        <div id="scrollbar1">
                            <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                            <div class="viewport">
                                <div class="overview">
                                    <div id="tz_options"></div>
                                    <jdoc:include type="modules" name="left" style="tz_style" />
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            <?php endif; ?>

            <?php if ($this->API->modules('right')): ?>
            <aside id="right-sidebar" class="span<?php echo $this->getParam('right_sidebar_width', 3); ?> right-sidebar pull-right">

                <div class="sidebar-nav sidebar-level1">
                    <jdoc:include type="modules" name="right" style="tz_style" />
                </div>
            </aside>
            <?php endif; ?>
            <div class="clr"></div>
        </section>

        </div>
        </div>
    </section>
</section>