<?php 

// // Register Custom Navigation Walker
// require_once('wp_bootstrap_navwalker.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary' ),
      
    )
  );
}


function talentful_theme_styles() {

	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );

	wp_enqueue_style( 'jquery.fancybox_css', get_template_directory_uri() . '/css/jquery.fancybox.css' );

	wp_enqueue_style( 'owl.carousel_css', get_template_directory_uri() . '/css/owl.carousel.css' );

	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/css/animate.min.css' );

}

add_action ('wp_enqueue_scripts' , 'talentful_theme_styles');

function talentful_theme_js() {

	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'jquery.migrate_js', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'jquery.superslides_js', get_template_directory_uri() . '/js/jquery.superslides.js', array('jquery'), '', true );

	wp_enqueue_script( 'nav_js', get_template_directory_uri() . '/js/nav.js', array('jquery'), '', true );

	wp_enqueue_script( 'tinydropdown_js', get_template_directory_uri() . '/js/tinydropdown.js', array('jquery'), '', true );

	






	wp_enqueue_script( 'jquery.imageScroll_js', get_template_directory_uri() . '/js/jquery.imageScroll.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'countto_js', get_template_directory_uri() . '/js/countto.js', array('jquery'), '', true );

	wp_enqueue_script( 'jquery.mixitup_js', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'jquery.fancybox_js', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '', true );

	wp_enqueue_script( 'owl.carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

	wp_enqueue_script( 'html5shiv_js', get_template_directory_uri() . '/js/html5shiv.js', array('jquery'), '', true );

	wp_enqueue_script( 'backtotop_js', get_template_directory_uri() . '/js/back-to-top.js', array('jquery'), '', true );


}

add_action ('wp_enqueue_scripts' , 'talentful_theme_js');

add_action( 'after_setup_theme', 'bootstrap_setup' );
 


function add_this_script_footer(){ ?>

<script src="js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript" src="js/nav.js"></script> 
<script type="text/javascript" src="js/tinydropdown.js"></script> 
<script type="text/javascript">

    var dropdown=new TINY.dropdown.init("dropdown", {id:'menu', active:'menuhover'});

    </script>

<?php } 

add_action('wp_footer', 'add_this_script_footer');



 ?>