<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="section for-users">
<?php
$users = get_users('blog_id=1&role=Subscriber&orderby=nicename');

?>
  <?php
  $columns = 4;
  $row_count = 0;
  $column_width = 12 / $columns;
  ?>
  <div class="row">
  <?php
  foreach ($users as $user) :
    $user_id    = $user->ID;
    $user_photo = get_field('photo', 'user_'. $user_id );
    $first_name = get_field('first_name', 'user_'. $user_id );
    $last_name  = get_field('last_name', 'user_'. $user_id );
    $user_name = $first_name . ' ' . $last_name;
  ?>
    <div class="user col-xs-<?php echo $column_width; ?>">
      <div class="user__inner" style="<?php if ($user_photo) : ?>background-image: url(<?php echo $user_photo['url']; ?>);<?php else: ?>background-image: url(https://d3iw72m71ie81c.cloudfront.net/male-1<?php echo $user_id; ?>.jpg);<?php endif; ?>">

      <div class="user__preview user-preview">
        <div class="user-preview__inner">
          <h5 class="user-preview__name">
            <?php echo $first_name; ?>'s
          </h5>
          <?php include(module('skills', 'top')); ?>
        </div>
      </div>

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
