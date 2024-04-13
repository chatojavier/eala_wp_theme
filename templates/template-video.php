<?php
/* Template Name: Template - Video*/
get_header();

if(have_posts()) : the_post();
  global $post;
  $home_id = $post->ID;
?>

    <!-- Header Hero -->
    <section id="home-banner-box" class="home-banner loading">
      <div class="image video-slide" style="background-image: url('https://i.ytimg.com/vi/XRenfGO7HAQ/hq720.jpg?sqp=-oaymwEXCNAFEJQDSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBfXkP76LK6XmTlhPg5JztfaK4APw')">
        <div class="video-background">
          <div class="video-foreground" id="YouTubeBackgroundVideoPlayer">
            </div>
        </div>
      </div>
    </section>

    <script async src="https://www.youtube.com/iframe_api"></script>
    <!-- <script src="http://eala.local/wp-content/themes/eala/assets/src/js/YTvideo.js?ver=1.0.0" id="YTvideo-js"></script> -->

<?php
endif;
get_footer();
?>