<section class="content-section container-fluid map">
    <div class="block">
        <p class="zag">ЗАПИШИТЕСЬ НА БЕСПЛАТНОЕ ПРОБНОЕ ЗАНЯТИЕ</p>
        <?php
                    $args = array( 'post_type' => 'contact-form2' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <div class="load"></div>
    </div>
      <div id="map2"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIJGsYJgeXItRZKLMMhjM-2AYE8ujmuOU&callback=initMap" type="text/javascript"></script>
    </div>
</section>