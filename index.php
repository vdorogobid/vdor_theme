
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
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
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
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


<?php get_footer(); ?>
