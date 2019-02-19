<?php

  // REGISTRO DE ESTILOS

  function register_enqueue_style() {
  		$theme_data = wp_get_theme();

  		/* Registrando estilos */
  		wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/vendor/css/bootstrap.css'), null, '1.0.0', 'screen');
  		wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', null, '1.0.0', 'screen');
  		wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Merriweather:400,700|Open+Sans:400,700');
  	  //wp_register_style('magnificPopup', get_parent_theme_file_uri('/assets/vendor/css/magnific-popup.css'), null, '1.0.0', 'screen');
  	  wp_register_style('main', get_parent_theme_file_uri('/assets/css/styles.css'), null, '1.0.0', 'screen');
      wp_register_style('owl.carousel.min', get_parent_theme_file_uri('/assets/vendor/css/owl.carousel.min.css'), null, '1.0.0', 'screen');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('fontawesome');
  		wp_enqueue_style('googleFonts');
  		wp_enqueue_style('magnificPopup');
      wp_enqueue_style('owl.carousel.min');
  		wp_enqueue_style('main');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );

  // REGISTRO DE SCRIPTS

  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Registrando Scripts */
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/vendor/js/jquery.min.js'), null, '3.2.1', true);
		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script('bootstrap', get_parent_theme_file_uri('/assets/vendor/js/bootstrap.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('easingJquery', get_parent_theme_file_uri('/assets/vendor/js/jquery.easing.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('scrollReveal', get_parent_theme_file_uri('/assets/vendor/js/scrollreveal.min.js'), array('jQuery_migrate'), null, true);
		//wp_register_script('magnificPopup', get_parent_theme_file_uri('/assets/vendor/js/jquery.magnific-popup.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_parent_theme_file_uri('assets/js/scripts.js'), array('jQuery3'), null, true);
    wp_register_script('owl.carousel.min', get_parent_theme_file_uri('assets/vendor/js/owl.carousel.min.js'),null, null, true);


		/* Enqueue Scripts */
    wp_enqueue_script('jQuery3');
    wp_enqueue_script('jQuery_migrate');
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('easingJquery');
		wp_enqueue_script('scrollReveal');
		wp_enqueue_script('owl.carousel.min');
		wp_enqueue_script('mainJS');
	}

	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );

//logo personalizado
function config_custom_logo() {
  add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  ));
}

add_action( 'after_setup_theme', 'config_custom_logo' );

?>
