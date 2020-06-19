<?php get_header(); ?>

  <div class="homepage-intro">
    <div class="container">
      <h1>Daily healthy meal plans to reach your optimum health & fitness</h1>
      <h3>We can deliver unusual ideas!</h3>
    </div>
  </div>

  <section id="recipes">
    <div class="container">
      <h1 class="section-title">Lates Recipes</h1>
      <div class="recipes-content">
        <?php $args=array(
             'post_type' => 'recipes',
             'post_status' => 'publish',
             'posts_per_page' => 7,
             'order'   => 'ASC',
            );
          $recipes_query = null;
          $recipes_query = new WP_Query($args);
          if( $recipes_query->have_posts() ) {
            $i = 0;
            while ($recipes_query->have_posts()) : $recipes_query->the_post(); ?>
            <?php
            if($i == 1) { ?>
              <div class="recipe-big-box">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <h4 class="recipe-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <h5 class="author-name"><?php echo get_the_author_meta('display_name'); ?></h5>
              </div>
            <?php } else { ?>
              <div class="recipe-small-box">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <h4 class="recipe-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <h5 class="author-name"><?php echo get_the_author_meta('display_name'); ?></h5>
              </div>
            <?php } ?>
            <?php $i++;
            endwhile;
          }
          wp_reset_query();
          ?>
        </div>
    </div>
  </section>

  <section id="lipsum">
    <div class="lipsum-content">
      <img class="lipsum-image" src="/cookbook/wp-content/uploads/2020/06/Middle-section-images.png" alt="Lipsum section left part images">
      <div class="lipsum-half">
        <h1 class="section-title">Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no seaundefined.</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no seaundefined.</p>
      </div>
    </div>
  </section>

  <section id="blog">
    <div class="container">
      <h1 class="section-title">Blog</h1>
      <div class="blog-content">
        <?php $args=array(
             'post_type' => 'post',
             'post_status' => 'publish',
             'posts_per_page' => 3,
             'order'   => 'ASC',
            );
          $recipes_query = null;
          $recipes_query = new WP_Query($args);
          if( $recipes_query->have_posts() ) {
            $i = 0;
            while ($recipes_query->have_posts()) : $recipes_query->the_post(); ?>
              <div class="blog-box">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
                <h4 class="recipe-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <h5 class="author-name"><?php echo get_the_author_meta('display_name'); ?></h5>
              </div>
            <?php
            endwhile;
          }
          wp_reset_query();
          ?>
        </div>
    </div>
  </section>

<?php get_footer(); ?>
