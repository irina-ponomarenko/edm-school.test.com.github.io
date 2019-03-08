<footer class="container-fluid footer">
    <div class="container container-max">
        <div class="row">
            <div class="col-12 col-md logo">
                <img src="<?php echo get_stylesheet_directory_uri()?>/images/logo-2.png">
            </div>
            <div class="col-12 col-md polit">
                <p><a href="/requisites/">Политика конфиденциальности</a></p>
            </div>

            <div class="col-12 col-md soc" align="right">
                 <?php
                    $args = array( 'post_type' => 'social-list' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="container-social-icon">
                    <?php the_content(); ?>
                      <?php $pic = get_field('single_pic'); ?>
                    <img src="<?php echo $pic['url'] ; ?>" alt="img-icon"></a>
                </div>
                     <?php endwhile; ?>
            </div>

        </div>
    </div>
</footer>