<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) : ?>
<div>
  <span><?php echo esc_html( $user->user_email ); ?></span>
  <span><?php echo esc_html( $user->display_name ); ?></span>
  <span><?php the_field('eye_color'); ?></span>
</div>
<?php endforeach; ?>

<?php get_footer(); ?>
