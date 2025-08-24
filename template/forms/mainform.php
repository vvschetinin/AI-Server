<!-- The form -->
<form action="#" id="modal-form" method="POST" class="form-overlay modal-form">
  <div class="form-body">
    <div class="success"><span></span></div>
    <!-- Form fields -->
    <ul class="form-fields">
      <li>
        <div class="input-container">
          <input name="name" type="text" value="" class="large" required placeholder="Ваше имя *">
        </div>
      </li>
      <li>
        <div class="input-container">
          <input name="phone" type="tel" data-phone-pattern value="" class="large" required
            placeholder="Номер телефона *">
        </div>
      </li>
      <li>
        <div class="input-container">
          <input name="email" type="email" value="" class="large" placeholder="E-mail">
        </div>
      </li>
      <li>
        <div class="input-container area-container">
          <textarea name="message" id="message-contact" rows="7" required
            placeholder="Краткое описание проекта / работ *"></textarea>
        </div>
      </li>
    </ul>
    <!-- End Form fields -->
    <div class="checkbox-container flex">
      <input type="checkbox" name="formcheck" id="form-checkbox" value="">
      <div class="label">
        <label for="form-checkbox">Я согласен(на) на обработку персональных данных и принимаю условия</label>
        <a href="/privacy/" target="_blank">Политики конфиденциальности</a>
      </div>
    </div>
  </div>
  <div class="form-footer mb-2">
    <div id="answer-overlay"></div>
    <button class="form-btn" name="formbutton" id="form-submit-button">Отправить</button>
    <input type="hidden" class="form-hidden" name="project_name" value="Сайт AI Tools Владлена Щетинина">
    <input type="hidden" class="form-hidden" name="form_subject" value="Сообщение с модальной формы обратной связи">
    <input type="hidden" class="form-hidden" name="project_name" value="Сайт AI Tools Владлена Щетинина">
    <input type="hidden" class="form-hidden" name="subject" value="Начать проект">
    <input type="text" class="helpmess" name="<?= htmlspecialchars($honeypots['hp_main_contact']) ?>" value=""
      aria-hidden="true" autocomplete="off" tabindex="-1">
    <input type="email" class="form-target_page-email" name="<?= htmlspecialchars($honeypots['hp_secondary_info']) ?>"
      value="" aria-hidden="true" autocomplete="off" tabindex="-1">
    <input type="tel" class="form-target_page-phone" name="<?= htmlspecialchars($honeypots['hp_message_field']) ?>"
      value="" aria-hidden="true" autocomplete="off" tabindex="-1">
  </div>
</form>
<!-- End Form -->
