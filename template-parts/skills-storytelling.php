<?php
$storytelling_skills = get_field('storytelling_skills', 'user_'. $user_id);
if( $storytelling_skills ) :
?>
<ul class="category category--storytelling">
  <h3 class="category__name">Storytelling Skills</h3>
  <?php foreach( $storytelling_skills as $post): ?>
    <?php setup_postdata( $post ); ?>
    <li><?php the_title(); ?></li>
    <?php wp_reset_postdata(); ?>
  <?php endforeach;//$storytelling_skills as $post ?>
</ul>
<?php endif;//$other_skills ?>
