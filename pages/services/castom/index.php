<? header('Content-type: text/html; charset=utf-8'); ?>
<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/interface/init.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <!-- Yandex.Metrika counter -->
  <meta charset="UTF-8">
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

<body>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/65009764" style="position:absolute; left:-9999px;" alt=""></div>
  </noscript>
  <div class="site-wrapper">
    <?php if (file_exists($root . "/template/shared/header-inner.php")): ?>
      <?php require_once $root . '/template/shared/header-inner.php'; ?>
    <?php endif; ?>
    <main class="site-content">

      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <article>
                <div class="hero-inner">
                  <h1 class="h1-inner deco-line mb-0">
                    <!-- Ключевые слова: Адаптивная, HTML, Макеты -->
                    Адаптивная HTML-верстка макетов для CMS
                    <!-- Маркеры качества: Pixel Perfect, Валидность -->
                    <span>Pixel Perfect, валидный код и интеграция</span>
                  </h1>
                </div>
                <p>
                  Ищете надежного верстальщика? Я превращаю макеты из <strong>Figma</strong> или Photoshop в чистый, живой код. Закажите <strong>адаптивную верстку сайта</strong>, которая корректно отображается на любых смартфонах и планшетах. Мой код проходит валидацию W3C, оптимизирован по скорости (Google PageSpeed Green Zone) и полностью готов к натяжке на <strong>1С-Битрикс, WordPress</strong> или ModX. Никаких конструкторов — только профессиональная разработка.
                </p>
              </article>
            </div>
          </div>
          <!-- Step position (Преимущества) -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Кроссбраузерность и адаптивность</h3>
                <p>
                  Гарантирую, что сайт будет выглядеть одинаково хорошо в Chrome, Safari, Firefox и на мобильных устройствах (iOS/Android). Использую методологию <strong>Mobile First</strong>, что критически важно для ранжирования в поиске.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Оптимизация скорости (Performance)</h3>
                <p>
                  Минимизирую CSS/JS файлы, настраиваю Lazy Loading (ленивую загрузку) изображений и использую современные форматы WebP. Ваш сайт будет загружаться мгновенно, что снижает показатель отказов.
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Для кого эта услуга</h2>
                <ul class="services-list mb-1">
                  <li><strong>Дизайнеры и веб-студии:</strong> Качественная верстка ваших макетов "один в один" (Pixel Perfect). Соблюдение дедлайнов.</li>
                  <li><strong>Владельцы интернет-магазинов:</strong> Создание сложных каталогов, фильтров и карточек товаров для OpenCart или Битрикс.</li>
                  <li><strong>Бизнес:</strong> Редизайн устаревшего сайта. Обновление внешнего вида без потери данных.</li>
                </ul>
                <p>
                  Я понимаю технические требования бэкенд-разработчиков, поэтому мой код легко интегрировать в любую систему управления (CMS) или использовать в качестве фронтенда для веб-приложений.
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально (Технический стек) -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Технический стек и стандарты</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Семантическая верстка (HTML5 + SEO)</h3>
                <p>
                  Использую правильные теги (header, nav, article), микроразметку Schema.org и понятную структуру заголовков. Поисковые роботы сразу "полюбят" ваш сайт.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Современный CSS и JavaScript</h3>
                <p>
                  Применяю Flexbox, Grid Layout и препроцессоры (SCSS/SASS). Для интерактива использую чистый JS (ES6+) или легкие библиотеки. Анимации плавные и не тормозят устройство пользователя.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">БЭМ-нейминг и модульность</h3>
                <p>
                  Не использую в работе код по методологии БЭМ (Блок-Элемент-Модификатор). Работаю по частично адаптированной Tailwind.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Подготовка к CMS</h3>
                <p>
                  Создаю структуру файлов, готовую к интеграции в <strong>WordPress (натяжка темы)</strong> или компоненты Битрикса. Экономлю время программиста на этапе сборки движка.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Есть макет? Превратим его в сайт!</h2>
                <p>
                  Присылайте макет в Figma/Sketch/PSD на оценку. Я изучу слои, оценю сложность анимаций и назову точную стоимость <strong>адаптивной верстки</strong>. Гарантирую чистый код и соблюдение сроков.
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Оценить стоимость
                  верстки</button>
              </div>
              <div class="revers-list flex justify-center justify-start--sm mt-3">
                <a href="/pages/services/" class="hover-rotate">Назад к каталогу услуг</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
        <?php require_once $root . '/template/shared/footer.php'; ?>
      <?php endif; ?>
