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
                    Технический апгрейд вашего сайта
                    <span>Скорость, надёжность и конверсии</span>
                  </h1>
                </div>
                <p>
                  Хотите сайт, который привлекает клиентов, работает быстро и стабильно? Предлагаемые мной технические
                  услуги решают эти задачи: от мобильной адаптации
                  до аналитики и поддержки. Я оптимизирую ваш сайт для скорости, удобства и надёжности, чтобы увеличить
                  трафик и конверсии. Забудьте о медленной
                  загрузке или ошибках кода — я создам технически безупречное решение, которое усилит ваш бизнес.
                  Свяжитесь, чтобы обсудить, как вывести ваш сайт на
                  новый уровень!
                </p>
              </article>
            </div>
          </div>
          <!-- Step position -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Надёжность кода и высокая скорость</h3>
                <p>
                  Проверка и исправление кода по стандартам W3C устраняют ошибки, обеспечивая стабильную работу сайта.
                  Это улучшает SEO и совместимость с браузерами.
                  Оптимизация Google PageSpeed и ускорение загрузки сокращают время ожидания до 2 секунд. Это снижает
                  отказы, повышает ранжирование и делает клиентов
                  довольными.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Данные для роста</h3>
                <p>
                  Настройка аналитики (Google Analytics, Яндекс.Метрика) предоставляет чёткие данные о поведении
                  пользователей, помогая оптимизировать маркетинг и
                  увеличить конверсии на 15%.
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Кому подойдут технические услуги</h2>
                <p>
                  Эти услуги созданы для бизнеса, стремящегося к росту и эффективности. Малый бизнес? Оптимизирую сайт
                  для мобильных и скорости, чтобы привлечь
                  клиентов. Интернет-магазины? Настрою аналитику для роста продаж. Стартапы? Ускорю загрузку и обеспечу
                  надёжность. Крупные компании? Предложу поддержку
                  для стабильности. Если хотите больше трафика, конверсий и уверенности в сайте - я настрою современные
                  технические решения под ваши задачи. Свяжитесь,
                  чтобы начать!
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
                <h3 class="h3-title lh-1 mb-05">Оптимизация Google PageSpeed</h3>
                <p>
                  Оптимизирую изображения, код и сервер, чтобы достичь PageSpeed 90+. Быстрая загрузка снижает отказы,
                  улучшает SEO и повышает конверсии на 20%.
                  Разрабатываю адаптивный дизайн, тестирую на всех устройствах, чтобы сайт был удобным и быстрым на
                  смартфонах и планшетах.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Проверка валидности кода</h3>
                <p>
                  Анализирую и исправляю код по стандартам W3C, устраняя ошибки. Это обеспечивает стабильную работу
                  сайта, улучшает SEO и совместимость с браузерами.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Ускорение загрузки сайта</h3>
                <p>
                  Сжимаю файлы, настраиваю кэширование и сервер, чтобы страницы загружались менее чем за 2 секунды. Это
                  повышает ранжирование и удовлетворённость
                  клиентов.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Техническая поддержка</h3>
                <p>
                  Обновляю CMS, плагины, создаю бэкапы, устраняю ошибки. Это гарантирует безопасность, стабильность
                  сайта и экономит ваше время для бизнеса.
                  Устанавливаю Google Analytics, Яндекс Метрику, настраиваю цели и отчёты. Чёткие данные помогают
                  оптимизировать маркетинг и увеличить конверсии на 15%.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Готовы улучшить свой сайт?</h2>
                <p>
                  Увеличьте трафик, конверсии и надёжность с моими техническими решениями! От мобильной адаптации до
                  аналитики — я создам апгрейд, который выведет ваш
                  бизнес на новый уровень. Свяжитесь для консультации и начните усиливать сайт уже сегодня!
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
