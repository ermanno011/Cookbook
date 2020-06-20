<?php /* Template Name: Recipes template */ ?>
<?php get_header(); ?>

<page id="recipes">
  <div class="top-section">
    <div class="container">
      <h3><?php the_title(); ?></h3>
      <p class="subheading">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
    </div>
  </div>
  <div class="bottom-section">
    <div class="container">
      <div class="recipes-content">
        <?php $args=array(
             'post_type' => 'recipes',
             'post_status' => 'publish',
             'posts_per_page' => -1,
             'order'   => 'ASC',
            );
          $recipes_query = null;
          $recipes_query = new WP_Query($args);
          if( $recipes_query->have_posts() ) {
            while ($recipes_query->have_posts()) : $recipes_query->the_post(); ?>
              <div class="recipe-box">
                <a class="image-box" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <h4 class="recipe-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <h5 class="author-name">by <?php echo get_the_author_meta('display_name'); ?></h5>
              </div>
          <?php endwhile;
          }
          wp_reset_query(); ?>
      </div>
    </div>
  </div>
</page>

<?php get_footer(); ?>
