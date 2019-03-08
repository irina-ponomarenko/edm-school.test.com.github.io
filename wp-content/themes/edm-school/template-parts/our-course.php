<section class="content-section container-fluid our-course">
    <div class="container container-max">
        <header class="header-section">
            <h2>НАШИ КУРСЫ</h2>
        </header>
        <div class="row">
            <div class="news-holder cf">

                <ul class="news-headlines">
                    <?php
                    $args = array( 'post_type' => 'Oour-course' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <li class="selected">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-4 icon-slider"></div>
                            <div class="col-12 col-md-7 col-lg-8">
                                <h3>
                                    <?the_title(); ?>
                                </h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </li>
                      <?php endwhile; ?>
                    <!-- li.highlight gets inserted here -->
                </ul>
                <div class="news-preview">
                     <?php
                    $args = array( 'post_type' => 'block-our-course' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <div class="news-content top-content">
                         <?php $pic = get_field('single_pic'); ?>
                        <img src="<?php echo $pic['url'] ; ?>" alt="img-dj"/>
                        <h3><a href="#">
                            <?php the_title(); ?>
                        </a></h3>
                        <?php the_content(); ?>
                    </div>
                     <?php endwhile; ?>
                    <!-- .news-content -->
                </div><!-- .news-preview -->

            </div>
        </div>
    </div>
</section>