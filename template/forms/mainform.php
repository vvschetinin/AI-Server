<div class="start-project-overlay">
  <div class="wrapper">
    <button class="close-btn display-block js-closebutton" aria-label="Закрыть окно">
      <span></span>
      <span></span>
    </button>
    <div class="container--middle inner">
      <div class="row justify-center">
        <div class="col-100 col-xxl-90">
          <!-- Form title -->
          <h2 class="h1-inner deco-line lh-1 color-black">Начать проект</h2>
          <!-- The form -->
          <form action="#" id="modal-form" class="form-overlay modal-form">
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
                <label for="form-checkbox">Я даю согласие на обработку предоставленных данных</label>
              </div>
            </div>
            <div class="form-footer mb-2">
              <div id="answer-overlay"></div>
              <button class="form-btn" name="formbutton" id="form-submit-button">Отправить</button>
              <input type="hidden" class="form-hidden" name="project_name" value="Сайт Владлена Щетинина">
              <input type="hidden" class="form-hidden" name="form_subject"
                value="Сообщение с модальной формы обратной связи">
              <input type="text" class="helpmess" name="<?= htmlspecialchars($honeypots['hp_helpmess']) ?>" value=""
                aria-hidden="true" autocomplete="off">
              <input type="email" class="form-target_page-email" name="<?= htmlspecialchars($honeypots['hp_email']) ?>"
                value="" aria-hidden="true" autocomplete="off">
              <input type="tel" class="form-target_page-phone" name="<?= htmlspecialchars($honeypots['hp_tel']) ?>"
                value="" aria-hidden="true" autocomplete="off">
            </div>
          </form>
          <!-- End Form -->
        </div>
      </div>
    </div>
  </div>
</div>
