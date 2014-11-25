<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<!-- MAIN NAVIGATION -->
<nav id="plazart-mainnav" class="wrap plazart-megamenu navbar-collapse-fixed-top">
    <div class="row-fluid">
        <div class="container-fluid">
            <div class="tz-inner tz-border-bottom">
              <div class="container navbar span8">
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
<!-- //MAIN NAVIGATION -->