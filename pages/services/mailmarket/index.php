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
                    <!-- Ключ: Email-маркетинг + Автоворонки -->
                    Настройка Email-маркетинга и автоворонок продаж
                    <!-- Боли клиента: Доставляемость (не спам) и Сегментация -->
                    <span>Триггерные рассылки, сегментация и высокая доставляемость</span>
                  </h1>
                </div>
                <p>
                  База подписчиков — это ваш золотой актив, который приносит деньги даже когда реклама отключена. Я помогаю внедрить <strong>системный email-маркетинг</strong>: от технической настройки домена (чтобы не попадать в спам) до запуска сложных <strong>автоматических воронок продаж</strong>.
                  Работаю с популярными сервисами (Unisender, SendPulse, Mindbox). Превратите "мертвую" базу адресов в лояльных клиентов, которые покупают снова и снова.
                </p>
              </article>
            </div>
          </div>
          <!-- Step position (Преимущества) -->
          <div class="row mt-2">
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Техническая настройка (Anti-Spam)</h3>
                <p>
                  Настраиваю DNS-записи домена (<strong>DKIM, SPF, DMARC</strong>) и Postmaster Tools. Это фундамент рассылок: ваши письма будут попадать в папку "Входящие", а не в "Спам". Провожу "прогрев" домена для безопасного старта.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Рост LTV и повторных продаж</h3>
                <p>
                  Email-канал имеет самый высокий ROI (возврат инвестиций). Правильная работа с базой увеличивает <strong>LTV (пожизненную ценность клиента)</strong> на 30-40%. Клиенты не забывают о вас и возвращаются за новыми покупками.
                </p>
              </article>
            </div>
          </div>
          <!-- Для кого услуга -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <article class="">
                <h2 class="h2-title deco-line">Для каких задач нужен Email-маркетинг</h2>
                <ul class="services-list mb-1">
                  <li><strong>Интернет-магазины (eCommerce):</strong> Возврат "брошенных корзин", подборки товаров, уведомления о скидках.</li>
                  <li><strong>Онлайн-школы и Инфобизнес:</strong> Прогревающие цепочки вебинаров, выдача лид-магнитов, продажа курсов.</li>
                  <li><strong>B2B сегмент:</strong> Длинные цепочки "подогрева" (nurturing), отправка кейсов и новостей компании.</li>
                  <li><strong>SaaS и сервисы:</strong> Onboarding (обучение) новых пользователей, уведомления об оплате подписки.</li>
                </ul>
                <p>
                  Я не просто делаю рассылку "по всем". Я внедряю <strong>сегментацию</strong>, чтобы каждый клиент получал только то, что интересно именно ему.
                </p>
              </article>
            </div>
          </div>
          <!-- Услуга детально (Что делаем) -->
          <div class="row mt-3 element-animation-up">
            <div class="col-100">
              <h2 class="h2-title deco-line">Виды рассылок и автоматизаций</h2>
            </div>
            <div class="col-100 col-xl-80 pl-0 pl-3--sm">
              <article class="service-step">
                <h3 class="h3-title lh-1 mb-05">Триггерные цепочки (Autoresponders)</h3>
                <p>
                  Письма уходят автоматически при определенном действии: регистрация на сайте (Welcome-серия), оставленная корзина, поздравление с Днем Рождения.
                  Настраивается один раз — работает годами.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Контентные и промо-рассылки</h3>
                <p>
                  Регулярные письма с полезными статьями, дайджестами или акциями. Разрабатываю стильный <strong>HTML-шаблон письма</strong>, который корректно отображается в
                  мобильных и на десктопе.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Реактивация "спящей" базы</h3>
                <p>
                  Серия писем для тех, кто давно не открывал рассылку. Помогает вернуть интерес или безопасно почистить базу от "мертвых душ", чтобы не переплачивать за тариф сервиса.
                </p>
              </article>
              <article class="service-step mt-15">
                <h3 class="h3-title lh-1 mb-05">Аналитика и A/B тестирование</h3>
                <p>
                  Тестирую заголовки, время отправки и кнопки (CTA). Анализирую Open Rate (открываемость) и Click Rate (клики). Интегрирую сервис рассылок с вашей <strong>CRM и Google Analytics</strong> для сквозной аналитики продаж.
                </p>
              </article>
            </div>
          </div>
          <!-- Призыв к действию -->
          <div class="row mt-3">
            <div class="col-100">
              <article>
                <h2 class="p-article color-white font-middle mb-0">Нужен аудит вашей базы?</h2>
                <p>
                  Если письма улетают в спам или база не приносит продаж — пора это исправить. Свяжитесь со мной, я проверю технические настройки домена и предложу стратегию реанимации ваших рассылок.
                </p>
              </article>
              <!-- Блок кнопок -->
              <div class="button-wrap flex justify-center mt-2 mt-3--lg">
                <button class="start-project-btn display-inline-block js-startproject">Настроить рассылку</button>
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
