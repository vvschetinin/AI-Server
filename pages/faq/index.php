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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Add Icons -->
  <link rel="icon" type="image/ico" href="/favicon.ico" alt="Favicon сайта">
  <link rel="apple-touch-icon" sizes="160x160" href="/apple-touch-icon.png" alt="Иконка сайта для Apple устройств">
  <!-- Add Title + Meta -->
  <?php if (file_exists($root . "/interface/seo/headtitle.php")): ?>
    <?php require_once $root . '/interface/seo/headtitle.php'; ?>
  <?php endif; ?>
  <!-- Add Styles -->
  <link rel="stylesheet" crossorigin href="/assets/styles/main.css">
  <!-- Add Metrics -->
</head>

<body>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/65009764" style="position:absolute; left:-9999px;" alt=""></div>
  </noscript>
  <div class="site-wrapper">
    <?php if (file_exists($root . "/template/shared/header-inner.php")): ?>
      <?php require_once $root . '/template/shared/header-inner.php'; ?>
    <?php endif; ?>
    <main class="site-content">

      <section class="hero hero--small">
        <div class="hero-container">
          <div class="hero-content">
            <h1 class="hero-title">
              <!-- Уточняем тематику раздела -->
              <span class="sectorname">FAQ по разработке и AI</span>
              Часто задаваемые вопросы клиентов
              <!-- Внедряем главные боли клиента: Деньги, Время, Процесс -->
              <span>Стоимость создания сайтов, сроки и этапы</span>
            </h1>
            <div class="hero-buttons">
              <a class="btn btn--purple" href="/services/">Предлагаемые услуги</a>
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

      <section class="section-type s-faq bg-dark">
        <div class="container--middle">
          <div class="row content-block element-animation-up">
            <div class="col-100 col-lg-35 col-xl-25">
              <!-- Уточняем заголовок сайдбара -->
              <h2 class="h2-title deco-line mb-1 mb-0--lg">Частые вопросы (FAQ)</h2>
            </div>
            <article class="col-100 col-lg-65 col-xl-75">
              <!-- Внедряем основные ключи в лид-абзац -->
              <h2 class="p-article">Ответы на вопросы о разработке сайтов и внедрении AI</h2>
              <p>
                Этот раздел поможет вам разобраться в процессе сотрудничества. Здесь я собрал информацию о <strong>сроках разработки</strong>, порядке формирования
                <strong>стоимости услуг</strong> и технических нюансах. Ознакомьтесь с ответами, чтобы с чётким пониманием начать цифровую трансформацию бизнеса, экономя время и ресурсы!
              </p>
              <!-- Исправлена ошибка "остануться" -> "останутся" -->
              <p>Если у вас останутся вопросы — свяжитесь со мной для консультации, я помогу составить ТЗ и найти идеальное решение.</p>
            </article>
          </div>
          <div class="row">

            <article class="col-100 col-xl-80">
              <ul class="faq-list">
                <li>
                  <!-- Ключ: Этапы разработки -->
                  <h2 class="faq-question" tabindex="0">Как проходят этапы разработки проекта?</h2>
                  <div class="faq-answer">
                    <p>
                      Работа строится прозрачно: от анализа ниши и составления <strong>Технического задания (ТЗ)</strong> до прототипирования, верстки и запуска.
                      Вы получаете регулярные отчеты на каждом этапе. Такой подход гарантирует, что готовый сайт или бот полностью соответствует вашим бизнес-задачам.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Стоимость, цена -->
                  <h2 class="faq-question" tabindex="0">Из чего складывается стоимость услуг?</h2>
                  <div class="faq-answer">
                    <p>
                      <strong>Цена разработки</strong> зависит от функционала: нужен ли вам простой лендинг, корпоративный сайт или сложная интеграция с <strong>AI-чат-ботом</strong>. Я предлагаю гибкие решения под ваш бюджет без скрытых платежей. Свяжитесь для расчета сметы, которая обеспечит максимальную отдачу от инвестиций.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Индивидуальный подход, SEO -->
                  <h2 class="faq-question" tabindex="0">Как учитывается специфика моего бизнеса?</h2>
                  <div class="faq-answer">
                    <p>
                      Я не использую шаблонные решения "вслепую". Перед стартом провожу анализ конкурентов, чтобы <strong>SEO-оптимизация</strong>, дизайн и контент работали именно на вашу целевую аудиторию. Персонализация — главный драйвер высокой конверсии.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Telegram, CRM, интеграция -->
                  <h2 class="faq-question" tabindex="0">Как работают AI-боты и интеграция с Telegram?</h2>
                  <div class="faq-answer">
                    <p>
                      Разрабатываю умных ботов, которые интегрируются с <strong>Telegram</strong>, сайтом и вашими <strong>CRM-системами</strong>.
                      Это позволяет автоматизировать прием заявок 24/7 и сбор отзывов. Бот берет на себя рутину, освобождая менеджеров для работы с горячими клиентами.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Техническая поддержка -->
                  <h2 class="faq-question" tabindex="0">Есть ли гарантии и техническая поддержка?</h2>
                  <div class="faq-answer">
                    <p>
                      Да, я обеспечиваю <strong>техническую поддержку сайта</strong> после запуска. Это включает мониторинг серверов, обновление контента и корректировку алгоритмов ботов. Я заинтересован в том, чтобы ваш проект работал стабильно и приносил прибыль в долгосрочной перспективе.
                    </p>
                  </div>
                </li>
                <!-- Дополнительные блоки FAQ (вставить внутрь <ul class="faq-list">) -->
                <li>
                  <!-- Ключ: Выбор CMS, Битрикс, WordPress -->
                  <h2 class="faq-question" tabindex="0">На какой CMS лучше делать сайт: Битрикс или WordPress?</h2>
                  <div class="faq-answer">
                    <p>
                      Выбор зависит от масштаба. Для интернет-магазинов и сложной интеграции я рекомендую <strong>1С-Битрикс</strong>. Для лендингов, блогов и корпоративных сайтов отлично подходят <strong>WordPress</strong> или ModX. Я помогу подобрать платформу, которая будет удобна вам в управлении и не потребует лишних затрат на лицензии.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Базовое SEO, продвижение -->
                  <h2 class="faq-question" tabindex="0">Входит ли SEO-оптимизация в стоимость разработки?</h2>
                  <div class="faq-answer">
                    <p>
                      Да, я делаю базовую <strong>SEO-оптимизацию</strong> по умолчанию. Это включает настройку мета-тегов, карту сайта (sitemap), файл robots.txt и обеспечение высокой скорости загрузки. Ваш сайт будет полностью готов к индексации в Яндексе и Google. Для глубокого продвижения по высокочастотным запросам мы можем обсудить отдельную стратегию.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Редизайн, доработка сайта -->
                  <h2 class="faq-question" tabindex="0">Можно ли доработать или обновить уже существующий сайт?</h2>
                  <div class="faq-answer">
                    <p>
                      Конечно. Я провожу технический аудит текущего ресурса, нахожу «узкие места» и выполняю <strong>редизайн сайта</strong>. Это может быть как визуальное обновление, так и оптимизация программного кода для ускорения работы. Часто это выгоднее, чем создавать сайт с нуля.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Хостинг, домен, SSL -->
                  <h2 class="faq-question" tabindex="0">Помогаете ли вы с покупкой домена и хостинга?</h2>
                  <div class="faq-answer">
                    <p>
                      Да, я беру на себя всю техническую часть: подбор надежного <strong>хостинга</strong>, регистрацию доменного имени и установку <strong>SSL-сертификата</strong> безопасности. Вам не придется разбираться в настройках DNS и панелях управления сервером — вы получаете работающий «под ключ» проект.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Контент, копирайтинг, AI -->
                  <h2 class="faq-question" tabindex="0">Кто пишет тексты и готовит контент для сайта?</h2>
                  <div class="faq-answer">
                    <p>
                      Я предлагаю услуги профессионального копирайтинга с использованием <strong>AI-инструментов</strong>. Это позволяет быстро создавать уникальные, продающие тексты, оптимизированные под поисковые запросы. Вам не нужно искать отдельного копирайтера — я подготовлю контент, который будет бить точно в боли вашей аудитории.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Договор, оплата, юрлица -->
                  <h2 class="faq-question" tabindex="0">Работаете ли вы официально по договору?</h2>
                  <div class="faq-answer">
                    <p>
                      Обязательно. Мы заключаем официальный <strong>договор на разработку</strong>, где фиксируются сроки, стоимость и техническое задание.
                      Я работаю официально, предоставляю закрывающие документы для бухгалтерии и передаю вам полные исключительные права на сайт и контент после сдачи проекта.
                    </p>
                  </div>
                </li>
                <li>
                  <!-- Ключ: Скорость загрузки, Google PageSpeed -->
                  <h2 class="faq-question" tabindex="0">Почему важна скорость загрузки сайта (PageSpeed)?</h2>
                  <div class="faq-answer">
                    <p>
                      Медленные сайты теряют до 40% клиентов в первые 3 секунды. Я уделяю приоритетное внимание показателям <strong>Google PageSpeed</strong>.
                      Оптимизация изображений, кэширование и чистый код гарантируют, что ваш сайт будет летать даже на мобильном интернете, что напрямую влияет на рост продаж.
                    </p>
                  </div>
                </li>
              </ul>
            </article>

          </div>
          <div class="row">
            <div class="col-100 col-xl-80">
              <article class="bottom-text mt-3 pt-0 pt-1--lg">
                <h2 class="p-article color-white font-middle mb-0">Не нашли ответа?</h2>
                <p>
                  Напишите мне для бесплатной консультации. Я помогу определиться с функционалом, выбрать CMS и рассчитать точную стоимость проекта. Давайте обсудим ваши цели прямо сейчас!
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
        <?php require_once $root . '/template/shared/footer.php'; ?>
      <?php endif; ?>
