<?php
    /**
     * Enqueues stylesheet and scripts.
     */
    /* ------------ Appel du JS et Style sur la page Calendrier ------------ */
    add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );
    function custom_enqueue_scripts(){
        if( is_page( 'calendrier-avent-conseillere-deesse') ){
            // chargement du script
            wp_enqueue_script(
                'jsStenie', 
                get_template_directory_uri() . '/js/script.js', 
                array( 'jquery' ), 
                '1.0', 
                true
            );     
            // chargement des CSS
            wp_enqueue_style( 
                'styleStenie', 
                get_template_directory_uri() . '/css/style-calendrier-avent-stenie.css',
                array(), 
                '1.0'
            );
        }
        if( is_page( 'calendrier-avent-2020-conseillere-deesse') ){
            // chargement du script
            wp_enqueue_script(
                'monScript', 
                get_template_directory_uri() . '/js/script.js', 
                array( 'jquery' ), 
                '1.0', 
                true
            );     
            // chargement des CSS
            wp_enqueue_style( 
                'styleParent', 
                get_template_directory_uri() . '/css/tuilles.css',
                array(), 
                '1.0'
            );
        }
        if( is_page( 'porte-ouverte-noel' ) ){
            wp_enqueue_script(
                'jsPoNoel', 
                get_template_directory_uri() . '/js/po-noel.js', 
                array( 'jquery' ), 
                '1.0', 
                true
            );
            // Déclarer un autre fichier CSS
            wp_enqueue_style( 
                'stylePoNoel', 
                get_template_directory_uri() . '/css/po-noel.css',
                array(), 
                '1.0'
            );
        }
        if( is_page( 'po-noel' ) ){
            wp_enqueue_script(
                'jsPorteOuverteNoel', 
                get_template_directory_uri() . '/js/porte-ouverte-noel.js', 
                array( 'jquery' ), 
                '1.0', 
                true
            );
            // Déclarer un autre fichier CSS
            wp_enqueue_style( 
                'stylePorteOuverteNoel', 
                get_template_directory_uri() . '/css/porte-ouverte-noel.css',
                array(), 
                '1.0'
            );
        }
    }
?>