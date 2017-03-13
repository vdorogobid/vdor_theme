
<?php get_header(); ?>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
          <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <a href="<?php the_author_link(); ?>">
                            <?php the_author(); ?></a></p>
            <?php if ( has_post_thumbnail()) :?>
              <div class="post-thumb">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > </a>
                    <?php the_post_thumbnail(); ?>
              </div>
        <?php endif; ?>
            <?php the_excerpt(); ?>
          </div><!-- /.blog-post -->

          <?php endwhile ?>
        <?php else : ?>
                      <p> <?php __('No posts'); ?></p>
                      <?php endif; ?>



        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <?php if (is_active_sidebar('sidebar')):?>
              <?php dynamic_sidebar('sidebar');?>
            <?php endif;?>
          </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


<?php get_footer(); ?>
