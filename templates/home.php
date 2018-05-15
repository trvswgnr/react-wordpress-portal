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
    <div class="user" style="<?php if ($user_photo) : ?>background-image: url(<?php echo $user_photo['url']; ?>); <?php endif; ?>">
      <div class="user__preview">

      </div>
      <div class="user__details">
        <div class="user__close"></div>
        <h2 class="user__name"><?php echo $user_name; ?></h2>
        <div class="categories-wrapper">
        <?php $categories = get_categories(); ?>
        <?php foreach ( $categories as $category ) : ?>
        <?php $category_name = $category->name; ?>
        <?php $category_id = get_cat_ID($category_name); ?>
        <ul class="category category--<?php echo strtolower($category_name); ?>">
          <?php $parent = get_cat_name($category->parent); ?>
          <?php if( $skills ) : ?>
            <h3 class="category__name"><?php if ($category_name == 'Uncategorized') { echo 'Other'; } else { echo $category_name; } ?></h3>
            <?php foreach( $skills as $post): ?>
              <?php if (has_category($category_name, $post->ID)) : ?>
                <?php setup_postdata( $post ); ?>
                <li><?php the_title(); ?></li>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
              <?php endif;//has_category ?>
            <?php endforeach;//$skills as $post ?>
          <?php endif;//$skills ?>
        </ul><!-- /.category -->
        <?php endforeach;//$categories as $category ?>
        </div><!-- /.categories-wrapper -->
      </div><!-- /.user__details -->
    </div><!-- /.user -->
<?php
endforeach; //foreach $user
?>
</div><!-- /.section.for-users -->
<?php get_footer(); ?>
