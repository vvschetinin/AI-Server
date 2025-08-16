<?header('Content-type: text/html; charset=utf-8');?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Add Icons -->
  <link rel="icon" type="image/ico" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="160x160" href="/apple-touch-icon.png">
  <!-- Add Title + Meta -->
  <?php if (file_exists($root . "/interface/seo/headtitle.php")): ?>
  <?php require_once $root . '/interface/seo/headtitle.php';?>
  <?php endif;?>
  <!-- Add Styles -->
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css">
  <!-- Add Metrics -->
</head>

<body>
  <div class="site-wrapper">
    <?php if (file_exists($root . "/template/shared/header-inner.php")): ?>
    <?php require_once $root . '/template/shared/header-inner.php';?>
    <?php endif;?>
    <main class="site-content">

      <section class="hero hero--small">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title"><span class="sectorname">Услуги</span>Чат-боты, контент и оптимизация<span>которые
                работают на вас</span></h1>
            <div class="hero-buttons">
              <a class="btn btn--white" href="/cases/">Мои проекты</a>
            </div>
          </div>
        </div>

        <span class="hero-logo-circle svg" aria-hidden="true">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 573.7 676.8"
            style="enable-background: new 0 0 573.7 676.8" xml:space="preserve" role="img"
            aria-label="Декоративный элемент Circle сайта Владлена Щетинина - AI для бизнеса">
            <lineargradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="181.319" y1="50.417" x2="385.174"
              y2="7.041" gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #0054e8; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #0054e8; stop-opacity: 0" />
            </lineargradient>
            <path
              d="m384.6 673.7-6.5-49.1c-13 1.9-26.2 2.8-39.7 2.6-52.8 0-103.4-14.2-147.6-40.4l-17 47.2c64.7 36.3 139 49.4 210.8 39.7z"
              style="fill:url(#SVGID_1_)" />
            <lineargradient id="SVGID_00000085212238882173608500000001751865219859870124_"
              gradientUnits="userSpaceOnUse" x1="385.722" y1="13.344" x2="565.147" y2="119.629"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #362196; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #362196; stop-opacity: 0" />
            </lineargradient>
            <path style="fill:url(#SVGID_00000085212238882173608500000001751865219859870124_)"
              d="m573.7 558-38.1-31.6c-8.3 10.2-17.6 19.8-27.3 28.9-38.9 35.8-85.7 59.8-136 70.3l19.4 46.3c72.2-17.4 136-58 182-113.9z" />
            <lineargradient id="SVGID_00000054979441330718411650000000757860263680604586_"
              gradientUnits="userSpaceOnUse" x1="29.888" y1="221.7" x2="178.573" y2="52.094"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #1cd4bd; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #1cd4bd; stop-opacity: 0" />
            </lineargradient>
            <path style="fill:url(#SVGID_00000054979441330718411650000000757860263680604586_)"
              d="M99 577.8a338.2 338.2 0 0 0 74.5 56.3l17-47.2c-20.4-12-39.4-27-56.5-44.1-32.1-32.1-55.7-70.5-69.7-112.4L16.8 444c15.9 48.9 43.3 94.9 82.2 133.8z" />
            <lineargradient id="SVGID_00000034804935388537925030000011209597666348334242_"
              gradientUnits="userSpaceOnUse" x1="33.996" y1="435.93" x2="34.789" y2="235.51"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #009e00; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #009e00; stop-opacity: 0" />
            </lineargradient>
            <path style="fill:url(#SVGID_00000034804935388537925030000011209597666348334242_)"
              d="m16.8 444 47.6-13.6c-9.7-29.2-14.8-60.2-14.9-91.8 0-35.8 6.5-70.7 19-103.3l-48.3-11.6c-25.7 71-26.9 148.7-3.4 220.3z" />
            <lineargradient id="SVGID_00000132090461383626792580000002367724434022927772_"
              gradientUnits="userSpaceOnUse" x1="198.794" y1="615.024" x2="34.609" y2="450.839"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #e84f1c; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #e84f1c; stop-opacity: 0" />
            </lineargradient>
            <path style="fill:url(#SVGID_00000132090461383626792580000002367724434022927772_)"
              d="M99.2 99.2c-36.5 36.5-62.7 79.1-79.1 124.5l48.3 11.6c14.4-37.5 36.6-71.8 65.8-101 23.3-23.3 49.9-42.2 78.8-56.2l-22-44.4c-33.2 16.2-64.3 38-91.8 65.5z" />
            <lineargradient id="SVGID_00000061471580143910760410000018300043758344421048_"
              gradientUnits="userSpaceOnUse" x1="397.097" y1="646.002" x2="206.415" y2="618.85"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #de0030; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #de0030; stop-opacity: 0" />
            </lineargradient>
            <path style="fill:url(#SVGID_00000061471580143910760410000018300043758344421048_)"
              d="M191.1 33.9 213 78c38.8-18.7 81.4-28.6 125.5-28.6 18.6 0 37.2 1.8 55.4 5.4l8.5-48.6C331.6-7.6 257.2 1.7 191.1 33.9z" />
            <path
              d="M218.6 74.3c9.7-9.7 9.7-25.5 0-35.2-9.7-9.7-25.5-9.7-35.2 0s-9.7 25.5 0 35.2c9.7 9.7 25.4 9.7 35.2 0z"
              style="fill: #e84f1c" />
            <path
              d="M415.9 48.3c9.7-9.7 9.7-25.5 0-35.2-9.7-9.7-25.5-9.7-35.2 0-9.7 9.7-9.7 25.5 0 35.2 9.7 9.7 25.5 9.7 35.2 0z"
              style="fill: #de0030" />
            <path
              d="M61.5 249c9.7-9.7 9.7-25.5 0-35.2-9.7-9.7-25.5-9.7-35.2 0-9.7 9.7-9.7 25.5 0 35.2 9.7 9.7 25.5 9.7 35.2 0z"
              style="fill: #009e00" />
            <path
              d="M59.7 458.2c9.7-9.7 9.7-25.5 0-35.2-9.7-9.7-25.5-9.7-35.2 0-9.7 9.7-9.7 25.5 0 35.2 9.7 9.7 25.5 9.7 35.2 0z"
              style="fill: #1cd4bd" />
            <path
              d="M199.2 627.6c9.7-9.7 9.7-25.5 0-35.2s-25.5-9.7-35.2 0c-9.7 9.7-9.7 25.5 0 35.2 9.7 9.7 25.4 9.7 35.2 0z"
              style="fill: #0054e8" />
            <path
              d="M399.5 666.4c9.7-9.7 9.7-25.5 0-35.2-9.7-9.7-25.5-9.7-35.2 0-9.7 9.7-9.7 25.5 0 35.2s25.5 9.7 35.2 0z"
              style="fill: #362196" />
          </svg>
        </span>
        <span class="hero-pattern hero-pattern--small svg" aria-hidden="true">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1680 107" preserveAspectRatio="none"
            role="img" aria-label="Декоративный элемент внутренней страницы">
            <path class="pattern-highlight" d="M1205 72.71 0 17v87h1205Z" fill="#DE0030" />
            <path class="pattern-fill" d="M0 96.44 1680 0v107H0Z" fill="#1d1d1d" />
          </svg>
        </span>

      </section>

      <section class="s-services section-type bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line mb-2">Рост вашего бизнеса с умными решениями</h2>
            </div>
            <article class="col-100">
              <h2 class="p-article mb-0">Хотите вывести свой бизнес на новый уровень?</h2>
              <p>
                Перечисленные ниже услуги объединяют передовые технологии и проверенные подходы, чтобы автоматизировать
                процессы, привлекать больше клиентов и создавать контент, который работает. От умных чат-ботов и и
                контент-маркетинга до всех аспектов технической оптимизации — я помогу вам экономить время, сокращать
                затраты и достигать целей. Узнайте, как это может
                преобразить ваш бизнес уже сегодня!
              </p>
            </article>
          </div>

          <div class="row justify-center">
            <div class="col-100 col-md-50 col-lg-40 mb-2">
              <article class="services-item">
                <a href="/services/content/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/content/content.webp" alt="Баннер услуги контент-маркетинга"
                        loading="lazy">
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1">Контент-маркетинг</h3>
                    <p>
                      Контент, который идеально соответствует вашему стилю и задачам. Привлечение аудитории в соцсетях,
                      создание презентаций и рекламных материалов.
                    </p>
                  </div>
                  <a href="/services/content/" class="find-btn">Узнать больше</a>
                </div>
              </article>
            </div>
            <div class="col-100 col-md-50 col-lg-40 mb-2">
              <article class="services-item">
                <a href="/services/aibots/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/aibots/aibots.webp" alt="Баннер услуги AI-чат-ботов"
                        loading="lazy">
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1">AI Чат-боты</h3>
                    <p>
                      Автоматизированное общение с клиентами — от консультаций и поддержки до обработки заказов и сбора
                      контактов. С AI чат-ботами вы всегда на связи!
                    </p>
                  </div>
                  <a href="/services/aibots/" class="find-btn">Узнать больше</a>
                </div>
              </article>
            </div>
            <div class="col-100 col-md-50 col-lg-40 mb-2 mb-0--md">
              <article class="services-item">
                <a href="/services/mailmarket/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/mailmarket/mailmarket.webp" alt="Баннер Оптимизация сайта">
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1">E-mail маркетинг</h3>
                    <p>
                      Разработка персонализированных e-mail кампаний с использованием современных платформ и подходов.
                      Создание стратегий, адаптированных под ваш бизнес.
                    </p>
                  </div>
                  <a href="/services/mailmarket/" class="find-btn">Узнать больше</a>
                </div>
              </article>
            </div>
            <div class="col-100 col-md-50 col-lg-40 mb-0">
              <article class="services-item">
                <a href="/services/castom/">
                  <div class="services-banner">
                    <picture class="inner">
                      <img src="/assets/images/services/castom/castom.webp" alt="Баннер верстки для CMS">
                    </picture>
                  </div>
                </a>
                <div class="services-prev">
                  <div class="content">
                    <h3 class="h3-title mb-1">Создание верстки для CMS</h3>
                    <p>
                      Cоздание адаптивной, валидной верстку с базовой SEO-оптимизацией, использующей самые современные
                      подходы и плагины. Идеальная работа на любых
                      устройствах.
                    </p>
                  </div>
                  <a href="/services/castom/" class="find-btn">Узнать больше</a>
                </div>
              </article>
            </div>
          </div>

          <div class="row element-animation-up">
            <article class="col-100 addservice">
              <h3 class="h3-title mb-1">Дополнительные работы и услуги:</h3>
              <ul class="services-list">
                <li>Анализ конкурентной среды с применением AI</li>
                <li>Техническая поддержка AI-решений</li>
                <li>Заинтересован в сотрудничестве с компаниями, реализующими проекты с использованием AI</li>
              </ul>
              <p>Хотите, чтобы ваш сайт работал безупречно и привлекал больше клиентов? Обеспечу его быструю загрузку,
                идеальную адаптацию под мобильные устройства и
                соответствие современным стандартам. Продуманные решения сделают сайт удобным для пользователей и усилят
                позиции вашего бизнеса в онлайне! Узнайте больше в моих <a class="hover-link" href="/cases/">кейсах</a>.
              </p>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
            </article>
          </div>

        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>