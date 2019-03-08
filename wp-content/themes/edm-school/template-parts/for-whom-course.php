  <section class="content-section for-courses">
    <div class="container container-max">
      <header class="header-section">
        <h2>ДЛЯ КОГО ПОДХОДИТ ЭТОТ КУРС</h2>
      </header>
      <div class="content-section-container block-content-center">
        <div class="row">
             <?php
                    $args = array( 'post_type' => 'list-for-whom-course' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
          <div class="col-12 col-md-6 col-lg-4 block-about-course">
            <div class="contnent-about-course">
              <div class="number-block">
                <h2>
                    <?php the_title(); ?>
                </h2>
              </div>
              <div class="container-text-about-course">
               <?php the_content(); ?>
              </div>
            </div>
          </div>
           <?php endwhile; ?>
             <?php
                    $args = array( 'post_type' => 'questions' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
            <div class="col-12 col-md-6 col-lg-8 container-about-question">
                <form class="ask-questions">
                    <div class="info-question">
                        <h3>
                          <?php the_title(); ?>
                        </h3>
                       <?php the_content(); ?>
                        <button type="submit" class="submit-form-btn question-btn">Задать вопрос</button>
                    </div>
                </form>
            </div>
             <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>