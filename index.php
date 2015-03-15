<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  <?php edit_post_link(); ?>
<?php endwhile; ?>
<?php else: ?>
  <?php # Nothing to display ?>
<?php endif; ?>
<?php get_footer(); ?>