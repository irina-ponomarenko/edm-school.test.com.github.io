<section class="content-section container-fluid section8">
    <div class="stickyDa">
        <div class="stop"></div>
    </div>
     <?php
        $args = array( 'post_type' => 'post-big-video' );
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
    <div class="row cont">
        <div id="playu" class="block">
            <blockquote><?php the_content(); ?></blockquote>

            <div class="but"></div>
        </div>
        <div id="pauseu"></div>
         <?php $frame = get_field('video_frame'); ?>
        <div class="youtube">
          <?php the_field ('video_frame'); ?> 
        </div>
    </div>
    <?php endwhile; ?>
</section>