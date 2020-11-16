<?php
/*
Template Name: Porte Ouverte Noël
*/
?>
<!DOCTYPE html>
<html>
    <head <?php language_attributes(); ?>>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php the_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrap">
        <header>
            <h1>Portes ouvertes de noël</h1>
            <h2>par votre Conseillère Cosmétique Déesse</h2>
        </header>
        <div class="main page">
            <section class="section-sets-cadeau-pour-elle">
                <div id="cat-sets-cadeau-pour-elle"></div>
            </section>
            <section class="section-sets-cadeau-pour-lui">
                <div id="cat-sets-cadeau-pour-lui"></div>
            </section>
            <section class="section-sets-cadeau-pour-jeunes">
                <div id="cat-sets-cadeau-pour-jeunes"></div>
            </section>
            </section>
            <section class="section-sets-cadeau-maquillage">
                <div id="cat-sets-cadeau-maquillage"></div>
            </section>

            <!-- The Modal -->
            <div id="myModal1" class="modal">
                <div class="modal-content">
                    <span class="close1">&times;</span>
                    <div id="contenu">
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
            </div>
            <div id="myModal2" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close2">&times;</span>
                    <div id="contenu">
                        <div class="cadeau-douceur-masculin"></div>
                        <div class="cadeau-fraicheur-masculine-1"></div>
                        <div class="cadeau-fraicheur-masculine-2"></div>
                        <div class="cadeau-cocooning-lui"></div>
                        <div class="cadeau-peau-douce-lui"></div>
                        <div class="cadeau-sos-masque-lui"></div>
                    </div>    
                </div>
            </div>
            <div id="myModal3" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close3">&times;</span>
                    <div id="contenu">
                        <div class="cadeau-sos-masque-jeunes"></div>
                        <div class="cadeau-belle-peau-1"></div>
                        <div class="cadeau-belle-peau-2"></div>
                    </div>    
                </div>
            </div>
            <div id="myModal4" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close4">&times;</span>
                    <div id="contenu">
                        <div class="cadeau-fetes-en-couleur"></div>
                        <div class="cadeau-juste-un-regard"></div>
                        <div class="cadeau-pour-briller"></div>
                    </div>    
                </div>
            </div>
        </div>
<?php get_footer(); ?>