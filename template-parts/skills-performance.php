<?php
$performance_skills = get_field('performance_skills', 'user_'. $user_id);
if( $performance_skills ) :
?>
<ul class="category category--performance">
  <h3 class="category__name">Performance Skills</h3>
  <?php foreach( $performance_skills as $post): ?>
    <?php setup_postdata( $post ); ?>
    <li><?php the_title(); ?></li>
    <?php wp_reset_postdata(); ?>
  <?php endforeach;//$performance_skills as $post ?>
</ul>
<?php endif;//$other_skills ?>
