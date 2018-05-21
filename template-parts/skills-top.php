<?php
$top_skills = get_field('top_skills', 'user_'. $user_id);
if( $top_skills ) :
?>
<ul class="category--top">
  <h3 class="category__name">Top Skills:</h3>
  <?php foreach( $top_skills as $post): ?>
    <?php setup_postdata( $post ); ?>
    <li><?php the_title(); ?></li>
    <?php wp_reset_postdata(); ?>
  <?php endforeach;//$top_skills as $post ?>
</ul>
<?php endif;//$other_skills ?>
