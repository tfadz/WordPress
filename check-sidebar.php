<?php $mysidebar = get_sidebar();  ?>

<?php if($mysidebar) : ?>
  <?php echo $mysidebar ?>

  <?php else : ?>
    <div>
      <a href="<?php echo get_permalink( $post->post_grandparent ); ?>" >
        <?php echo get_the_title( $post->post_grandparent ); ?>
      </a>
    </div>
    <div style="padding-left: 1rem;">
      <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
        <?php echo get_the_title( $post->post_parent ); ?></a>
      </div>
  <?php endif; ?>