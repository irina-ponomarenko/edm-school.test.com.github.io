<section class="content-section container-fluid section9">
    <div class="container container-max">
        <div class="row">
            <div id="owl-example2" class="owl-carousel">
               <?php
                    $args = array( 'post_type' => 'post-img-galery' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                    <div class="block bl">
                      <a href="ENTER URL ADDRESS HERE">
                       <?php $pic = get_field('single_pic'); ?>
                       <?php $pic2 = get_field('hover_img'); ?> 
                       <img
                        src="<?php echo $pic['url']; ?>"
                        onmouseover="this.src='<?php echo $pic2['url']; ?>'"
                        onmouseout="this.src='<?php echo $pic['url']; ?>'"
                         />
                       </a>
                    </div>
                    <?php endwhile; ?>
             </div>
        </div>
    </div>
</section>