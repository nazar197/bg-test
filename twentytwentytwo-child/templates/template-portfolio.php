<?php 
/**
 * Template Name: Portfolio
 * Template Post Type: post, page
 */
get_header(); 

while( have_posts() ) :
  the_post();
?>

<div class="my-5">
  <div class="container">
    <form id="portfolio-form">
      <div class="mb-3">
        <label for="email" class="form-label"><?php esc_html_e('Email'); ?></label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" pattern="^[\w.-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label"><?php esc_html_e('Comment'); ?></label>
        <textarea class="form-control" id="comment" rows="3"></textarea>
      </div>
      <input id="post_id" type="hidden" value="<?php the_ID(); ?>" required>
      <button class="btn btn-primary" type="submit"><?php esc_html_e('Submit'); ?></button>
    </form>
  </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>