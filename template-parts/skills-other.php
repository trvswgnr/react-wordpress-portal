<?php
$other_skills = get_field('skills', 'user_'. $user_id);
if( $other_skills ) :
?>
<ul class="category category--other">
  <h3 class="category__name">Other Skills</h3>
  <?php foreach( $other_skills as $post): ?>
      <?php setup_postdata( $post ); ?>
      <li><?php the_title(); ?></li>
      <?php wp_reset_postdata(); ?>
  <?php endforeach;//$skills as $post ?>
</ul>
<?php endif;//$other_skills ?>
