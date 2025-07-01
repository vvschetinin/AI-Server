</main>

<footer class="footer">
  <div class="container footer-top">
    <div class="row">
      <div class="col-100 col-md-50 content-left">
        <?php if ($_SERVER["REQUEST_URI"] == '/') : ?>
        <span class="footer-logo svg" role="img" aria-label="Главная страница сайта Владлена Щетинина">
          <?php if (file_exists($root . "/interface/include/logo-footer.php")) : ?>
          <?php require $root . '/interface/include/logo-footer.php'; ?>
          <?php endif; ?>
        </span>
        <?php else : ?>
        <a class="footer-logo svg" href="/" aria-label="На главную страницу сайта Владлена Щетинина">
          <?php if (file_exists($root . "/interface/include/logo-footer.php")) : ?>
          <?php require $root . '/interface/include/logo-footer.php'; ?>
          <?php endif; ?>
        </a>
        <?php endif; ?>
        <ul class="footer-address">
          <li>Московская область</li>
          <li>г. Ивантеевка</li>
          <li class="visible hidden-md">
            <a href="tel:+79260522029">+7 (926) 052-20-29</a>
          </li>
          <li class="visible hidden-md">
            <a href="mailto:info@vschetinin.ru">info@vschetinin.ru</a>
          </li>
          <li class="mb-25 mb-3--sm mb-0--md fs-20 font-middle">Мост к успеху вашего бизнеса</li>
        </ul>
      </div>
      <div class="col-100 col-md-50 content-right"></div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-copyright text-center">
      &copy; Vladlen Schetinin
      <span></span>
      <span>All Rights Reserved</span>
    </div>
  </div>
</footer>

</div>

<?php if (file_exists($root . "/template/forms/fixedcontact.php")): ?>
<?php require_once $root . '/template/forms/fixedcontact.php';?>
<?php endif;?>

<?php if (file_exists($root . "/template/forms/mainform.php")): ?>
<?php require_once $root . '/template/forms/mainform.php';?>
<?php endif;?>

<script type="module" crossorigin src="/assets/scripts/main.js"></script>

</body>

</html>
