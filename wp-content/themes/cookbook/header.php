<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width" />
    <?php // pozivamo bootstrap.css ?>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <?php // pozivamo nunito google font ?>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="<?php if ( is_user_logged_in() ) { echo 'logged-in';} ?>">
      <div class="container">
        <div class="header-content">
          <a href="<?php echo home_url(); ?>">
            <img src="/cookbook/wp-content/uploads/2020/06/orange.png" alt="Cookbook logo">
            <h4 class="site-title">Cookbook</h4>
          </a>
          <nav>
            <?php wp_nav_menu(); ?>
          </nav>
        </div>
      </div>
    </header>
