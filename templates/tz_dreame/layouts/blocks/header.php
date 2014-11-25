<?php
// No direct access.
defined('_JEXEC') or die;
$app = JFactory::getApplication();

?>

	<header class="tz-header">
        <div class="row-fluid">
        <div class="container-fluid">
            <div class="tz-inner tz-border-bottom">
                <div class="row-fluid">
                <div class="tz-logo span2">
                    <h1 class="tz-logo pull-left">
                        <?php $this->loadBlock('logo'); ?>
                    </h1>
                </div>

                <div class="tz_mainmenu span8">
                <nav id="plazart-mainnav" class="wrap plazart-megamenu navbar-collapse-fixed-top">
                    <div class="row-fluid">
                        <div class="container-fluid">
                            <div class="tz-inner">
                                <div class="container navbar ">
                                    <div class="navbar-inner">
                                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                            <i class="icon-reorder"></i>
                                        </button>
                                        <div class="nav-collapse collapse<?php echo $this->getParam('navigation_collapse_showsub', 1) ? ' always-show' : '' ?>">
                                            <?php if ($this->getParam('navigation_type') == 'megamenu') : ?>
                                                <?php $this->megamenu($this->getParam('mm_type', 'mainmenu')) ?>
                                            <?php else : ?>
                                                <jdoc:include type="modules" name="<?php $this->_p('mainnav') ?>" style="raw" />
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>

                                <?php if ($this->API->modules('menu-right')): ?>
                                    <div class="header-social span4 pull-right">
                                        <jdoc:include type="modules" name="menu-right" style="tz_style" />
                                    </div>
                                <?php endif; ?>
                                <div class="clr"></div>
                            </div>
                        </div>
                    </div>

                </nav>
                </div>

            <?php if ($this->API->modules('search')): ?>
                <div class="header-search span2 pull-right">
                    <jdoc:include type="modules" name="search" style="tz_style" />
                </div>
            <?php endif; ?>
            </div>

            <div class="clr"></div>
            </div>
        </div>
        </div>
    </header>
