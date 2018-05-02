<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<?php
$blogusers = get_users( 'blog_id=1&orderby=nicename' );
// Array of WP_User objects.
foreach ( $blogusers as $user ) :
  $user_id = $user->ID;
  $user_name = esc_html( $user->display_name );
  $skills = get_field('skills', 'user_'. $user_id );
?>

<div class="user">
<span class="user__name"><?php echo $user_name; ?></span>
<?php $categories = get_categories(); ?>
<?php foreach ( $categories as $category ) : ?>
  <?php $category_name = $category->name; ?>
  <?php if( $skills ) : ?>
    <h3><?php echo $category_name; ?></h3>
    <?php foreach( $skills as $post): ?>
      <?php if (has_category($category_name, $post->ID)) : ?>
        <?php setup_postdata( $post ); ?>
        <span><?php the_title(); ?></span>
        <?php wp_reset_postdata(); ?>
      <?php endif;//has_category ?>
    <?php endforeach;//$skills as $post ?>
  <?php endif;//$skills ?>
<?php endforeach;//$categories as $category ?>
</div>

<?php endforeach; //foreach $user ?>

<?php get_footer(); ?>
