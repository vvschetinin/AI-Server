<? header('Content-type: text/html; charset=utf-8'); ?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Yandex.Metrika counter -->
  <?php if (file_exists($root . "/interface/seo/metrics.php")): ?>
    <?php require_once $root . '/interface/seo/metrics.php'; ?>
  <?php endif; ?>
  <!-- End Yandex.Metrika counter -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Add Icons -->
  <link rel="icon" type="image/ico" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="160x160" href="/apple-touch-icon.png">
  <!-- Add Title + Meta -->
  <?php if (file_exists($root . "/interface/seo/headtitle.php")): ?>
    <?php require_once $root . '/interface/seo/headtitle.php'; ?>
  <?php endif; ?>
  <!-- Add Styles -->
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css">
  <!-- Add Metrics -->
</head>

<body class="">
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/65009764" style="position:absolute; left:-9999px;" alt=""></div>
  </noscript>
  <div class="site-wrapper">
    <!-- Подключение Header -->
    <?php if (file_exists($root . "/template/shared/header.php")): ?>
      <?php require_once $root . '/template/shared/header.php'; ?>
    <?php endif; ?>
    <!-- Подключение Header -->
    <main class="site-content">
      <!-- Секция Hero -->
      <section class="hero hero--large bg-hero">
        <figure class="hero-media bg--cover" style="background-image: url(/assets/images/hero/main-hero.webp)" role="img"
          aria-label="Веб-разработка и внедрение AI-инструментов в бизнес: современное производство" id="hero-figure">
        </figure>
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title">
              <!-- Бренд + Профессия для узнаваемости -->
              <span class="sectorname">Веб-разработчик Владлен Щетинин</span>
              Внедрение AI и создание сайтов
              <!-- Конкретные услуги вместо "многое другое" -->
              <span>Разработка чат-ботов, SEO и контент-маркетинг</span>
            </h1>
            <div class="hero-text">
              <p>
                Помогаю бизнесу расти через <strong>автоматизацию продаж</strong> и внедрение нейросетей. Оказываю услуги по разработке умных помощников, созданию продающего контента и надежной технической поддержки. Закажите решение, которое работает 24/7.
              </p>
            </div>
            <div class="hero-buttons">
              <!-- Ссылки оставил без изменений, так как они ведут на внутренние страницы -->
              <a class="btn btn--purple" href="/services/">Предлагаемые услуги</a>
              <a class="btn btn--white" href="/cases/">Мои проекты</a>
            </div>
          </div>
        </div>
        <span class="hero-logo-circle svg" aria-hidden="true">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 573.7 676.8"
            style="enable-background: new 0 0 573.7 676.8" xml:space="preserve">
            <lineargradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="181.319" y1="50.417" x2="385.174"
              y2="7.041" gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #0054e8; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #0054e8; stop-opacity: 0" />
            </lineargradient>
            <path
              d="m384.6 673.7-6.5-49.1c-13 1.9-26.2 2.8-39.7 2.6-52.8 0-103.4-14.2-147.6-40.4l-17 47.2c64.7 36.3 139 49.4 210.8 39.7z"
              style="fill: url(#SVGID_1_)" />
            <lineargradient id="SVGID_00000085212238882173608500000001751865219859870124_"
              gradientUnits="userSpaceOnUse" x1="385.722" y1="13.344" x2="565.147" y2="119.629"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #362196; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #362196; stop-opacity: 0" />
            </lineargradient>
            <path style="fill: url(#SVGID_00000085212238882173608500000001751865219859870124_)"
              d="m573.7 558-38.1-31.6c-8.3 10.2-17.6 19.8-27.3 28.9-38.9 35.8-85.7 59.8-136 70.3l19.4 46.3c72.2-17.4 136-58 182-113.9z" />
            <lineargradient id="SVGID_00000054979441330718411650000000757860263680604586_"
              gradientUnits="userSpaceOnUse" x1="29.888" y1="221.7" x2="178.573" y2="52.094"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #1cd4bd; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #1cd4bd; stop-opacity: 0" />
            </lineargradient>
            <path style="fill: url(#SVGID_00000054979441330718411650000000757860263680604586_)"
              d="M99 577.8a338.2 338.2 0 0 0 74.5 56.3l17-47.2c-20.4-12-39.4-27-56.5-44.1-32.1-32.1-55.7-70.5-69.7-112.4L16.8 444c15.9 48.9 43.3 94.9 82.2 133.8z" />
            <lineargradient id="SVGID_00000034804935388537925030000011209597666348334242_"
              gradientUnits="userSpaceOnUse" x1="33.996" y1="435.93" x2="34.789" y2="235.51"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #009e00; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #009e00; stop-opacity: 0" />
            </lineargradient>
            <path style="fill: url(#SVGID_00000034804935388537925030000011209597666348334242_)"
              d="m16.8 444 47.6-13.6c-9.7-29.2-14.8-60.2-14.9-91.8 0-35.8 6.5-70.7 19-103.3l-48.3-11.6c-25.7 71-26.9 148.7-3.4 220.3z" />
            <lineargradient id="SVGID_00000132090461383626792580000002367724434022927772_"
              gradientUnits="userSpaceOnUse" x1="198.794" y1="615.024" x2="34.609" y2="450.839"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #e84f1c; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #e84f1c; stop-opacity: 0" />
            </lineargradient>
            <path style="fill: url(#SVGID_00000132090461383626792580000002367724434022927772_)"
              d="M99.2 99.2c-36.5 36.5-62.7 79.1-79.1 124.5l48.3 11.6c14.4-37.5 36.6-71.8 65.8-101 23.3-23.3 49.9-42.2 78.8-56.2l-22-44.4c-33.2 16.2-64.3 38-91.8 65.5z" />
            <lineargradient id="SVGID_00000061471580143910760410000018300043758344421048_"
              gradientUnits="userSpaceOnUse" x1="397.097" y1="646.002" x2="206.415" y2="618.85"
              gradientTransform="matrix(1 0 0 -1 0 667.278)">
              <stop offset="0" style="stop-color: #de0030; stop-opacity: 0.8" />
              <stop offset="1" style="stop-color: #de0030; stop-opacity: 0" />
            </lineargradient>
            <path style="fill: url(#SVGID_00000061471580143910760410000018300043758344421048_)"
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
        <span class="hero-pattern hero-pattern--large svg" aria-hidden="true">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1680 351.72"
            preserveAspectRatio="none">
            <path class="pattern-highlight" d="M1205,234,0,56V334H1205Z" fill="#DE0030" />
            <path class="pattern-fill" d="M0,309.5,1680,0V351.72H0Z" fill="#1d1d1d" />
          </svg>
        </span>
      </section>

      <section class="s-service-listing section--inner bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100 flex justify-center">
              <!-- Оптимизировал скрытый заголовок для роботов -->
              <h2 class="hidden">Услуги веб-разработки и AI-маркетинга</h2>
              <blockquote class="home-quotes">
                <?php echo $slogan; ?>
              </blockquote>
            </div>
            <div class="col-100">
              <article class="mt-3 mt-5--lg">
                <h2 class="p-article mb-0">
                  Предлагаю комплексные <strong>услуги веб-разработчика</strong>: от создания контента и <strong>внедрения AI</strong> до технической поддержки. Разрабатываю <strong>чат-боты для бизнеса</strong>, которые работают 24/7, и адаптирую сайты под ваши цели. Моя задача — усилить ваш бренд, обеспечить <strong>автоматизацию продаж</strong> и повысить прибыль. Получите решение, которое экономит время и приносит результат уже сегодня!
                </h2>
              </article>
            </div>
          </div>
          <div class="row element-animation-up">
            <div class="col-100">
              <div class="myslider service-slider">
                <div class="myslider-wrapper">
                  <div class="slider-item">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">Контент-маркетинг и копирайтинг</h3>
                      <p>
                        Пишу продающие тексты и создаю яркий визуал, используя <strong>AI-инструменты для маркетинга</strong>. Помогаю привлекать клиентов через экспертные статьи и посты, которые повышают охваты и усиливают доверие к бренду.
                      </p>
                    </article>
                  </div>
                  <div class="slider-item">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">Разработка AI чат-ботов</h3>
                      <p>
                        Создаю умных помощников для <strong>Telegram</strong> и сайтов. Профессиональная <strong>разработка чат-ботов</strong> обеспечивает
                        автоматизацию заказов, сбор отзывов и поддержку клиентов 24/7, освобождая вас от рутины.
                      </p>
                    </article>
                  </div>
                  <div class="slider-item">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">Адаптивная верстка сайтов</h3>
                      <p>
                        Выполняю чистую, <strong>адаптивную верстку</strong> с учетом SEO-стандартов. Обеспечу корректное отображение на всех устройствах и легкую интеграцию в
                        <strong>1С-Битрикс</strong>, WordPress или ModX.
                      </p>
                    </article>
                  </div>
                  <div class="slider-item">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">E-mail маркетинг</h3>
                      <p>
                        Комплексная <strong>настройка email маркетинга</strong> и цепочек рассылок. Внедряю персонализированные стратегии и провожу мониторинг аналитики для превращения базы подписчиков в лояльных клиентов.
                      </p>
                    </article>
                  </div>
                  <div class="slider-item">
                    <article class="service-item">
                      <h3 class="h3-title lh-1 deco-line mb-15">Техподдержка и AI-консалтинг</h3>
                      <p>
                        Оказываю услуги по <strong>технической поддержке сайтов</strong> и выбору CMS. Провожу анализ конкурентов с применением нейросетей. Открыт к сотрудничеству в сложных проектах по внедрению ИИ.
                      </p>
                    </article>
                  </div>
                </div>
                <button class="slider-button-prev" aria-label="Предыдущий слайд"></button>
                <button class="slider-button-next" aria-label="Следующий слайд"></button>
                <div class="slider-pagination"></div>
              </div>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject" aria-haspopup="dialog"
                  aria-controls="modal-form">Получить консультацию</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="s-about section-type pt-0 bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line mb-1 mb-0--lg mt-05">Кто я и чем могу помочь</h2>
            </div>
            <article class="col-100">
              <h2 class="p-article mt-15">
                <span class="display-block"><?php echo $greeting; ?></span>
                Меня зовут Владлен Щетинин.
              </h2>
              <p>
                Я <strong>Full-stack разработчик</strong> и эксперт по автоматизации. За 8 лет я прошел путь от создания простых сайтов до внедрения сложных <strong>AI-систем для бизнеса</strong>. Моя специализация — это стык технологий: я объединяю надежную веб-разработку с возможностями нейросетей (ChatGPT, API), чтобы ваши продажи росли, а рутина исчезала.
              </p>
              <p>
                <strong>Почему выбирают меня?</strong> В отличие от агентств, я работаю лично, без испорченного телефона. Вы получаете прямую коммуникацию, прозрачные сроки и код, который легко поддерживать. Я создаю инструменты (чат-боты, CRM-интеграции), которые начинают окупать себя уже в первый месяц.
              </p>
            </article>
          </div>
          <div class="row mt-2 element-animation-up">
            <article class="col-100">
              <h2 class="h2-title">Ключевые компетенции:</h2>
              <!-- Сократили список до самых убойных пунктов -->
              <ul class="competences-list mt-1 mb-2">
                <li><strong>Веб-разработка под ключ:</strong> от дизайна до запуска на сервере.</li>
                <li><strong>AI-интеграции:</strong> внедрение чат-ботов и автоворонок в Telegram.</li>
                <li><strong>Гарантия результата:</strong> техническая поддержка и обучение сотрудников.</li>
              </ul>
              <p>
                Хотите узнать подробнее о моем опыте, стеке технологий и принципах работы?
                <a href="/pages/about/" class="hover-link">Читайте полную биографию</a>.
              </p>
            </article>
            <div class="col-100 mt-2">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Готовы обсудить задачу?</h2>
                <p>
                  Нужен продающий сайт или умный бот? Свяжитесь со мной для бесплатной консультации.
                  Я изучу ваш проект и предложу решение, подходящее под ваш бюджет.
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject" aria-haspopup="dialog" aria-controls="modal-form">Получить консультацию</button>
                <!-- Опционально: кнопка перехода в портфолио -->
                <!-- <a href="/pages/cases/" class="btn btn--white display-inline-block ml-2 hidden-xs">Смотреть кейсы</a> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Подключение Footer -->
      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
        <?php require_once $root . '/template/shared/footer.php'; ?>
      <?php endif; ?>
