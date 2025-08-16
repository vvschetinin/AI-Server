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

      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <article>
                <div class="hero-inner">
                  <h1 class="h1-inner deco-line mb-0">
                    Умный контент-маркетинг
                    <span>Тексты, презентации и рекламные материалы</span>
                  </h1>
                </div>
                <p>
                  Мечтаете о контенте, который привлекает внимание, укрепляет ваш бренд и приносит результаты? Услуга
                  контент-маркетинга обеспечит вас уникальными
                  текстами, статьи, презентациями и рекламными материалами! Созданный контент будет идеально
                  соответствовать вашему стилю и задачам, будь то вовлечение
                  аудитории в соцсетях, продвижение через блог или создание продающих презентаций и рекламных
                  материалов. Вы получаете качественный контент быстро и
                  экономично. Сделайте ваш бренд заметным!
                </p>
              </article>
            </div>
          </div>
          <!-- Step position -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Адаптация под бренд</h3>
                <p>
                  Каждый текст, пост, презентация или баннер разрабатывается с учётом вашего стиля и задач. Усиливаю
                  узнаваемость бренда, создавая контент, который
                  отражает голос вашей компании, вызывает доверие и формирует прочную связь с целевой аудиторией.
                  Материалы эффективно работают на сайтах, в рекламе и
                  на мероприятиях, обеспечивая вашу заметность и успех.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Быстрый результат</h3>
                <p>
                  Получите качественные тексты, презентации и рекламные материалы всего за несколько дней! Без долгих
                  ожиданий — создаю контент, готовый для запуска
                  кампаний, чтобы вы могли оперативно привлекать аудиторию, увеличивать охваты и достигать бизнес-целей
                  без лишних задержек.
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Кому подойдет эта услуга</h2>
                <p>
                  Эта услуга создана для тех, кто хочет выделиться и привлечь аудиторию. Запускаете бренд в соцсетях?
                  Создам яркие посты и статьи, чтобы завоевать
                  внимание клиентов. Нужны продающие тексты и баннеры для интернет-магазина? Мои материалы увеличат
                  конверсии. Готовите презентации для партнёров?
                  Разработаю убедительные и стильные решения. Блогерам и стартапам предложу контент, который усилит их
                  голос и привлечёт подписчиков. Какой бы ни был
                  ваш проект, адаптирую тексты, презентации и рекламу под ваши задачи, чтобы сэкономить время и достичь
                  результатов. Хотите укрепить бренд, повысить
                  вовлечённость или запустить кампанию? Качественный контент-маркетинг — ваш путь к успеху!
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Что предлагается в рамках услуги</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Посты для социальных сетей</h3>
                <p>
                  Создаю яркие и вовлекающие посты для Instagram, ВКонтакте, Telegram и других платформ. Тексты
                  привлекают внимание, усиливают ваш бренд и побуждают
                  аудиторию к взаимодействию, повышая охваты и лояльность клиентов.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Статьи для блогов и сайтов</h3>
                <p>
                  Разрабатываю информативные и оптимизированные статьи, привлекающие трафик и удерживающие читателей.
                  Контент адаптирую под ваши задачи, чтобы усилить
                  доверие к бренду и продвигать продукты или услуги эффективно.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Продающие тексты</h3>
                <p>
                  Пишу убедительные тексты для лендингов, email-рассылок и рекламных кампаний. Материалы мотивируют
                  клиентов к покупке, увеличивая конверсии и помогая
                  вашему бизнесу достигать поставленных целей быстро.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Презентации для бизнеса</h3>
                <p>
                  Создаю профессиональные презентации для встреч, питчингов и мероприятий. Чёткий текст и стильный
                  дизайн подчеркнут ваши идеи, сделают выступления
                  запоминающимися и убедят партнёров или инвесторов.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Готовы усилить свой бренд?</h2>
                <p>
                  Запустите контент-маркетинг, который работает! Получите уникальные тексты, презентации и рекламу,
                  чтобы привлечь клиентов и увеличить охваты.
                  Свяжитесь со мной для консультации — ваш успех начинается с одного шага!
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Получить консультацию</button>
              </div>
              <div class="revers-list flex justify-center justify-start--sm mt-3">
                <a href="/services/" class="hover-rotate">Назад к списку услуг</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ================================================== -->

      <?php if (file_exists($root . "/template/shared/footer.php")): ?>
      <?php require_once $root . '/template/shared/footer.php';?>
      <?php endif;?>
