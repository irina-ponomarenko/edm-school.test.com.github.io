<section class="content-section container-fluid utp work">
    <div class="container container-max">
        <header class="header-section">
            <h2>РАБОТЫ НАШИХ УЧЕНИКОВ</h2>
        </header>
        <div class="row">
            <div class="col-12">
                <div id="owl-example3" class="owl-carousel owl-theme">
                    <?php
                    $args = array( 'post_type' => 'media_block' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                    <div class="item-carosel-music">
                        <div class="row">
                            <div class="col-sm-12">
                               <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                  <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</section>
