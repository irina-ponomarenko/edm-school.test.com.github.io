<section class="container-fluid section6">
    <div class="row bg">
        <div class="container container-max">
            <header class="header-section">
                <h2>НАШИ ПРЕПОДАВАТЕЛИ</h2>
            </header>
            <div class="djlist">
                <div id="carousel" class="flexslider small-slider">
                   <ul class="slides">
                    <?php
                    $args = array( 'post_type' => 'small-teachers' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                       <li>
                           <div class="col-12 col-md">
                            <?php $pic = get_field('single_pic'); ?>
                              <img class="ava" src="<?php echo $pic['url'] ; ?>" alt="miniature-teacher"/>
                           </div>
                       </li>
                        <?php endwhile; ?>
                   </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-max">
        <div class="row block">
            <div class="col-12 col-md-10">
                <div class="slider-wrapper">
                    <div id="slider" class="flexslider flexslider-lg">
                        <ul class="slides">
                            <?php
                    $args = array( 'post_type' => 'large-teachers' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                  ?>
                            <li>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="img">
                                               <?php $pic = get_field('single_pic'); ?>
                                               <img  src="<?php echo $pic['url'] ; ?>" alt="lg-photo-teacher"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="text">
                                            <?php $field = get_field('sub_title'); ?>
                                                  <p class="title">
                                                  <?php the_field ('sub_title'); ?>
                                                  </p>
                                                <p class="name">
                                                  <?php the_title(); ?>
                                                </p>
                                                <?php the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                             <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>