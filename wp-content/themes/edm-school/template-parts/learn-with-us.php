<section class="content-section container-fluid pochemu">
    <div class="container container-max">
        <header class="header-section">
            <h2>ПОЧЕМУ У НАС КРУТО УЧИТЬСЯ</h2>
        </header>
        <div class="row">
            <?php
                    $args = array( 'post_type' => 'learn' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
            <div class="col-12 col-md-6">
                <div class="block">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-4 img">
                             <?php $pic = get_field('single_pic'); ?>
                            <img src="<?php echo $pic['url'] ; ?>" alt="poch"/>
                        </div>
                        <div class="col-12 col-md-7 col-lg-8 info-pochemu">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
              <?php endwhile; ?>
        </div>
    </div>
</section>