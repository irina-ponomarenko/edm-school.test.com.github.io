<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon Icon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-ico"/>
    <title>Курсы диджеев в Санкт-Петербурге от EDM School</title>

    <script type="text/javascript" src="//vk.com/js/api/openapi.js" async=""></script>
    <script type="text/javascript" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vfluxKqfs/www-widgetapi.js"></script>


      <?php wp_head(); ?>
</head>
<body>
<script>

function initMap() {
        var coordinates = {lat: 59.946668, lng: 30.286871},

            popupContent = '<p class="content">Что угодно</p>',

            map = new google.maps.Map(document.getElementById('map2'), {
                center: coordinates,
                zoom: 16,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#15143d"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#bdbdbd"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#291b34"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#382447"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#0d0c36"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9c9cad"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#0d0c36"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#0d0c36"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#0d0c36"
                            }
                        ]
                    },

                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e5e5e5"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#eeeeee"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#2e2e52"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    }
                ]
            }),


            marker = new google.maps.Marker({
                position: coordinates,
                map: map
            }),

            infowindow = new google.maps.InfoWindow({
                content: popupContent
            });


    }


</script>

<!-- for mobile devices -->

<!-- start header -->

<div class="wrapper-all-content main" id="aside1">
  <section class="header-block-wrapper">
    <div class="container-fluid section1">
        <video id="video" class="video" autoplay="" loop="" muted="">
            <source src="<?php echo get_template_directory_uri(); ?>/video/video-new.mp4" type="video/mp4">
        </video>
      <div class="container container-max">
        <div class="header-content">
           <div class="row">
             <?php
                    $args = array( 'post_type' => 'images-logo' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
            <div class="col-xs-12 col-md-4">
              <div class="wrapper-header-content-box">
                <?php $pic = get_field('single_pic'); ?>
                <a href="<?php echo get_home_url(); ?>">
                <img src="<?php echo $pic['url'] ; ?>" alt="logo"/>
                </a>
              </div>
            </div>
             <?php endwhile; ?>
              <?php
                    $args = array( 'post_type' => 'contatc-header' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
           <div class="col-12 col-md-4 adres">
               <div class="wrapper-header-content-box contact-block">
                  <?php the_content(); ?>
                  <?php $field = get_field('adress_field'); ?>
                <span>
                   <?php the_field ('adress_field'); ?> 
                </span>
              </div>
            </div>
             <?php endwhile; ?>
          </div>
        </div>
          <div class="col-12 content">
              <?php
                    $args = array( 'post_type' => 'contatc-section-1' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
              <div class="title-header-block">
                  <?php the_content(); ?>
                  <h1><?php the_title(); ?></h1>
              </div>
              <?php endwhile; ?>
               <?php
                    $args = array( 'post_type' => 'contact-form1' );
                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <?php the_content(); ?>
                <div class="text-header-block">
                    <?php $field = get_field('sub_title'); ?>
                <p><?php the_field ('sub_title'); ?> </p>
                </div>
                <?php endwhile; ?>
          </div>
      </div>
    </div>
  </section>