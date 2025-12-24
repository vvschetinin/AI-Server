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
    <!-- Подключение Header -->
    <?php if (file_exists($root . "/template/shared/header.php")): ?>
      <?php require_once $root . '/template/shared/header.php'; ?>
    <?php endif; ?>
    <!-- End Подключение Header -->
    <main class="site-content">

      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <article>
                <div class="hero-inner">
                  <h1 class="h1-inner deco-line mb-0">
                    <!-- Трендовый заголовок: Контент + AI -->
                    Создание продающего контента с помощью AI
                    <!-- Конкретные форматы: Статьи, Посты, Презентации -->
                    <span>SEO-статьи, посты для Telegram и презентации</span>
                  </h1>
                </div>
                <p>
                  Нужен контент, который продает, а не лежит мертвым грузом? Я предлагаю услуги <strong>копирайтинга нового поколения</strong>. Используя связку
                  "Эксперт + Нейросети", я создаю большие объемы качественных текстов в 3 раза быстрее обычных агентств. От <strong>экспертных статей в блог</strong> до прогревающих цепочек постов в Telegram и коммерческих предложений (КП). Закажите контент-стратегию, которая повысит охваты и превратит читателей в клиентов.
                </p>
              </article>
            </div>
          </div>
          <!-- Step position (Преимущества) -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Соблюдение Tone of Voice</h3>
                <p>
                  Ваш бренд будет звучать узнаваемо. Я адаптирую стиль подачи: от дерзкого и молодежного для соцсетей до строгого и делового для B2B-презентаций. Нейросети помогают выдерживать единый стиль во всех каналах коммуникации.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Скорость без потери качества</h3>
                <p>
                  Благодаря AI-инструментам вы получаете готовый <strong>контент-план на месяц</strong> за пару дней, а не недель. Оперативно реагирую на инфоповоды (Newsjacking) и готовлю посты "день в день".
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Кому нужен AI-копирайтинг</h2>
                <ul class="services-list mb-1">
                  <li><strong>Блогеры и Эксперты:</strong> Регулярные посты в Telegram/Instagram без выгорания. Упаковка кейсов.</li>
                  <li><strong>Интернет-магазины:</strong> Тысячи уникальных описаний товаров (карточек) для маркетплейсов Ozon/Wildberries с SEO-ключами.</li>
                  <li><strong>B2B Компании:</strong> Кейсы, White Papers, презентации для инвесторов и статьи на VC.ru.</li>
                </ul>
                <p>
                  Я не просто пишу текст, я упаковываю смыслы. Если у вас нет ТЗ, я помогу его составить, проведя анализ конкурентов и вашей целевой аудитории.
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально (Виды работ) -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Виды контента и форматы</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">SMM и посты для соцсетей</h3>
                <p>
                  Вовлекающие, продающие и развлекательные посты. Разработка контент-плана, сценариев для Reels и Stories. Прогревы перед запуском продуктов в Telegram-каналах.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">SEO-копирайтинг для сайтов</h3>
                <p>
                  Пишу статьи, которые любят Яндекс и Google. Грамотно вписываю ключевые слова (LSI), составляю мета-теги (Title, Description) и делаю правильную структуру (H1-H3), чтобы вы получали <strong>бесплатный органический трафик</strong>.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Продающие тексты (Direct Response)</h3>
                <p>
                  Тексты для лендингов (Landing Page), скрипты продаж и цепочки писем для e-mail рассылок. Использую формулы AIDA, PMHS для высокой конверсии в заявку.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Презентации и Маркетинг-киты</h3>
                <p>
                  Структурирую хаос мыслей в четкую презентацию. Пишу тезисы для слайдов, которые убеждают партнеров. Создаю коммерческие предложения (КП), которые хочется дочитать до конца.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Нужен контент-план?</h2>
                <p>
                  Хватит тратить время на муки творчества. Делегируйте создание контента профессионалу с AI-инструментами. Свяжитесь со мной для аудита вашего текущего контента и разработки стратегии продвижения.
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Заказать тексты</button>
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
