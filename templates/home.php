<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="section for-users">
<?php
$users = get_users('blog_id=1&orderby=nicename');
foreach ($users as $user) :
  $user_id = $user->ID;
  $user_name = esc_html( $user->display_name );
  $skills = get_field('skills', 'user_'. $user_id );
  $user_photo = get_field('photo', 'user_'. $user_id );
?>
    <div class="user" style="background-image: url(<?php echo $user_photo['url']; ?>)">
      <div class="user__details">
      <div class="user__close"></div>
      <span class="user__name"><?php echo $user_name; ?></span>
      <?php $categories = get_categories(); ?>
      <?php foreach ( $categories as $category ) : ?>
      <?php $category_name = $category->name; ?>
      <?php $category_id = get_cat_ID($category_name); ?>
      <div class="category">
        <?php $parent = get_cat_name($category->parent); ?>
        <div class="parent"><?php echo $category_id; ?><?php echo $parent; ?></div>
        <?php if( $skills ) : ?>
          <h3 class="category__name"><?php echo $category_name; ?></h3>
          <?php foreach( $skills as $post): ?>
            <?php if (has_category($category_name, $post->ID)) : ?>
              <?php setup_postdata( $post ); ?>
              <span><?php the_title(); ?></span>
              <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <div class="nothing"></div>
            <?php endif;//has_category ?>
          <?php endforeach;//$skills as $post ?>
        <?php endif;//$skills ?>
      </div><!-- /.category -->
      <?php endforeach;//$categories as $category ?>
      </div><!-- /.user__details -->
    </div><!-- /.user -->
<?php
endforeach; //foreach $user
?>
</div><!-- /.section.for-users -->
<?php get_footer(); ?>
