<footer class="bg-white container-fluid border mt-5 py-4">
  <div class="spacer-10"></div>
  <div id="footer-footer" class="text-secondary">
    <div class="d-flex justify-content-evenly">
      <div class="">
        <p>© 2023 <?php bloginfo('name'); ?> </p>
      </div>
      <div class="">
        <p><?= bloginfo("description") ?></p>
      </div>
      <div class="">
        <a href="info@mysite.com"><?= bloginfo('admin_email') ?></a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>