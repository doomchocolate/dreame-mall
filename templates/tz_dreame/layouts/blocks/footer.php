<?php
// No direct access.
defined('_JEXEC') or die;
?>
<footer id="tz-footer" class="tz-footer">

    <?php if($this->API->modules('breadcrumb')) :?>
    <div class="container-fluid tz-breadcrumb">
    <div class="tz-inner">
            <div class="row-fluid">
                <section id="tz-breadcrumb">
                    <jdoc:include type="modules" name="breadcrumb" style="none" />
                </section>

                <?php if ($this->countModules('breadcrumb-right')): ?>
                    <div class="span4 tz-breadcrumb-right pull-right ">
                        <jdoc:include type="modules" name="breadcrumb-right" style="tz_style" />
                    </div>
                <?php endif; ?>
                <div class="clr"></div>
            </div>

        </div>
    </div>
    <?php endif; ?>
            <?php if ($this->countModules('bottom1 + bottom2 + bottom3 + bottom4 + bottom5 + bottom6')): ?>
    <div class="container-fluid">

        <div class="tz-inner">
            <div class="tz-bottom6 ">
                <div class="row-fluid">
                    <?php if ($this->countModules('bottom1')): ?>
                    <div class="span2 tz-bottom">
                        <jdoc:include type="modules" name="bottom1" style="tz_style" />
                    </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('bottom2')): ?>
                    <div class="span2 tz-bottom">
                        <jdoc:include type="modules" name="bottom2" style="tz_style" />
                    </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('bottom3')): ?>
                    <div class="span2 tz-bottom">
                        <jdoc:include type="modules" name="bottom3" style="tz_style" />
                    </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('bottom4')): ?>
                    <div class="span2 tz-bottom">
                        <jdoc:include type="modules" name="bottom4" style="tz_style" />
                    </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('bottom5')): ?>
                    <div class="span2 tz-bottom">
                        <jdoc:include type="modules" name="bottom5" style="tz_style" />
                    </div>
                    <?php endif; ?>
                    <?php if ($this->countModules('bottom6')): ?>
                    <div class="span2 tz-bottom">
                        <jdoc:include type="modules" name="bottom6" style="tz_style" />
                    </div>
                    <?php endif; ?>
                    <div class="clr"></div>
                </div>
            </div>
        </div>
    </div>
            <?php endif; ?>
    <div class="container-fluid">
    <div class="tz-inner ">
        <div class="footer-bottom">
        <div class="container-fluid">
            <div class="tz-inner">
            <?php if($this->countModules('footer')) : ?>
            <jdoc:include type="modules" name="footer" style="none" />
            <?php endif; ?>
                <div class="row-fluid">

                    <?php if($this->API->get('copyrights', '') == '') : ?>
                    <?php else : ?>
                        <div class="span6 footer">
                            <p class="pull-left tz-copyrights">


                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->countModules('footernav')): ?>
                        <div class="span6 tz-footernav">
                            <jdoc:include type="modules" name="footernav" style="tz_style" />
                        </div>
                    <?php endif; ?>
                    <div class="clr"></div>
                </div>

<!--        <p class="tz-disclaimer">TemPlaza is not affiliated with or endorsed by Open Source Matters or the Joomla! Project.<br />-->
<!--            The Joomla! logo is used under a limited license granted by Open Source Matters the trademark holder in the United States and other countries.<br />Icons from <a href="http://glyphicons.com">Glyphicons Free</a>, licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>-->
<!--        </div>-->
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

<script type="text/javascript">
tz = jQuery.noConflict();
    jQuery(window).load(function(){
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {

        } else {
            tz().UItoTop({ easingType: 'easeOutQuart' });

        }
        //You've scrolled this much:
    });

</script>
