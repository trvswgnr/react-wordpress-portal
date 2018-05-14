<?php
function posts_from_category($category_name) {
  // the query
  $the_query = new WP_Query( array( 'category_name' => $category_name, 'posts_per_page' => 10 ) );
  // The Loop
  if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
      $the_query->the_post();
        // if no featured image is found
        echo $category_name;
        echo '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
    }
  } else {
    echo '<span>nothing found</span>';
  }

  /* Restore original Post Data */
  wp_reset_postdata();
}
// Add a shortcode
add_shortcode('categoryposts', 'posts_from_category');

// Enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

?>
