      <footer>
        <div class="container">
          <div class="footer-content">
            <a href="<?php echo home_url(); ?>">
              <img src="/cookbook/wp-content/uploads/2020/06/orange.png" alt="Cookbook logo">
              <h4 class="site-title">Cookbook</h4>
            </a>
            <nav>
              <?php wp_nav_menu(); ?>
            </nav>
          </div>
          <div class="copyright">
            <p>©2020 COOKBOOK</p>
          </div>
        </div>
      </footer>
    <?php wp_footer(); ?>
  </body>
</html>
