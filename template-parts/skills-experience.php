<?php
$experience_skills = get_field('experience_skills', 'user_'. $user_id);
if( $experience_skills ) :
?>
<div class="category-wrapper">
  <ul class="category category--experience">
    <h3 class="category__name">Experience</h3>
    <?php foreach( $experience_skills as $post): ?>
      <?php setup_postdata( $post ); ?>
      <li><?php the_title(); ?></li>
      <?php wp_reset_postdata(); ?>
    <?php endforeach;//$experience_skills as $post ?>
  </ul><!-- /.category -->
</div><!-- /.category-wrapper -->
<?php endif;//$other_skills ?>
