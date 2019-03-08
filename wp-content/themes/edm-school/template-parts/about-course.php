 <section class="content-section container-fluid  napravlenie">
    <div class="container container-max">
      <header class="header-section">
        <h2>ЧТО ВХОДИТ В КУРСЫ</h2>
      </header>
        <div class="row all-curses">
             <?php
                    $args = array( 'post_type' => 'list-about-course' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
            <div class="col-12 col-md-4 col-xl-4 block-course">
                <div class="header-block">
                    <h4>
                        <?php the_title(); ?>
                    </h4>
                </div>
                <div class="content-block-course">
                    <?php the_content(); ?>
                </div>
            </div>
             <?php endwhile; ?>
        </div>
      </div>
  </section>