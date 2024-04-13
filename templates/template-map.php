<?php
/* Template Name: Template - Map*/
get_header();

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

    <!-- Header Hero -->
    <?php get_template_part( 'template-parts/map', get_post_type() ); ?>

    <script>
        document.body.classList.add('map');
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgX0dsbxomEVsnRXagWy8WCTGAtU3Ee_g"></script>
    <script src="<?php echo get_stylesheet_directory_uri(  ) . "/inc/assets/googlemaps.js" ?>"></script>

<?php
endif;
get_footer();
?>