<?php
/*
Template Name: PO Noël
*/
?>
<!-- <!DOCTYPE html>
<html>
    <head <?php /*language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); */?>
    </head>
    <body>
        <div class="wrap">
            <header>
                <h1>Portes ouvertes de noël</h1>
                <h2>par votre Conseillère Cosmétique Déesse</h2>
            </header>
-->
<?php get_header(); ?>
            <div class="main page">
                <h1>Portes ouvertes de noël</h1>
                <h2>par votre Conseillère Cosmétique Déesse</h2>
                <section class="section-sets-cadeau-pour-elle">
                    <div class="cat-sets-cadeau-pour-elle"></div>
                    <div class="sets-cadeau-pour-elle">
                        <div class="cadeau-pour-elle">
                            <div class="cadeau-mains"></div>
                            <div class="cadeau-briller"></div>
                            <div class="cadeau-pieds"></div>
                            <div class="cadeau-senteur"></div>
                            <div class="cadeau-peau-douce-1"></div>
                            <div class="cadeau-peau-douce-2"></div>
                            <div class="cadeau-gout-abricot"></div>
                            <div class="cadeau-doux-decollete"></div>
                            <div class="cadeau-cocooning"></div>
                            <div class="cadeau-sos-masque"></div>
                            <div class="cadeau-luxe-exclu-1"></div>
                            <div class="cadeau-luxe-exclu-2"></div>
                            <div class="cadeau-jewel"></div>
                            <div class="cadeau-apple"></div>
                            <div class="cadeau-caviar"></div>
                            <div class="cadeau-caviar-yeux"></div>
                            <div class="cadeau-caviar-intensive"></div>
                            <div class="cadeau-caviar-masque"></div>
                        </div>
                    </div>
                </section>
                <section class="section-sets-cadeau-pour-lui">
                    <div class="cat-sets-cadeau-pour-lui"></div>
                    <div class="sets-cadeau-pour-lui">
                        <div class="cadeau-pour-lui">
                            <div class="cadeau-douceur-masculin"></div>
                            <div class="cadeau-fraicheur-masculine-1"></div>
                            <div class="cadeau-fraicheur-masculine-2"></div>
                            <div class="cadeau-cocooning-lui"></div>
                            <div class="cadeau-peau-douce-lui"></div>
                            <div class="cadeau-sos-masque-lui"></div>
                        </div>
                    </div>
                </section>
                <section class="section-sets-cadeau-pour-jeunes">
                    <div class="cat-sets-cadeau-pour-jeunes"></div>
                    <div class="sets-cadeau-pour-jeunes">
                        <div class="cadeau-pour-jeunes">
                            <div class="cadeau-sos-masque-jeunes"></div>
                            <div class="cadeau-belle-peau-1"></div>
                            <div class="cadeau-belle-peau-2"></div>
                        </div>
                    </div>
                </section>
                </section>
                <section class="section-sets-cadeau-maquillage">
                    <div class="cat-sets-cadeau-maquillage"></div>
                    <div class="sets-cadeau-maquillage">
                        <div class="cadeau-maquillage">
                            <div class="cadeau-fetes-en-couleur"></div>
                            <div class="cadeau-juste-un-regard"></div>
                            <div class="cadeau-pour-briller"></div>
                        </div>
                    </div>
                </section>
                <section class="section-sets-bon-cadeau">
                    <div class="cat-sets-bon-cadeau"></div>
                </section>
                <div class="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="150" viewBox="0 0 257 94">
                        <defs>
                            <filter id="rect-contact" x="0" y="0" width="257" height="94" filterUnits="userSpaceOnUse">
                            <feOffset dy="10" input="SourceAlpha"/>
                            <feGaussianBlur stdDeviation="4" result="blur"/>
                            <feFlood flood-opacity="0.627"/>
                            <feComposite operator="in" in2="blur"/>
                            <feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <g id="contact" transform="translate(-789 -495)">
                            <g transform="matrix(1, 0, 0, 1, 789, 495)" filter="url(#rect-contact)">
                            <path id="rect-contact-2" data-name="rect-contact" d="M40,0H233a0,0,0,0,1,0,0V30a40,40,0,0,1-40,40H0a0,0,0,0,1,0,0V40A40,40,0,0,1,40,0Z" transform="translate(12 2)"/>
                            </g>
                            <text id="contact-conseillere" transform="translate(822 511)" fill="#FFFFFF" font-size="16" font-family="HelveticaNeue, Helvetica Neue"><tspan x="1.644" y="15">Contacter votre conseillère </tspan><tspan x="42.38" y="35">pour en profiter</tspan></text>
                        </g>
                    </svg>
                </div>                
            </div>
<?php get_footer(); ?>