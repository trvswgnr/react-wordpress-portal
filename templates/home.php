<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="section for-users">
<?php
$users = get_users('blog_id=1&orderby=nicename');

?>
  <?php
  $columns = 4;
  $row_count = 0;
  $column_width = 12 / $columns;
  ?>
  <div class="row">
   <?php foreach ($users as $user) :
      $user_id = $user->ID;
      $user_name = esc_html( $user->display_name );
      $user_photo = get_field('photo', 'user_'. $user_id );
    ?>
    <div class="user col-md-<?php echo $column_width; ?>">
      <div class="user__inner" style="<?php if ($user_photo) : ?>background-image: url(<?php echo $user_photo['url']; ?>); <?php endif; ?>">
      </div><!-- /.user -->
    </div><!-- /.user.col-md-4 -->
    <div class="user__details">
      <div class="details__inner container">
        <div class="user__close"></div>
        <h2 class="user__name"><?php echo $user_name; ?></h2>
        <div class="categories">
        <?php include(module('skills', 'performance')); ?>
        <?php include(module('skills', 'storytelling')); ?>
        <?php include(module('skills', 'experience')); ?>
        <?php include(module('skills', 'other')); ?>
        </div><!-- /.categories -->
      </div><!-- /.details__inner -->
    </div><!-- /.user__details -->
    <?php
    $row_count++;
    if($row_count % $columns == 0) :
    ?>
    </div>

    <div class="row<?php if ($row_count % 2 == 0) { echo " even"; } ?>">
    <?php endif; ?>
  <?php endforeach;//users as user ?>


    </div><!-- /.row -->

</div><!-- /.section.for-users -->
<?php get_footer(); ?>
