<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensed.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/Robotocondensedbold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/fonts/PFBeauSansPro-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
</head>
<body>
    <header>
        <div class="header-block">
            <a aria-label="Logo" href="/">
                <div class="header-logo" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/logo.svg)"></div>
            </a>
        </div>
    </header>
    
    <div class="block-content-europe" style="background-image: url(<?php echo get_template_directory_uri()?>/img/euro-back.jpg)">
        <div class="block-content-matches">
            <div id="owl-slider" class="owl-carousel owl-theme">
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">11 июня, 22:00</span>
                        <span class="date-europe-match">Группа А</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/TUR.jpg" alt="TUR">
                                <span class="comand-europe-name">TUR</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/ITA.jpg" alt="ITA">  
                                <span class="comand-europe-name">ITA</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">12 июня, 16:00</span>
                        <span class="date-europe-match">Группа А</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/WAL.jpg" alt="WAL">
                                <span class="comand-europe-name">WAL</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/SUI.jpg" alt="SUI"> 
                                <span class="comand-europe-name">SUI</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">12 июня, 19:00</span>
                        <span class="date-europe-match">Группа B</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/DEN.jpg" alt="DEN">
                                <span class="comand-europe-name">DEN</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/FIN.jpg" alt="FIN">  
                                <span class="comand-europe-name">FIN</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">12 июня, 22:00</span>
                        <span class="date-europe-match">Группа B</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/BEL.jpg" alt="BEL">
                                <span class="comand-europe-name">BEL</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/RUS.jpg" alt="RUS">  
                                <span class="comand-europe-name">RUS</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">13 июня, 19:00</span>
                        <span class="date-europe-match">Группа C</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/AUT.jpg" alt="AUT">
                                <span class="comand-europe-name">AUT</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/MKD.jpg" alt="MKD">  
                                <span class="comand-europe-name">MKD</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">13 июня, 22:00</span>
                        <span class="date-europe-match">Группа C</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/NED.jpg" alt="NED">
                                <span class="comand-europe-name">NED</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/UKR.jpg" alt="UKR">  
                                <span class="comand-europe-name">UKR</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">13 июня, 16:00</span>
                        <span class="date-europe-match">Группа D</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/ENG.jpg" alt="ENG">
                                <span class="comand-europe-name">ENG</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/CRO.jpg" alt="CRO">  
                                <span class="comand-europe-name">CRO</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">14 июня, 16:00</span>
                        <span class="date-europe-match">Группа D</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/SCO.jpg" alt="SCO">
                                <span class="comand-europe-name">SCO</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/CZE.jpg" alt="CZE">  
                                <span class="comand-europe-name">CZE</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">14 июня, 19:00</span>
                        <span class="date-europe-match">Группа E</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/POL.jpg" alt="POL">
                                <span class="comand-europe-name">POL</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/SVK.jpg" alt="SVK">  
                                <span class="comand-europe-name">SVK</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">14 июня, 22:00</span>
                        <span class="date-europe-match">Группа E</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/ESP.jpg" alt="ESP">
                                <span class="comand-europe-name">ESP</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/SWE.jpg" alt="SWE">  
                                <span class="comand-europe-name">SWE</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">15 июня, 19:00</span>
                        <span class="date-europe-match">Группа F</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/HUN.jpg" alt="HUN">
                                <span class="comand-europe-name">HUN</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/POR.jpg" alt="POR">  
                                <span class="comand-europe-name">POR</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="europe-item">
                    <a href="#" class="europe-item-link">
                        <span class="date-europe-match">15 июня, 22:00</span>
                        <span class="date-europe-match">Группа F</span>
                        <div class="europe-match">
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/FRA.jpg" alt="FRA">
                                <span class="comand-europe-name">FRA</span>
                            </div>
                            <div class="europe-comand">
                                <img src="<?php echo get_template_directory_uri()?>/img/GER.jpg" alt="GER">  
                                <span class="comand-europe-name">GER</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
