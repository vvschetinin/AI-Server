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
  <link rel="icon" type="image/ico" href="/favicon.ico" alt="Favicon сайта" />
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

      <section class="section-inner bg-dark">
        <div class="container--middle">
          <div class="row element-animation-up">
            <div class="col-100">
              <article>
                <div class="hero-inner">
                  <h1 class="h1-inner deco-line mb-0">
                    <!-- Основной H1: главный коммерческий запрос -->
                    Разработка AI чат-ботов
                    <span>Под ключ для Telegram, WhatsApp и сайтов</span>
                  </h1>
                </div>
                <p>
                  Хотите сократить расходы на операторов и не терять клиентов ночью? Я предлагаю профессиональную <strong>разработку чат-ботов с искусственным интеллектом</strong> (на базе ChatGPT и других нейросетей). Умный бот не просто отвечает по шаблону — он понимает контекст, консультирует, оформляет заказы в
                  <strong>CRM</strong> и прогревает холодную аудиторию. Это не расходы, а инвестиция в <strong>автоматизацию продаж</strong>, которая окупается за 1-2 месяца.
                  Закажите внедрение AI-помощника и освободите свое время для масштабирования бизнеса.
                </p>
              </article>
            </div>
          </div>
          <!-- Преимущества (Step position) -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Поддержка 24/7 без выходных</h3>
                <p>
                  Бот мгновенно отвечает клиентам даже в 3 часа ночи. Никаких пропущенных заявок и "висения" на линии. Это повышает лояльность и конверсию в покупку, пока ваши конкуренты спят.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Автоматизация продаж и лидогенерация</h3>
                <p>
                  Я создаю <strong>продающих ботов</strong>, которые ведут клиента по воронке: от первого касания до оплаты. Бот снимает возражения, рекомендует товары и записывает данные в CRM (Битрикс24, AmoCRM). Вы получаете готовые лиды и рост прибыли без расширения штата менеджеров.
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <!-- LSI-заголовок -->
                <h2 class="h2-title deco-line">Для каких ниш подходят AI-боты</h2>
                <ul class="services-list mb-1">
                  <li><strong>Интернет-магазины:</strong> Помощь в подборе товара, статус заказа, FAQ по доставке.</li>
                  <li><strong>Сфера услуг (Салоны, Клиники):</strong> Автоматическая запись на прием, напоминания о визите.</li>
                  <li><strong>Образование (Инфобизнес):</strong> Прогрев перед вебинаром, выдача гайдов, ответы на вопросы учеников.</li>
                  <li><strong>HR и Найм:</strong> Первичное анкетирование кандидатов и онбординг сотрудников.</li>
                </ul>
                <p>
                  Неважно, стартап у вас или крупная компания — <strong>внедрение нейросетей</strong> в общение с клиентами снижает стоимость лида (CPL) и разгружает службу поддержки на 70%.
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Этапы разработки и функционал</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Проектирование сценариев (Скрипты)</h3>
                <p>
                  Разрабатываю логику диалогов и "личность" бота, чтобы общение было живым и соответствовало вашему Tone of Voice. Бот будет вежливым экспертом, который мягко подводит к продаже.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Подключение AI (ChatGPT / YandexGPT)</h3>
                <p>
                  Настраиваю интеграцию с нейросетями для понимания свободной речи. Бот сможет отвечать на нестандартные вопросы, не предусмотренные кнопками меню.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Интеграция с CRM и платежными системами</h3>
                <p>
                  Настраиваю связку бота с вашей базой данных и приемом платежей (ЮKassa, Robokassa). Заказ автоматически попадает в систему учета, а клиент получает чек. Полная автоматизация.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Мультиканальность</h3>
                <p>
                  Один бот может работать сразу везде: <strong>Telegram, WhatsApp, ВКонтакте</strong> и виджет на сайте. Вы охватываете всю аудиторию, независимо от того, какой мессенджер они предпочитают.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Нужен умный бот для бизнеса?</h2>
                <p>
                  Перестаньте терять клиентов. Закажите <strong>разработку AI-бота</strong> прямо сейчас и начните продавать 24/7. Свяжитесь со мной для бесплатного расчета стоимости и демонстрации возможностей.
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Рассчитать стоимость
                  бота</button>
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
