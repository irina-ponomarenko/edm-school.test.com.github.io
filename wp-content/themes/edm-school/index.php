<?php get_header( 'header' ); ?>

 <?php get_template_part( 'template-parts/about-course', 'single' );?>
 <?php get_template_part( 'template-parts/for-whom-course', 'single' );?>
</div>

 <?php get_template_part( 'template-parts/learn-with-us', 'single' );?>

 <?php get_template_part( 'template-parts/our-course', 'single' );?>

<section class="content-section container-fluid enroll-section">
    <div class="container container-max">
        <header class="header-section">
            <h2>ЗАПИСАТЬСЯ НА БЕСПЛАТНОЕ ЗАНЯТИЕ</h2>
        </header>
        <div class="row enroll-form">
            <?php
                    $args = array( 'post_type' => 'contact-form2' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <?php the_content(); ?>
                
            <p><?php the_excerpt(); ?></p>
            <?php endwhile; ?>
        </div>
    </div>
</section>

 <?php get_template_part( 'template-parts/all-teacher', 'single' );?>

 <?php get_template_part( 'template-parts/Otzivi', 'single' );?>

<section class="content-section container-fluid enroll-section">
    <div class="container container-max">
        <header class="header-section">
            <h2>ЗАПИСАТЬСЯ НА БЕСПЛАТНОЕ ЗАНЯТИЕ</h2>
        </header>
        <div class="row enroll-form">
            <?php
                    $args = array( 'post_type' => 'contact-form2' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <?php the_content(); ?>
                
            <p><?php the_excerpt(); ?></p>
            <?php endwhile; ?>
        </div>
    </div>
</section>

 <?php get_template_part( 'template-parts/logos', 'single' );?>


<?php get_template_part( 'template-parts/video', 'single' );?>

<?php get_template_part( 'template-parts/media-works', 'single' );?>

<?php get_template_part( 'template-parts/content-map', 'single' );?>

<?php get_footer( 'footer' ); ?>

<!-- end header -->

<!-- start section -->
<script>
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('Youtube', {
            events: {'onReady': onPlayerReady}

        });
    }

    function onPlayerReady(event) {

        document.getElementById("playu").addEventListener("click", function () {
            player.playVideo();
            $(".section8 .cont .youtube").animate({opacity: "1"}, 300);
            $("#playu").hide();
            $("#pauseu").show();
        });
        document.getElementById("pauseu").addEventListener("click", function () {
            player.pauseVideo();
            $(".section8 .cont .youtube").animate({opacity: "0"}, 300);
            $("#pauseu").hide();
            $("#playu").show();
        });


    }
</script>

 <?php wp_footer(); ?>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '3OIGoCEOFY';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>