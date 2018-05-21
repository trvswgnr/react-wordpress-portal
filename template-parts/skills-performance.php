<?php
$performance_skills = get_field('performance_skills', 'user_'. $user_id);
if( $performance_skills ) :
?>
<div class="category-wrapper">
  <ul class="category category--performance">
    <h3 class="category__name">Performance</h3>
    <?php foreach( $performance_skills as $post): ?>
      <?php setup_postdata( $post ); ?>
      <li><?php the_title(); ?></li>
      <?php wp_reset_postdata(); ?>
    <?php endforeach;//$performance_skills as $post ?>
  </ul>
</div>
<?php endif;//$other_skills ?>
