<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php

?>

<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) :
$user_id = $user->ID;
$eye_color = get_field('eye_color', 'user_'. $user_id );

$skills = get_field('skills', 'user_'. $user_id );
?>

<div class="user">
  <span class="user__name"><?php echo esc_html( $user->display_name ); ?></span>
  <?php if( $skills ):
  foreach( $skills as $post):
    setup_postdata( $post );
  ?>
  <span><?php the_title(); ?></span>
  <?php wp_reset_postdata(); ?>
<?php endforeach; ?>
<?php endif; ?>
</div>



<?php endforeach; ?>



<?php get_footer(); ?>
