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
