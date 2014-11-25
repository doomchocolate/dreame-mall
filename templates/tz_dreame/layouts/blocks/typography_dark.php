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
$pageview = JRequest::getVar('view');
if(isset($content_inner)){
$offset_inner = $content_inner + $left_inner;
}
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
                                <div class=" tz-inner-content span<?php if(isset($content_inner)){ echo $content_inner;} ?> <?php if ($this->API->modules('left1')){ ?>offset<?php echo $this->getParam('left_sidebar_inner_width', 3); }?>">
                                    <?php if($this->API->modules('mass-top')) : ?>
                                        <section id="tz-mass-top">
                                            <jdoc:include type="modules" name="mass-top" style="tz_style" />
                                        </section>
                                    <?php endif; ?>

                                    <div id="tz-typography">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Columns</div>
                                                <h2>1/1</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                    beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses,
                                                    all the space between the "promontory of the Treaty" and the river.  Here, as at Hong Kong and Calcutta, were mixed crowds of all races,
                                                    Americans and English, Chinamen and Dutchmen, mostly merchants ready to buy or sell anything.
                                                    The Frenchman felt himself as much alone among them as if he had dropped down in the midst of Hottentots.
                                                    He had, at least, one resource to call on the French and English consuls at Yokohama for assistance.
                                                    But he shrank from telling the story of his adventures, intimately connected as it was with that of his master;
                                                    and, before doing so, he determined to exhaust all other means of aid.  As chance did not favour him in the European quarter,
                                                    he penetrated that inhabited by the native Japanese, determined, if necessary, to push on to Yeddo.
                                                    The Japanese quarter of Yokohama is called Benten, after the goddess of the sea, who is worshipped on the islands round about.
                                                    There Passepartout beheld beautiful fir and cedar groves, sacred gates of a singular architecture,
                                                    bridges half hid in the midst of bamboos and reeds, temples shaded by immense cedar-trees.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span6">
                                                <h2>1/2</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                    beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses,
                                                    all the space between the
                                                </p>
                                            </div>
                                            <div class="span6">
                                                <h2>1/2</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                    beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses,
                                                    all the space between the
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span4">
                                                <h2>1/3</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas.
                                                </p>
                                            </div>
                                            <div class="span4">
                                                <h2>1/3</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas.
                                                </p>
                                            </div>
                                            <div class="span4">
                                                <h2>1/3</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span3">
                                                <h2>1/4</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter.
                                                </p>
                                            </div>
                                            <div class="span3">
                                                <h2>1/4</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter.
                                                </p>
                                            </div>
                                            <div class="span3">
                                                <h2>1/4</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter.
                                                </p>
                                            </div>
                                            <div class="span3">
                                                <h2>1/4</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span2">
                                                <h2>1/6</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                </p>
                                            </div>
                                            <div class="span2">
                                                <h2>1/6</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                </p>
                                            </div>
                                            <div class="span2">
                                                <h2>1/6</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                </p>
                                            </div>
                                            <div class="span2">
                                                <h2>1/6</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                </p>
                                            </div>
                                            <div class="span2">
                                                <h2>1/6</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                </p>
                                            </div>
                                            <div class="span2">
                                                <h2>1/6</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span8">
                                                <h2>2/3</h2>
                                                <p>
                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses,
                                                all the space between the "promontory of the Treaty" and the river.  Here, as at Hong Kong and Calcutta, were mixed crowds of all races,
                                                Americans and English,
                                                </p>
                                            </div>
                                            <div class="span4">
                                                <h2>1/3</h2>
                                                <p>
                                                    He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span9">
                                                <h2>3/4</h2>
                                                <p>
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                    beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses,
                                                    all the space between the "promontory of the Treaty" and the river.  Here, as at Hong Kong and Calcutta, were mixed crowds of all races,
                                                    Americans and English, Chinamen and Dutchmen, mostly merchants ready to buy or sell anything.
                                                    The Frenchman felt himself as much alone among them as if he had dropped down in the midst of Hottentots.
                                                </p>
                                            </div>
                                            <div class="span3">
                                                <h2>1/4</h2>
                                                <p>
                                                    He found himself at first in a thoroughly European quarter,
                                                    the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span9">
                                                <h2>5/6</h2>
                                                <p>
                                                    He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas,
                                                    beneath which he caught glimpses of neat peristyles.  This quarter occupied, with its streets, squares, docks, and warehouses,
                                                    all the space between the "promontory of the Treaty" and the river.  Here, as at Hong Kong and Calcutta, were mixed crowds of all races,
                                                    Americans and English, Chinamen and Dutchmen, mostly merchants ready to buy or sell anything.
                                                    The Frenchman felt himself as much alone among them as if he had dropped down in the midst of Hottentots.
                                                </p>
                                            </div>
                                            <div class="span3">
                                                <h2>1/6</h2>
                                                <p>
                                                    He found himself at first in a thoroughly European quarter,
                                                    the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Pricing Table</div>
                                                <div id="pricing-table-1" class="full-boxed-pricing  row-fluid">
                                                    <div class="column span4 bg-light-1">
                                                        <ul class="price-title unstyled">
                                                            <li class="title-row">Free Package</li>
                                                            <li class="pricing-row">
                                                                <div class="price price-with-decimal"><label>$</label><em class="exact_price">0</em><em class="time">/month</em></div>
                                                            </li>
                                                        </ul>
                                                        <ul class="unstyled">
                                                            <li class="normal-row">Vestibulum erat</li>
                                                            <li class="normal-row">Accumsan posuere</li>
                                                            <li class="normal-row">Unlimited Users</li>
                                                            <li class="normal-row">Sodales molestie</li>
                                                            <li class="normal-row">Mauris ut ante lacus</li>
                                                            <li class="normal-row">Vehicula dignissim</li>
                                                            <li class="footer-row"><a class="btn btn-large bg-orange" href="#" target="">Sign Up </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column span4 bg-light-1">
                                                        <ul class="price-title unstyled">
                                                            <li class="title-row">Pro Package</li>
                                                            <li class="pricing-row">
                                                                <div class="price price-with-decimal"><label>$</label><em class="exact_price">10</em><em class="time">/month</em></div>
                                                            </li>
                                                        </ul>
                                                        <ul class="unstyled">
                                                            <li class="normal-row">Vestibulum erat</li>
                                                            <li class="normal-row">Accumsan posuere</li>
                                                            <li class="normal-row">Unlimited Users</li>
                                                            <li class="normal-row">Sodales molestie</li>
                                                            <li class="normal-row">Mauris ut ante lacus</li>
                                                            <li class="normal-row">Vehicula dignissim</li>
                                                            <li class="footer-row"><a class="btn btn-large bg-orange" href="#" target="">Sign Up </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column span4 bg-light-1">
                                                        <ul class="price-title unstyled">
                                                            <li class="title-row">Ultimate Package</li>
                                                            <li class="pricing-row">
                                                                <div class="price price-with-decimal"><label>$</label><em class="exact_price">20</em><em class="time">/month</em></div>
                                                            </li>
                                                        </ul>
                                                        <ul class="unstyled">
                                                            <li class="normal-row">Vestibulum erat</li>
                                                            <li class="normal-row">Accumsan posuere</li>
                                                            <li class="normal-row">Unlimited Users</li>
                                                            <li class="normal-row">Sodales molestie</li>
                                                            <li class="normal-row">Mauris ut ante lacus</li>
                                                            <li class="normal-row">Vehicula dignissim</li>
                                                            <li class="footer-row"><a class="btn btn-large bg-orange" href="#" target="">Sign Up </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">

                                            <div class="span12">
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <div id="pricing-table-2" class="full-boxed-pricing  row-fluid">
                                                    <div class="column span4 column-first bg-light-1 border-color-dark">
                                                        <ul class="price-title unstyled">
                                                            <li class="title-row">Free Package</li>
                                                            <li class="pricing-row">
                                                                <div class="price price-with-decimal"><label>$</label><em class="exact_price">0</em><em class="time">/month</em></div>
                                                            </li>
                                                        </ul>
                                                        <ul class="unstyled">
                                                            <li class="normal-row bg-light-2">Vestibulum erat</li>
                                                            <li class="normal-row">Accumsan posuere</li>
                                                            <li class="normal-row bg-light-2">Unlimited Users</li>
                                                            <li class="normal-row">Sodales molestie</li>
                                                            <li class="normal-row bg-light-2">Mauris ut ante lacus</li>
                                                            <li class="footer-row"><a class="btn btn-medium bg-orange" href="#" target="">Sign Up </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column span4 over  bg-light-1 dark-shadow border-color-dark">
                                                        <ul class="price-title unstyled">
                                                            <li class="title-row none-shadow">Pro Package</li>
                                                            <li class="pricing-row">
                                                                <div class="price price-with-decimal"><label>$</label><em class="exact_price">10</em><em class="time">/month</em></div>
                                                            </li>
                                                        </ul>
                                                        <ul class="unstyled">
                                                            <li class="normal-row bg-light-2">Vestibulum erat</li>
                                                            <li class="normal-row">Accumsan posuere</li>
                                                            <li class="normal-row bg-light-2">Unlimited Users</li>
                                                            <li class="normal-row">Sodales molestie</li>
                                                            <li class="normal-row bg-light-2">Mauris ut ante lacus</li>
                                                            <li class="footer-row none-shadow"><a class="btn btn-medium bg-orange" href="#" target="">Sign Up </a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column span4  bg-light-1 tz-border-left border-color-dark">
                                                        <ul class="price-title unstyled">
                                                            <li class="title-row">Ultimate Package</li>
                                                            <li class="pricing-row">
                                                                <div class="price price-with-decimal"><label>$</label><em class="exact_price">20</em><em class="time">/month</em></div>
                                                            </li>
                                                        </ul>
                                                        <ul class="unstyled">
                                                            <li class="normal-row bg-light-2">Vestibulum erat</li>
                                                            <li class="normal-row">Accumsan posuere</li>
                                                            <li class="normal-row bg-light-2">Unlimited Users</li>
                                                            <li class="normal-row">Sodales molestie</li>
                                                            <li class="normal-row bg-light-2">Mauris ut ante lacus</li>
                                                            <li class="footer-row"><a class="btn btn-medium bg-orange" href="#" target="">Sign Up </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Accordion/Toggles</div>
                                                <div class="accordion" id="accordion1">
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading accordion-heading-light">
                                                            <a class="accordion-toggle in" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne">
                                                                Collapsible Group Item #1
                                                            </a>
                                                        </div>
                                                        <div id="collapseOne" class="accordion-body collapse in">
                                                            <div class="accordion-inner color-gray">
                                                                Important port of call in the Pacific, where all the mail-steamers, and those carrying travellers between North America, China, Japan, and the Oriental islands put in.
                                                                It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the residence of the Tycoon,
                                                                the civil Emperor, before the Mikado, the spiritual Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house,
                                                                in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.
                                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading accordion-heading-light">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo">
                                                                Collapsible Group Item #2
                                                            </a>
                                                        </div>
                                                        <div id="collapseTwo" class="accordion-body collapse">
                                                            <div class="accordion-inner color-gray">
                                                                Important port of call in the Pacific, where all the mail-steamers, and those carrying travellers between North America, China, Japan, and the Oriental islands put in.
                                                                It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the residence of the Tycoon,
                                                                the civil Emperor, before the Mikado, the spiritual Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house,
                                                                in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.
                                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading accordion-heading-light">
                                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree">
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </div>
                                                        <div id="collapseThree" class="accordion-body collapse">
                                                            <div class="accordion-inner color-gray">
                                                                Important port of call in the Pacific, where all the mail-steamers, and those carrying travellers between North America, China, Japan, and the Oriental islands put in.
                                                                It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the residence of the Tycoon,
                                                                the civil Emperor, before the Mikado, the spiritual Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house,
                                                                in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.
                                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="accordion accordion-style2" id="accordion2">
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading bg-dark">
                                                            <a class="accordion-toggle border-none color-white" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1">
                                                                Collapsible Group Item #1
                                                            </a>
                                                        </div>
                                                        <div id="collapseOne1" class="accordion-body collapse">
                                                            <div class="accordion-inner color-gray">
                                                                Important port of call in the Pacific, where all the mail-steamers, and those carrying travellers between North America, China, Japan, and the Oriental islands put in.
                                                                It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the residence of the Tycoon,
                                                                the civil Emperor, before the Mikado, the spiritual Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house,
                                                                in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.
                                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading bg-dark">
                                                            <a class="accordion-toggle color-white border-none" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                                                Collapsible Group Item #2
                                                            </a>
                                                        </div>
                                                        <div id="collapseTwo1" class="accordion-body collapse in">
                                                            <div class="accordion-inner color-gray">
                                                                Important port of call in the Pacific, where all the mail-steamers, and those carrying travellers between North America, China, Japan, and the Oriental islands put in.
                                                                It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the residence of the Tycoon,
                                                                the civil Emperor, before the Mikado, the spiritual Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house,
                                                                in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.
                                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-group">
                                                        <div class="accordion-heading bg-dark">
                                                            <a class="accordion-toggle color-white border-none" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </div>
                                                        <div id="collapseThree1" class="accordion-body collapse">
                                                            <div class="accordion-inner color-gray">
                                                                Important port of call in the Pacific, where all the mail-steamers, and those carrying travellers between North America, China, Japan, and the Oriental islands put in.
                                                                It is situated in the bay of Yeddo, and at but a short distance from that second capital of the Japanese Empire, and the residence of the Tycoon,
                                                                the civil Emperor, before the Mikado, the spiritual Emperor, absorbed his office in his own.  The Carnatic anchored at the quay near the custom-house,
                                                                in the midst of a crowd of ships bearing the flags of all nations. Passepartout went timidly ashore on this so curious territory of the Sons of the Sun.
                                                                He had nothing better to do than, taking chance for his guide, to wander aimlessly through the streets of Yokohama.
                                                                He found himself at first in a thoroughly European quarter, the houses having low fronts, and being adorned with verandas, beneath which he caught glimpses of neat peristyles.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Social Icons</div>
                                                <div class="social-icon">
                                                    <a class="size30 tz-font-icon tz-font-icon-a  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-facebook  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-twitter2  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-plus  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-skype  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-linkedin  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-deviantart  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-bloger  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-twitter  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-myspace  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-flickr  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-tumblr  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-rss  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-stumble  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-vimeo  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-wordpress  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-youtube  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-yahoo  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-aim  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-dribble  color-gray hover-none"></a>

                                                    <a class="size30 tz-font-icon tz-font-icon-behance  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-apple  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-window  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-add  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-share  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-like  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-picasa  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-lastfm  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-pin  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-ember  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-qik  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-soundcloud  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-me  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-pinterest  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-down  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-repeat  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-flow  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-star  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-music  color-gray hover-none"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-completed  color-gray hover-none"></a>


                                                    <a class="size30 tz-font-icon tz-font-icon-facebook bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-twitter2 bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-plus bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-skype bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-linkedin bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-deviantart bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-bloger bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-twitter bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-myspace bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-flickr bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-tumblr bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-rss bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-stumble bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-vimeo bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-wordpress bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-youtube bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-yahoo bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-aim bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-dribble bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-behance bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-a bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-apple bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-window bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-add bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-share bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-like bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-picasa bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-lastfm bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-pin bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-ember bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-qik bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-soundcloud bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-me bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-pinterest bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-down bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-repeat bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-flow bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-star bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-music bg-black font-border-circle color-gray"></a>
                                                    <a class="size30 tz-font-icon tz-font-icon-completed bg-black font-border-circle color-gray"></a>


                                                </div>

                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Skills</div>
                                                <div class="skill">
                                                    <div class="row-fluid bg-dark color-white"><i class="icon-mobile-phone size28"></i>IOS development - 90%</div>
                                                    <div class="progress progress-danger"> 
                                                        <div class="bar bg-orange" style="width: 90%"></div>
                                                    </div>
                                                    <div class="row-fluid bg-dark color-white"><i class="icon-film size22"></i>Video Player- 70%</div>
                                                    <div class="progress progress-danger"> 
                                                        <div class="bar bg-orange" style="width: 70%"></div>
                                                    </div>
                                                    <div class="row-fluid bg-dark color-white"><i class="icon-search size22"></i>Search Processing - 70%</div>
                                                    <div class="progress progress-danger"> 
                                                        <div class="bar bg-orange" style="width: 70%"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Alerts</div>
                                                <div class="alert warning bg-yellow-light">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <strong>Warning!</strong> Aenean posuere ipsum tellus consequat commodo.
                                                </div>
                                                <div class="alert alert-error ">
                                                    <button data-dismiss="alert" class="close" type="button">&times;</button>
                                                    <strong>Error!</strong> Aenean posuere ipsum tellus consequat commodo.
                                                </div>
                                                <div class="alert alert-success bg-green-light">
                                                    <button data-dismiss="alert" class="close" type="button">&times;</button>
                                                    <strong>Success!</strong> Aenean posuere ipsum tellus consequat commodo.
                                                </div>
                                                <div class="alert alert-info">
                                                    <button data-dismiss="alert" class="close" type="button">&times;</button>
                                                    <strong>Info!</strong> Aenean posuere ipsum tellus consequat commodo.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Tooltip, Dropcaps</div>
                                                <div class="tooltip_content">
                                                    <p><span class="dropcap bg-none">T </span>ight pants next level keffiyeh
                                                        <a title="" data-toggle="tooltip" href="#" data-original-title="Default tooltip">you probably</a>
                                                        haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown.
                                                        Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
                                                        <a title="" data-toggle="tooltip" href="#" data-original-title="Another tooltip">have a</a>
                                                        terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                                                        Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray.
                                                        A really ironic artisan <a title="" data-toggle="tooltip" href="#" data-original-title="A much longer tooltip belongs right here to demonstrate the max-width we apply.">whatever keytar</a>,
                                                        scenester farm-to-table banksy Austin <a title="" data-toggle="tooltip" href="#" data-original-title="The last tip!">twitter handle</a>
                                                        freegan cred raw denim single-origin coffee viral.
                                                    </p>
                                                </div>

                                                <div class="drops">
                                                    <p><span class="dropcap bg-red-orange">P </span>raesent metus mi, auctor id neque non, lacinia mollis risus. Nullam a nisi lectus.
                                                        Ut congue euismod diam. Nunc suscipit a diam eget aliquet. Duis malesuada in eros sit amet bibendum.
                                                        Mauris interdum tellus quis tortor posuere, id bibendum dui sodales. Quisque gravida quam et neque dapibus, a consequat lacus hendrerit.
                                                        Donec aliquam tempus ipsum, in tristique sem varius nec. Nam facilisis aliquet ultricies.
                                                        Donec commodo, risus a varius luctus, mi massa auctor libero, non laoreet metus elit quis sem.
                                                        Cras imperdiet rhoncus sapien, nec dapibus erat convallis id. Phasellus fermentum lacus at tempor blandit.
                                                        Morbi quis tincidunt libero. </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Blockquotes</div>

                                                <blockquote class="border-orange pull-left quote-orange">

                                                    <p class="color-orange">
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese screens,
                                                        and who were playing in the midst of short-legged poodles and yellowish cats, might have been gathered. The streets were crowded with people.
                                                        Priests were passing in processions, beating their dreary tambourines.
                                                    </p>
                                                </blockquote>

                                                <div class="row-fluid">
                                                <div class="span6">
                                                    <blockquote class="border-none pull-left quote-dark tz-border-top tz-border-bottom border-dark">
                                                        <p class="color-white">
                                                            Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets,
                                                            where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese screens,
                                                            and who were playing in the midst of short-legged poodles and yellowish cats, might have been gathered. The streets were crowded with people.
                                                            Priests were passing in processions, beating their dreary tambourines.
                                                        </p>
                                                    </blockquote>
                                                </div>
                                                </div>

                                                <div class="bg-orange quote-content pull-left">
                                                <blockquote class="border-white pull-left quote-light">
                                                    <p class="color-white">
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese screens,
                                                        and who were playing in the midst of short-legged poodles and yellowish cats, might have been gathered. The streets were crowded with people.
                                                        Priests were passing in processions, beating their dreary tambourines.
                                                    </p>
                                                </blockquote>
                                                </div>

                                                <div class="bg-dark quote-content pull-left">
                                                <blockquote class="border-white pull-left quote-light">
                                                    <p class="color-white">
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese screens,
                                                        and who were playing in the midst of short-legged poodles and yellowish cats, might have been gathered. The streets were crowded with people.
                                                        Priests were passing in processions, beating their dreary tambourines.
                                                    </p>
                                                </blockquote>
                                                </div>



                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Tabs</div>
                                            </div>
                                            <div class="span4 first">
                                                <ul class="nav nav-tabs myTab tab-dark" id="myTab">
                                                    <li><a href="#home" data-toggle="tab">Home</a></li>
                                                    <li class="active"><a href="#profile"  data-toggle="tab">Profile</a></li>
                                                    <li><a href="#messages" data-toggle="tab">Messages</a></li>
                                                </ul>

                                                <div class="tab-content bg-dark color-white">
                                                    <div class="tab-pane fade" id="home">
                                                        Where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese.
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets.

                                                    </div>
                                                    <div class="tab-pane active in fade" id="profile">
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese
                                                    </div>
                                                    <div class="tab-pane fade" id="messages">
                                                        Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="span7 pull-right">
                                                <ul class="nav nav-tabs myTab tab-orange" id="myTab1">
                                                    <li><a href="#home1" data-toggle="tab">Home</a></li>
                                                    <li class="active"><a href="#profile1" data-toggle="tab">Profile</a></li>
                                                    <li><a href="#messages1" data-toggle="tab">Messages</a></li>
                                                </ul>

                                                <div class="tab-content bg-orange">
                                                    <div class="tab-pane fade color-white" id="home1">
                                                        Where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese.
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets.

                                                    </div>
                                                    <div class="tab-pane fade active in color-white" id="profile1">
                                                        Holy retreats where were sheltered Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese
                                                    </div>
                                                    <div class="tab-pane fade color-white" id="messages1">
                                                        Buddhist priests and sectaries of Confucius, and interminable streets,
                                                        where a perfect harvest of rose-tinted and red-cheeked children, who looked as if they had been cut out of Japanese
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12">
                                                <div class="group-title">Buttons</div>
                                                <div class="row">
                                                    <div class="span2">
                                                        <p><a href="" class="btn btn-small bg-orange"> Small Button</a></p>
                                                        <p><a href="" class="btn btn-small bg-black"> Small Button</a></p>
                                                        <p><a href="" class="btn btn-small bg-dark"> Small Button</a></p>

                                                    </div>
                                                    <div class="span3">
                                                        <p><a href="" class="btn btn-medium bg-orange"> Normal Button</a></p>
                                                        <p><a href="" class="btn btn-medium bg-black"> Normal Button</a></p>
                                                        <p><a href="" class="btn btn-medium bg-dark"> Normal Button</a></p>

                                                    </div>
                                                    <div class="span4">
                                                        <p><a href="" class="btn btn-large bg-orange"> Large Button</a></p>
                                                        <p><a href="" class="btn btn-large bg-black"> Large Button</a></p>
                                                        <p><a href="" class="btn btn-large bg-dark"> Large Button</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12"> <div class="group-title">Popover, Labels, Badges</div></div>
                                        </div>
                                        <div class="row-fluid">

                                            <div class="span2">
                                                <h2>Labels </h2>
                                                <p><span class="label">Default</span></p>
                                                <p><span class="label label-success">Success</span></p>
                                                <p><span class="label label-warning">Warning</span></p>
                                            </div>
                                            <div class="span3">
                                                <h2>Badges</h2>
                                                <p><span class="badge">1</span></p>
                                                <p><span class="badge badge-success">2</span></p>
                                                <p><span class="badge badge-warning">4</span></p>
                                                <p><span class="badge badge-important">6</span></p>
                                                <p><span class="badge badge-info">8</span></p>
                                                <p><span class="badge badge-inverse">10</span></p>
                                            </div>
                                            <div class="span7">
                                                <h2>Popover</h2>
                                                <div class="popovers">
                                                    Vestibulum lorem diam, placerat non erat id, accumsan pretium urna. Cras blandit cursus metus. Donec eget gravida sem. Proin sollicitudin mi nulla, at vehicula orci tempus sed.<a class="color-orange" title="" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-placement="top" data-toggle="popover"  href="#" data-original-title="Popover on top">Popover on top</a>Donec eget consequat diam. Sed cursus lobortis neque, vitae rutrum neque elementum nec. Proin sed viverra odio.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row-fluid">
                                            <div class="span12"> <div class="group-title">Tables</div></div>
                                        </div>
                                        <div class="row-fluid tz-table">
                                            <div class="span3 tz-column column-first">
                                                <ul class="table-title bg-gray-dark">
                                                    <li class="bg-gray-dark">The civil Emperor, before the </li>
                                                </ul>
                                                <ul class="table-content color-black">
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                </ul>
                                            </div>
                                            <div class="span3 tz-column">
                                                <ul class="table-title bg-gray-dark ">
                                                    <li class="bg-gray-dark">The civil Emperor, before the </li>
                                                </ul>
                                                <ul class="table-content color-black">
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                </ul>
                                            </div>
                                            <div class="span3 tz-column">
                                                <ul class="table-title bg-gray-dark">
                                                    <li class="bg-gray-dark">The civil Emperor, before the </li>
                                                </ul>
                                                <ul class="table-content color-black">
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                </ul>
                                            </div>
                                            <div class="span3 tz-column column-last">
                                                <ul class="table-title bg-gray-dark">
                                                    <li class="bg-gray-dark">The civil Emperor, before the </li>
                                                </ul>
                                                <ul class="table-content color-black ">
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light">Mikado, the spiritual Emper</li>
                                                    <li class="bg-light-1">Mikado, the spiritual Emper</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

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
                        <aside id="sidebar-left" class="tz-border-right tz-border-top span<?php echo $this->getParam('left_sidebar_width', 3); ?> left-sidebar pull-left offset-<?php echo $offset;?>">
                            <div class="sidebar-nav sidebar-level1">

                                <?php if($pageview == 'portfolio' || $pageview == 'timeline'){ ?>
                                    <div id="tz_options"></div>
                                <?php } ?>

                                <jdoc:include type="modules" name="left" style="tz_style" />

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
