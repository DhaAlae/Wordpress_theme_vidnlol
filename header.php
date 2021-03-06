<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <head>
    <link rel="icon" href="/favicon.ico">
  <title>
        <?php wp_title(); ?>
  </title>

    <?php wp_head(); ?>
    <?php wp_footer(); ?>
<!--</body>-->

<body class='index right-sidebar'>

  <div class='header-top-ad section' id='header-top-ad'>
      <div class='widget HTML' data-version='1' id='HTML100'>
          <div class='widget-content'>
              <div class='ct-wrapper'>
                  <a href=""><img src="http://localhost/vidnlol/wp-content/uploads/2017/02/index.jpg" /></a>
              </div>
          </div>
          <div class='clr'></div>
      </div>
  </div>
  <header class='header-wrapper'>
      <div class='ct-wrapper'>
          <div class='header-inner-wrap'>
              <div class='header section' id='header'>
                  <div class='widget Header' data-version='1' id='Header1'>
                      <div id='header-inner'>
                          <a href='<?php bloginfo('url'); ?>' style='display: block'>
                              <img alt='VIDNLOL' id='Header1_headerimg' src='<?php header_image(); ?>' style='display: block' />
                          </a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- /header-inner-wrap -->
          <div class="menu-list">
            <?php
              $defaults = array(
                'container' => false,
                'theme_location' =>  'primary-menu',
                'menu_class' => 'navnav'
              );
              wp_nav_menu( $defaults );
             ?>
            <!-- <ul class="navnav">
              <li><a href="#">Home</a></li>
              <li><a href="#">Hot</a></li>
              <li><a href="#">Thug Life</a></li>
            </ul> -->
          </div>
          <div class='clr'></div>
      </div>
  </header>
  <div class='clr'></div>
