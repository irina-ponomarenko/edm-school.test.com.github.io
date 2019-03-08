<!-- <section class="content-section container-fluid otzivi">
    <div class="container container-max">
        <header class="header-section">
            <h2>ОТЗЫВЫ НАШИХ УЧЕНИКОВ</h2>
        </header>
    </div>
    <div class="row">
        <div class="col-12">
            <div id="owl-example" class="owl-carousel">
                 <?php
                    $args = array( 'post_type' => 'post-otzivi' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                <div class="col-12 container-item-otzive item">
                    <div class="img">
                         <?php $pic = get_field('single_pic'); ?>
                        <img src="<?php echo $pic['url'] ; ?>" alt="avatar">
                    </div>
                    <div class="wrapper-text-otziv">
                        <p class="name">
                            <strong><?php the_title(); ?></strong>
                            , <?php $field = get_field('sub_title'); ?>
                                <?php the_field ('sub_title'); ?>                 
                        </p>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="col-12 video-otzivi">
            <div class="fonbg fon_left"></div>
            <div class="fonbg fon_right"></div>
            <div id="owl-example1" class="owl-carousel">
                 <?php
                    $args = array( 'post_type' => 'post-iframe' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                <div class="col-12 container-video-otzive item">
                   <div class="row">
                       <div class="col-12">
                           <div class="video-block">
                              <?php the_content(); ?>
                           </div>
                       </div>
                   </div>
                </div>
                 <?php endwhile; ?>
            </div>
        </div>
    </div>
</section> -->