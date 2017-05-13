<?php
    require_once('common.php');
    require_once('includes/header.inc.php');
?>
       
        <!-- Preloader
        <div class="preloader is-ninja">
            <div class="preloader-container">
                <div class="ball-scale">
                    <div></div>
                </div>
                <p><?php //echo $lang['PRELOADER_LOADING']; ?></p><br>
                <p><?php //echo $lang['PRELOADER_NOTICE']; ?></p>
            </div>
        </div> -->

        <a href="#home" class="btn btn-up"></a>

        <!-- Home -->
        <section class="section section-home is-parallaxed" id="home">
            <div class="overlay-pattern"></div>
            <div class="section-home-inner">
                <div class="title title-home">
                    <h1 class="wow fadeInLeft"><?php echo $lang['HOME_WELCOME_1']; ?></h1>
                    <h3 class="wow fadeInLeft"><?php echo $lang['HOME_WELCOME_2']; ?></h3>
                </div>
            </div>
            <div class="cookie">
                <p><?php echo $lang['COOKIE_TEXT']; ?><a href="http://www.google.fr/analytics/terms/fr.html" target="_blank"><?php echo $lang['COOKIE_MORE']; ?></a></p>
            </div>
            <a href="#early-access" class="icon-down-arrow wow fadeInDown">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </section>

        <!-- Punchline -->
        <section class="section-punchline is-ninja" id="punchline">
            <div class="row">
                <h2><?php echo $lang['PUNCHLINE_TEXT_1']; ?></h2>
                <h1><?php echo $lang['PUNCHLINE_TEXT_2']; ?></h1>
            </div>
        </section>

        <!-- Early Access Portfolio -->
        <section class="section-early-access" id="early-access">
            <section>
                <div class="row-small">
                    <h2><?php echo $lang['EARLY_ACCESS_TITLE']; ?></h2>
                    <h3><?php echo $lang['EARLY_ACCESS_SUBTITLE']; ?></h3>
                    <p><?php echo $lang['EARLY_ACCESS_DESC']; ?></p>
                </div>
            </section>
            <section>
                <div class="row-small">
                    <p><?php echo $lang['EARLY_ACCESS_DEV']; ?></p>
                    <h3><strong><?php echo $lang['EARLY_ACCESS_WHY']; ?></strong></h3>
                    <p><em><?php echo $lang['EARLY_ACCESS_ANSWER']; ?></em></p>
                    <hr>
                </div>
            </section>
            <a href="#" title="<?php echo $lang['EARLY_ACCESS_CLOSE_TITLE']; ?>" class="btn btn-steam"><?php echo $lang['EARLY_ACCESS_CLOSE']; ?></a>
            <div class="clear"></div>
        </section>

        <!-- About -->
        <section class="section section-about" id="about">
            <div class="row">
                <h2 class="title title-section title-about"><?php echo $lang['ABOUT_TITLE']; ?></h2>
                <h3 class="subtitle subtitle-about"><?php echo $lang['ABOUT_SUBTITLE']; ?></h3>
                <div class="content">
                    <p><big><?php echo $lang['ABOUT_HELLO']; ?></big></p>
                    <p><?php echo $lang['ABOUT_TEXT_1']; ?></p>
                    <p><?php echo $lang['ABOUT_TEXT_JOB']; ?></p>
                    <p><?php echo $lang['ABOUT_TEXT_2']; ?></p>
                    <p><strong><?php echo $lang['ABOUT_TEXT_3']; ?></strong></p>
                </div>
                <div class="content wow fadeInRight">
                    <img src="images/portrait.png" width=200 height=200 alt="<?php echo $lang['ABOUT_PORTRAIT_ALT']; ?>">
                </div>
                <div class="clear"></div>
                <a href="images/documents/<?php echo $lang['ABOUT_CV_FILE']; ?>" title="<?php echo $lang['ABOUT_CV_TITLE']; ?>" class="btn btn-primary btn-cv is-ninja" target="_blank"><span><?php echo $lang['ABOUT_CV']; ?></span></a>
            </div>
        </section>

        <!-- Works -->
        <section class="section section-works" id="works">
            <div class="row">
                <div class="title-container">
                    <h2 class="title title-section title-works"><?php echo $lang['WORKS_TITLE']; ?></h2>
                </div>
                <h3 class="subtitle subtitle-works"><?php echo $lang['WORKS_SUBTITLE']; ?></h3>
                <ul class="list list-filters-container">
                    <li class="list list-item list-filters active-filter" data-category="all"><?php echo $lang['WORKS_FILTERS_ALL']; ?></li>
                    <li class="list list-item list-filters" data-category="dev"><?php echo $lang['WORKS_FILTERS_CATEGORY_1']; ?></li>
                    <li class="list list-item list-filters" data-category="webdesign"><?php echo $lang['WORKS_FILTERS_CATEGORY_2']; ?></li>
                    <li class="list list-item list-filters" data-category="graphic"><?php echo $lang['WORKS_FILTERS_CATEGORY_3']; ?></li>
                    <li class="list list-item list-filters" data-category="audiovisual"><?php echo $lang['WORKS_FILTERS_CATEGORY_4']; ?></li>
                </ul>
                <ul class="list list-works-container clearfix">
                    <li class="list list-item list-works dev webdesign graphic">
                        <img src="images/works/voxoffice.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_VOXOFFICE_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_VOXOFFICE_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_VOXOFFICE_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item more-item"><a href="https://www.behance.net/gallery/33909780/VoxOffice" title="<?php echo $lang['WORKS_VOXOFFICE_DESC']; ?>" target="_blank"></a></li>
                                <li class="list list-item link-item"><a href="http://www.voxoffice.fr/" title="<?php echo $lang['WORKS_VOXOFFICE_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/aurea.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_AUREA_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_AUREA_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_AUREA_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item"><a href="https://aurea.eu" title="<?php echo $lang['WORKS_AUREA_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/jab.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_JAB_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_JAB_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_JAB_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item"><a href="http://armele-loick.rc2c.fr/index.html" title="<?php echo $lang['WORKS_JAB_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/cyclad.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_CYCLAD_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_CYCLAD_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_CYCLAD_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item"><a href="http://bacs-cyclad.fr" title="<?php echo $lang['WORKS_CYCLAD_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works graphic audiovisual">
                        <img src="images/works/centauri.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_CENTAURI_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_CENTAURI_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item"><a href="images/works/centauri_big.jpg" data-fancybox title="<?php echo $lang['WORKS_CENTAURI_DESC']; ?>"></a></li>
                                <li class="list list-item link-item"><a href="https://soundcloud.com/centauri-vision" title="<?php echo $lang['WORKS_CENTAURI_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev graphic">
                        <img src="images/works/animation.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_NEWREBORN_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_NEWREBORN_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item"><a href="images/works/animation_big.jpg" data-fancybox title="<?php echo $lang['WORKS_NEWREBORN_DESC']; ?>"></a></li>
                                <li class="list list-item link-item"><a href="http://pierre-prezelin.com/src/NewRebornJS" title="<?php echo $lang['WORKS_NEWREBORN_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev">
                        <img src="images/works/evad.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_EVAD_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_EVAD_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_EVAD_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item"><a href="http://evad-ensemble.fr/" title="<?php echo $lang['WORKS_EVAD_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works webdesign">
                        <img src="images/works/limbo.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_LIMBO_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_LIMBO_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/limbo_big.jpg" data-fancybox title="<?php echo $lang['WORKS_LIMBO_DESC']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works dev webdesign">
                        <img src="images/works/planete-zen.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_ZEN_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_ZEN_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item link-item"><a href="http://pierre-prezelin.com/src/planete-zen/" title="<?php echo $lang['WORKS_ZEN_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works graphic">
                        <img src="images/works/infographic_cars.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_CAR_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_CAR_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/infographic_cars_big.jpg" data-fancybox title="<?php echo $lang['WORKS_CAR_DESC']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works audiovisual">
                        <img src="images/works/spotted-episode2.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_SPOTTED_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_SPOTTED_TITLE']; ?></h4>
                            <p><?php echo $lang['WORKS_SPOTTED_SUBTITLE']; ?></p>
                            <ul class="list">
                                <li class="list list-item link-item"><a href="https://vimeo.com/90727720" title="<?php echo $lang['WORKS_SPOTTED_LINK']; ?>" target="_blank"></a></li>
                            </ul>
                        </div>
                    </li><!--
                    --><li class="list list-item list-works graphic">
                        <img src="images/works/ibanez.jpg" width="550" height="550" alt="<?php echo $lang['WORKS_IBANEZ_ALT']; ?>">
                        <div class="works-overlay">
                            <h4><?php echo $lang['WORKS_IBANEZ_TITLE']; ?></h4>
                            <ul class="list">
                                <li class="list list-item more-item">
                                    <a href="images/works/ibanez_big.jpg" data-fancybox title="<?php echo $lang['WORKS_IBANEZ_DESC']; ?>"></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div class="see-more">
                    <a href="#" class="btn btn-secondary btn-gallery is-ninja"><?php echo $lang['WORKS_MORE']; ?></a>
                </div>
            </div>
        </section>

        <!-- Skills -->
        <section class="section section-skills" id="skills">
            <div class="row">
                <div class="title-container">
                    <h2 class="title title-section title-skills"><?php echo $lang['SKILLS_TITLE']; ?></h2>
                </div>
                <h3 class="subtitle subtitle-skills"><?php echo $lang['SKILLS_SUBTITLE']; ?></h3>
                <ul class="list">
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_WEB']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_WEB_1']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_2']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_3']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_4']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_5']; ?></p>
                            <p><?php echo $lang['SKILLS_WEB_6']; ?></p>
                        </section>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_DESIGN']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_DESIGN_1']; ?></p>
                            <p><?php echo $lang['SKILLS_DESIGN_2']; ?></p>
                            <p><?php echo $lang['SKILLS_DESIGN_3']; ?></p>
                            <p><?php echo $lang['SKILLS_DESIGN_4']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_AUDIOVISUAL']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_AUDIOVISUAL_1']; ?></p>
                            <p><?php echo $lang['SKILLS_AUDIOVISUAL_2']; ?></p>
                            <p><?php echo $lang['SKILLS_AUDIOVISUAL_3']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_COM']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_COM_1']; ?></p>
                            <p><?php echo $lang['SKILLS_COM_2']; ?></p>
                            <p><?php echo $lang['SKILLS_COM_3']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_LANG']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_LANG_1']; ?></p>
                            <p><?php echo $lang['SKILLS_LANG_2']; ?></p>
                            <p><?php echo $lang['SKILLS_LANG_3']; ?></p>
                        </section>
                    </li>
                    <li class="list list-item list-skills">
                        <div class="list-skills-header">
                            <span class="ripple-mask"></span>
                        </div>
                        <h4><?php echo $lang['SKILLS_ENV']; ?></h4>
                        <section>
                            <p><?php echo $lang['SKILLS_ENV_1']; ?></p>
                            <p><?php echo $lang['SKILLS_ENV_2']; ?></p>
                            <p><?php echo $lang['SKILLS_ENV_3']; ?></p>
                        </section>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Get in touch -->
        <section class="section section-contact" id="contact">
            <div class="overlay-pattern"></div>
            <div class="row">
                <div class="title-container">
                    <h2 class="title title-section title-contact"><?php echo $lang['CONTACT_TITLE']; ?></h2>
                </div>
                <h3 class="subtitle subtitle-contact"><?php echo $lang['CONTACT_SUBTITLE']; ?></h3>
                <ul class="list list-getInTouch">
                    <li class="list list-item list-item-contact contact-phone">
                        <a href="tel:0676738510" title="<?php echo $lang['PHONE_TITLE']; ?>" target="_blank">
                            <div class="contact-overlay">
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <i class="fa fa-mobile fa-4x"></i>
                            <p>+33(0)6 76 73 85 10</p>
                        </a>
                    </li>
                    <li class="list list-item list-item-contact contact-skype">
                        <a href="tel:0676738510" title="<?php echo $lang['SKYPE_TITLE']; ?>" target="_blank">
                            <div class="contact-overlay">
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <i class="fa fa-skype fa-4x"></i>
                            <p>pierre.prezelin01</p>
                        </a>
                    </li>
                    <li class="list list-item list-item-contact contact-mail">
                        <a href="mailto:pierre.prezelin01@gmail.com" title="<?php echo $lang['MAIL_TITLE']; ?>" target="_blank">
                            <div class="contact-overlay">
                                <i class="fa fa-paper-plane fa-2x"></i>
                            </div>
                            <i class="fa fa-envelope fa-3x"></i>
                            <p>pierre.prezelin01[at]gmail.com</p>
                        </a>
                    </li>
                    <li class="list list-item list-item-contact contact-social">
                        <ul class="list">
                            <li class="list-item list-item-social social-behance">
                                <a href="https://www.behance.net/PierrePrezelin" title="<?php echo $lang['BEHANCE_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-behance fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-item list-item-social social-linkedin">
                                <a href="https://www.linkedin.com/pub/pierre-pr%C3%A9zelin/85/902/612" title="<?php echo $lang['LINKEDIN_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-linkedin fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-item list-item-social social-soundcloud">
                                <a href="https://soundcloud.com/centauri-vision" title="<?php echo $lang['SOUNDCLOUD_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-soundcloud fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-item list-item-social social-youtube">
                                <a href="https://www.youtube.com/channel/UCeKlBHuoEFoqZp35I2rLNPw" title="<?php echo $lang['YOUTUBE_TITLE']; ?>" target="_blank">
                                    <i class="fa fa-youtube fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Map -->
        <section class="section-map">
            <section>
                <div class="row">
                    <h2 class="title title-section title-map"><?php echo $lang['MAP_TITLE']; ?></h2>
                    <h3 class="subtitle subtitle-thanks"><?php echo $lang['MAP_SUBTITLE']; ?></h3>
                </div>
            </section>
            <div id="map"></div>
        </section>

<?php require_once('includes/footer.inc.php'); ?>