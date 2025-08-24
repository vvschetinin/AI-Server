<header class="header header--large">
  <div class="header-wrapper">
    <div class="header-container static--xl">
      <!-- LOGOTYPE -->
      <?php if ($_SERVER["REQUEST_URI"] == '/') : ?>
      <span class="header-logo svg" role="img" aria-label="Главная страница сайта Владлена Щетинина">
        <?php if (file_exists($root . "/interface/include/logo.php")) : ?>
        <?php require $root . '/interface/include/logo.php'; ?>
        <?php endif; ?>
      </span>
      <?php else : ?>
      <a class="header-logo svg" href="/" aria-label="На главную страницу сайта Владлена Щетинина">
        <?php if (file_exists($root . "/interface/include/logo.php")) : ?>
        <?php require $root . '/interface/include/logo.php'; ?>
        <?php endif; ?>
      </a>
      <?php endif; ?>
      <!-- Desktop Nav -->
      <nav class="desktop-nav display-none display-table--lg" aria-label="Основная навигация">
        <?php if (file_exists($root . "/interface/include/desktop-menu.php")) : ?>
        <?php require_once $root . '/interface/include/desktop-menu.php'; ?>
        <?php endif; ?>
      </nav>
      <div class="button-wrap">
        <button class="start-project-btn display-none display-inline-block--sm js-startproject" aria-haspopup="dialog"
          aria-controls="modal-form">Начать проект</button>
      </div>
      <div class="header-right">
        <button class="nav-toggle display-block display-none--lg" aria-label="Открыть меню" aria-expanded="false"
          aria-controls="mobile-nav">
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
        </button>
      </div>
    </div>
  </div>
  <nav class="header-nav" id="mobile-nav" aria-label="Мобильная навигация">
    <div class="header-nav--inner">
      <?php if (file_exists($root . "/interface/include/mobil-menu.php")) : ?>
      <?php require_once $root . '/interface/include/mobil-menu.php'; ?>
      <?php endif; ?>
    </div>
  </nav>
</header>
